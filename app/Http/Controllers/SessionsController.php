<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    //
    public function index(){
        return view('usuario.login');
    }

    public function store(Request $request){
    //    return $request;
        if(auth()->attempt(request(['email','password']))){
            return redirect()->to('/empleados');
        }
        return redirect()->to('/');
    }

    public function destroy (){
        auth()->logout();
        return redirect()->to('/');
    }
}
