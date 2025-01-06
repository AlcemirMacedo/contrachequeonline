<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    public function addUser(Request $request){
        // dd($request);
        $senha = Hash::make($request->password, ['rounds'=>10]);

        try {
            $user = DB::insert('insert into tbusers values(null,?,?,?,?,?)', [
                $request->fullname,
                $request->cpf,
                $request->email,
                $senha,
                date('Y-d-m H:s:i')
            ]);
            return back()->with('success', 'Usuário cadastrado com sucesso');
        } catch (Exception $ex) {
            return back()->with('error', 'Não foi possível cadastrar');
        }


    }
}
