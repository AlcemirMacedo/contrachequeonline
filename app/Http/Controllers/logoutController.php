<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class logoutController extends Controller
{
    public function logOut(){
        session_start();
        session_destroy();

        return redirect('/');
    }
}
