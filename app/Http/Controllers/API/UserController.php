<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function login(Request $request) 
    {
        $crendentials = [
            'email' => $request->email,
            'password' => $request->password
        ];
        
        if(Auth::attempt($crendentials)) {
            $success = true;
            $message = "Você logou com sucesso!";
        } else {
            $success = false;
            $message = "Não autorizado!: Verifique o usuário e senha se estão corretos!";
        }
        $response = [
            'success' => $success,
            'message' => $message
        ];
        return response()->json($response);
    }

    public function register(Request $request) 
    {
        try {
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->save();

            $success = true;
            $message = "Usuário registrado com sucesso!";
         
    } catch(\illuminate\Database\QueryException $ex) 
    {
        $success = false;
        $message = $ex->getMessage();
    }
    $response = [
        'success' => $success,
        'message' => $message
    ];
    return response()->json($response);
    }
    public function logout()
    {
       try {
        Session::flush();
        $success = true;
        $message = "Você saiu com sucesso!";
       } catch(\illuminate\Database\QueryException $ex) {
        $success = false;
        $message = $ex->getMessage();
       }
       $response = [
        'success' => $success,
        'message' => $message
    ];
    return response()->json($response);
    }
}
