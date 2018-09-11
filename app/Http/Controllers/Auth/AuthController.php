<?php
namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    protected function validator(array $data)
      {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
        ]);
      }

    protected function create(array $data)
      {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
        ]);
      }

    public function login()
      {
        $this->validate($request, ['email' => 'required|email|exists:users']);

        $emailLogin = EmailLogin::createForEmail($request->input('email'));

        $url = route('auth.email-authenticate', [
          'token' => $emailLogin->token
        ]);

        Mail::send('auth.emails.email-login', ['url' => $url], function ($m) use ($request) {
          $m->from('noreply@myapp.com', 'MyApp');
          $m->to($request->input('email'))->subject('MyApp Login');
        });
        

        return 'Sähköposti lähetetty.'
      }

        Schema::create('email_logins', function (Blueprint $table) {
          $table->string('email')->index();
          $table->string('token')->index();
          $table->timestamps();
    });
}

?>
