<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashController extends Controller
{
    public function viewDash(){
        session_start();
        if(isset($_SESSION['useremail'])){
            return view('public.dash');
        }
        else{
            return redirect('/');
        }
    }
}
