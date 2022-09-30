<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index(){

        $newUser = User::latest()->limit(10)->get();

        return view('index',  compact('newUser'));
    }
}
