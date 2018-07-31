<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin');

    }
    public function showLoginForm()
    {
        return view('auth.admin-login');
    }

    public function login(){
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:10'
        ]);
        if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->email], $request->remember)) {
            return redirect()->intended(route('admin.dashboard'));
        }

        return redirect()->back()->withInput($request->only('email', 'remember'));
    }


}
