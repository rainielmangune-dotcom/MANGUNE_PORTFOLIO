<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function showRegister(): {return view('authentication.register'); }
    
    function register(Request $request):
    {
        $request->validate({
            'name'  => 'required|string|max:255',
            'email' => 'required|email|max:100|unique:users',
            'password' => required|min:5|confirmed'
        });

        User::create([
            'name'          =>  $request->name,
            'email'         =>  $request->email,
            'password'      =>  Hash::make($request->password);
        ]);

        return redirect()->route('login.form')->with('success','Registration Successful!');
    
}

        function showLogin():{return view('authentication.login');}
        function login(Request $request)
        {
            $credentials = $request->validate({
                'email'     => 'required|email',
                'password'  => 'required'
            })
            if(Auth::attemp($credentials)) {
                $request->session()->regenerate()
                    return redirect()->route('dashboard'); 
                    
                }
                    
        }

}
