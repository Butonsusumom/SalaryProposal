<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class User extends Model
{
    protected $table = 'users';
    protected $fillable = ['lastName','firstName', 'email', 'role', 'password'];

    public function generateToken()
    {
            $this->api_token = Str::random(60);

        $this->save();

        return $this->api_token;
    }
}
