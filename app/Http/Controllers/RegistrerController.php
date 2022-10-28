<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class RegistrerController extends Controller
{
    //
    public function create(){
        return view('usuario.registrar');
    }

    public function store(Request $request){

     

        $request->validate([
            'name' => 'required',
            'apePaterno' => 'required',
            'apeMaterno' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);

        $user = User::Create(request(['name','email','apePaterno','apeMaterno','password']));
        auth()->login($user);
        return redirect()->to('/empleados');
        // return $request;
    }
}
