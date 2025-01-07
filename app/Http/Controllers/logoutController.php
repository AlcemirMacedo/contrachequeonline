<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class logoutController extends Controller
{
    public function logOut(){
        Session::flush();
        return redirect('/');
    }
}
