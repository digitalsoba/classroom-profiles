<?php

namespace App;

use CSUNMetaLab\Authentication\MetaUser;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends MetaUser
{
    public $incrementing = false;
    protected $primaryKey = "user_id";
    protected $keyType = 'string';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username','user_id', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getEmailUriAttribute() {
        return explode('@',$this->email)[0];
    }

    public function scopeWhereEmailURI($query, string $email) {
        return $query->where('email','LIKE', $email.'@%.edu');
    }

    public function retrieveAuthorizedEmail(){
        $user = auth()->user();
        return $user->email;
    }
}
