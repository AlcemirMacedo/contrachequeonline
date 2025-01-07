<?php

namespace App\Http\Controllers;

use App\Http\Requests\loginValidateRequst;
use App\Models\userModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class loginController extends Controller
{
    public function login(loginValidateRequst $request){
        // dd($request);

        $request->validated();
        $user = userModel::where('use_cpf', $request->cpf)->first();

        if($user && Hash::check($request->pass, $user->use_pass)){
            Session::put('user_id', $user->use_id);
            Session::put('user_cpf', $user->use_cpf);
            Session::put('user_name', $user->use_name);

            return back()->with('successlogin', 'Logado com sucesso');
        }
        else{
            return back()->with('errorlogin', 'Login inválido')->withInput();
        }

    }
}
