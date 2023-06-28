<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function login()
    {
      return view('admin.login');  
    } 
    public function showlogin(Request $request)
    {
      $credentials=$request->only('email','password');
        if(Auth::attempt($credentials))
        {
        $request->session()->regenerate();
        return redirect()->route('adminhome');
        }
        return back()->withErrors([
            'email'=>'the provided credentials do not match',
        ]);
    }
    public function staff_login()
    {
      return view('staff_login');
    }
    public function stafflog(Request $request)
    {
      $credentials=$request->only('email','password');
        if(Auth::attempt($credentials))
        {
        $request->session()->regenerate();
        return redirect()->route('staffhome');
        }
        return back()->withErrors([
            'email'=>'the provided credentials do not match',
        ]);
    }
    public function staffhome()
    {
      $user = Auth::user();
      return view('staff.staff_home',compact('user'));
    }
    public function logout()
   {

    Auth::logout();
    return redirect()->route('login');
   }  
  }



   