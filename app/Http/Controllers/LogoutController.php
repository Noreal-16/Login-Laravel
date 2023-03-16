<?php

namespace App\Http\Controllers;

use Illuminate\Support\Session\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session as FacadesSession;

class LogoutController extends Controller
{
    public function logout(){
        
        FacadesSession::flush();

        Auth::logout();
        
        return redirect()->to('/login');
    }
}
