<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class dashHomeController extends Controller
{
    public function viewDashHome(){
        if(Session::has('user_id')){
            $user = DB::select('select * from tbusers where use_id = ?', [
                Session::get('user_id')
            ]);
            return view('public.homeDash', [
                'usuario' => $user
            ]);
        }
        else{
            return redirect('/');
        }
    }
}
