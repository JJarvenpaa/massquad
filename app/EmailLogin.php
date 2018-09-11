<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmailLogin extends Model
{
    public $fillable = ['email', 'token'];

    public function user()
    {
        return $this->hasOne(\App\User::class, 'email', 'email');
    }



public static function createForEmail($email)
    {
        return self::create([
            'email' => $email,
            'token' => str_random(20)
        ]);
    }

}
