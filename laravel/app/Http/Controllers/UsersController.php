<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Container\RewindableGenerator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{

    function login()
    {
        $data['title'] = 'Login';
        return view('auth.login', $data);
    }

    function registration()
    {
        $data['title'] = 'Register';
        return view('auth.register', $data);
    }

    function validate_registration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'municipality' => 'required',
            'phone' => 'required',
            'position' => 'required',
            'password' => 'required|min:6',
            'password_confirmation' => 'required|same:password'
        ]);
        $data = $request->all();

        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'municipality' => $data['municipality'],
            'position' => $data['position'],
            'phone' => $data['phone'],
            'password' => Hash::make($data['password']),
            'password'
        ]);

        return redirect('login')->with('success', 'Registration Completed, Please Login');
    }

    function validate_login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect('dashboard');
        }

        return redirect('login')->with('success', 'Login credentials are not valid');
    }

    function dashboard()
    {

        if (Auth::check()) {
            if (Auth::guest()) {
                return redirect()->route('/');
            }
            $title['title'] = 'Dashboard';
            return view('dashboard/dashboardmain', $title);
        }

        return redirect('login')->with('succes', 'You are not allowed to access');
    }


    function logout()
    {
        Session::flush();
        Auth::logout();

        return Redirect('/');
    }

    function forgotpassword(Request $request)
    {
        return view('forgot');
    }
}
