<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function show(){
        //Auth::user()->username;
        return view('home.index');
    }
}
