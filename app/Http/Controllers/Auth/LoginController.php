<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */


     public function login(Request $request)
     {
     $this->validate($request, [
         'email'=>'required|max:255|email',
         'password'=>'required|confirmed',
       ]);
       $this->getStoreValidation();
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
          // Success
          return redirect()->intended('/');
        } else {
          // Go back on error
          return redirect()->back()
          ->withErrors($this)
          ->withInput(Input::except('password'));


    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /*public function showLoginForm()
    {
        return view('auth.login');
    }*/
    private function handleSendToUser(Request $request, User $user)
    {
        if ($request->has('sendtouser')) {
        $newPassword = str_random(12);
        $user->password = $newPassword;
        $user->save();
        $user->notify(new UserInfo($newPassword));
        }
    }
}
