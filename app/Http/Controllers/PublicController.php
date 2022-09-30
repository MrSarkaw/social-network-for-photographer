<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index(){

        $newUser = User::latest()->limit(10)->get();
        $topPhotographer = User::limit(6)->with('posts', function($q){
            $q->latest()->limit(2);
        })->withCount('posts')->get();

       $topPhotographer = $topPhotographer->sortByDesc(function($q){
          return  $q->count_post;
        });

        return view('index',  compact('newUser', 'topPhotographer'));
    }
}
