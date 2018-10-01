<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Notifications\UserInfo;

class UserController extends Controller
{

  public function getStoreValidation(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|unique:posts|max:255',
            'body' => 'required',
        ]);
    }

    public function index(Request $request)
    {
        dd($request);
    }
    public function create(Request $request)
    {

    }

    public function store(Request $request)
    {
        //Will stop if validation catches error
        //$request->validate($request->getStoreValidation());
/*
        $input['password'] = Hash::make($input['password']);
        $email = $input['email'];
        $user = User::create($input);

        $this->handleEmailtoUser($request, $user, $email);
    }
    */
    public function edit(Request $request)
    {

    }
    public function update(Request $request)
    {

    }

    private function handleEmailToUser(Request $request, User $user, $email)
    {
        //validate fields and get parameter for user email
        //Check that user has pressed send password
        //send email
        if ($request->has('sendtouser')) {
            $newPassword = str_random(12);
            $user->save();
            dd($user);
            $user->notify(new UserInfo($newPassword), $email);
        }
    }
}
*/
/*  public function __construct(){
        $this->middleware('auth');
     }
*/
