<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use Sentinel;
use Cartalyst\Sentinel\Native\Facades\Sentinel;
use Cartalyst\Sentinel\Checkpoints\NotActivatedException;

class AuthController extends Controller
{
    
    public function getLogin() {
        return view('auth.login');
    }
    
    public function doLogin(Request $request) {
        
        $this->validate($request, [
           'email'  => 'required|email',
           'password' => 'required',
        ]);
        
        $credentials = [
            'email'    => $request->email,
            'password' => $request->password,
        ];
        
        $user = Sentinel::authenticate($credentials);
        
        if(!Sentinel::authenticate($credentials)) {
            // return redirect()->back()->withInput()->with('error', 'Your Login Credentials didn\'t match');
            echo "fail to Authenticate user";
        }else{
            Sentinel::login($user);
            
            try {
                if (Sentinel::getUser()->inRole('admin')) {
                    session(['currentUserRole' => 'admin']);
                    session(['currentUserId' => $user->id]);
                    return redirect()->route('admin_dash');
                    // return view('layouts.main');
                }
                else if (Sentinel::getUser()->inRole('lecturer')) {
                    session(['currentUserRole' => 'lecturer']);
                    session(['currentUserId' => $user->id]);
                    return redirect()->route('lecturer_dash');
                    // echo "hello Lect";
                }
                else if (Sentinel::getUser()->inRole('student')) {
                    session(['currentUserRole' => 'student']);
                    session(['currentUserId' => $user->id]);
                    return redirect()->route('student_dash');
                    // echo "student";
                }
            } catch (BadMethodCallException $e) {
                return redirect()->route('login')
                        ->with('error', 'Your Session has expired. Please login again!');
            }
        }
    }
    
    public function logout() {
        try {
            Sentinel::logout(null, true);
            return redirect()->route('home');
        } catch (\Cartalyst\Sentinel\Checkpoints\NotActivatedException $e) {
            return redirect()->route('home');
        } catch (\ErrorException $e) {
            return redirect()->route('login')
                ->with('error', 'Session expired. Login again!');
        }
    }
}
