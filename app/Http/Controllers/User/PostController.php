<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(Request $request){
        $this->validate($request, [
            'file.*' => 'mimes:png,jpg'
        ]);

        $names = [];
        for($i =0; $i<count($request->file('file')); $i++){
            $name = $request->file('file')[$i]->hashName();
            $names[] = $name;
            $request->file('file')[$i]->move('postimage', $name);
        }


        $request->merge([
            'img' => json_encode($names)
        ]);

        auth()->user()->posts()->create($request->only('img', 'category_id', 'caption'));

        return redirect()->back();

    }

    public function delete($id){
        auth()->user()->posts()->findOrFail($id)->delete();
        
        return redirect()->back();
    }
}
