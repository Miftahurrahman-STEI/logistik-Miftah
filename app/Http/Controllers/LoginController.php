<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    public function index(): View 
    {
        return view('auth.login');
    }

    public function registration(): View
    {
        return view('auth.register');
    }

    public function dashboard()
    {
        if (Auth::check()) {
            return view('dashboard');
        }
  
        return redirect("login")->withSuccess('Opps! You do not have access');
    }

    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return redirect()->intended('login')->withError('Email tidak ditemukan.');
        }
        
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')->withSuccess('You have Successfully loggedin');
        }
        return redirect("login")->withError('Opps! Email atau Password anda salah.');
    }

    public function postRegistration(Request $request) 
    {
        $request->validate([
            'name'      => 'required',
            'email'     => 'required|email|unique:users',
            'password'  => 'required'
        ]);

        $data = $request->all();
        $check = $this->create($data);

        Auth::login($check);

        return redirect("dashboard")->withSuccess('You have successfully registered');
    }

    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }

    public function logout(): RedirectResponse 
    {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }
}