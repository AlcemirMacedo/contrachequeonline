<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class dashController extends Controller
{
    public function viewDash(){
        if(Session::has('user_cpf')){
            $user = DB::select('select * from tbusers where use_cpf = ?', [
                    Session::get('user_cpf')
            ]);
            return view('public.dash', ['user' => $user]);
        }
        else{
            return redirect('/');
        }
    }
}
