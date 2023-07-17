<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    // Show Register/create form
    public function create(){
        return view('user.signup');
    }

    // Store user info and create an account
    public function store(Request $request){
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'name' =>['required'],
            'password' =>['required', 'confirmed', 'min:6'],
            // Confirmed makes sure that the value fits another field
            // Example: valueName == valueName_confirmation
        ]);
        // has password
        $formFields['password'] = bcrypt($formFields['password']);

        // Create user
        $user = User::create($formFields);

        // Login
        auth()->login($user);
        return redirect('/');
    }

    // Logout
    public function logout(Request $request){
        auth()->logout();
        // Clear token and refresh session
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Redirect to login

        return redirect('/login');
        
        
    }
    
        // Show Login form
        public function login(){
            return view('user.login');
        }


        public function authenticate(Request $request){
            $formFields = $request->validate([
                'email' => ['required', 'email'],
                'password' =>['required']
            ]);

            // If login is succesful, redirect
            if(auth()->attempt($formFields)){
                $request->session()->regenerate();
            

            return redirect('/');

            }

            // If not, go back and display errors
            // Email error is set to this this so that users dont know that the email exists
            return back()->withErrors(['email' => 'Email or password is incorrect. Please try again'])->onlyInput('email');
        }


}
