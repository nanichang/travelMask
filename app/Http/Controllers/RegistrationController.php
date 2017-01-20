<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;

class RegistrationController extends Controller
{
    //
    
    public function create(){
        return view('auth.register');
    }
    
    public function register(Request $request) {
        $user = Sentinel::registerAndActivate($request->all());
        
        dd($user);
        
    }
}
