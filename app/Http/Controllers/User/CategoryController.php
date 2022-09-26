<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categoryStore(Request $request){
        $this->validate($request, [
            'name' => 'required'
        ]);

        auth()->user()->categories()->create($request->only('name', 'user_id'));

        return redirect()->back();
    }

    public function deleteCategory($id){
        auth()->user()->categories()->findOrFail($id)->delete();
        return redirect()->back();
    }
}
