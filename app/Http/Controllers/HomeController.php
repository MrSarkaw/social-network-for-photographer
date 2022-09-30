<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $user = User::where('id', auth()->id())->with(['categories' => function($q){
            $q->withCount('posts');
        }, 'posts' =>function($q) use($request){
            $q->with('category')->latest();

            if($request->category_id)
            $q->where('category_id', $request->category_id);
        }])->withCount('posts')->firstOrFail();
        return view('home', compact('user'));
    }
}
