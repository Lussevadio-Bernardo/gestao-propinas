<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function logar(Request $request){
        if( Auth::attempt(['email'=>$request->nome,'password'=>$request->pass])){
            $request->session()->regenerate();
            $useres=Auth()->user();
            return redirect()->route('admin');
        }else{
            dd("Estou auio");
        }
    }
    
public function destroy(Request $request){   
    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();
    
    return redirect('/');
}
}
