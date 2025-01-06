<?php

namespace App\Http\Controllers;

use App\Models\userModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class loginController extends Controller
{
    public function login(Request $request){
        // dd($request);
        $user = userModel::where('use_cpf', $request->cpf)->first();

        if($user && Hash::check($request->pass, $user->use_pass)){
            session_start();
            $_SESSION['useremail']=$user->use_email;
            $_SESSION['username']=$user->use_name;

            return back()->with('successlogin', 'Logado com sucesso');
        }
        else{
            return back()->with('errorlogin', 'Login inválido')->withInput();
        }

    }
}
