<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function updateCover(Request $request){
        $this->validate($request, [
            'file' => 'required|mimes:png,jpg|max:2048'
        ]);

        $name = $request->file('file')->hashName();

        $request->file('file')->move('coverimage', $name);

        if($request->profile){
            User::findOrFail(auth()->id())->update([
                'avatar' => $name
            ]);
        }else{
            User::findOrFail(auth()->id())->update([
                'cover' => $name
            ]);
        }

        return redirect()->back();
    }


    public function updateProfile(Request $request){
        $user = User::findOrFail(auth()->id());

        $this->validate($request,[
            'name' => 'required',
            'email' => 'email|unique:users,email,'.$user->id,
            'password' => 'nullable|min:6|confirmed',
            'location' => 'required',
            'bio' => 'max:400'
        ]);

        if($request->password)
        $user->update($request->only('name', 'email', 'password', 'location', 'bio'));
        else
        $user->update($request->only('name', 'email', 'location', 'bio'));

        return redirect()->back();
    }
}
