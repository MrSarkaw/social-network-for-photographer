<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class FollowController extends Controller
{
    public function store($id){
       User::findOrFail($id);

       if(auth()->id() != $id){
        $check =  auth()->user()->following()->where('receiver_id', $id)->first();

        if($check){
            $check->delete();
        }else{
            auth()->user()->following()->create([
                'receiver_id' => $id
            ]);
        }
       }
    }
}
