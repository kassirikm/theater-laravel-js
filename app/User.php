<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'login','password','email','firstname', 'lastname','langue',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles()
    {
        return $this->hasMany('App\Role');
    }

    public function representation_users()
    {
        return $this->hasMany('App\Representation_User');
    }
}


class User extends Model
{
    protected $fillable = [
        'login','password','email','firstname', 'lastname','langue'
       ];

    public function role()
    {
        return $this->hasMany('App\Role');
    }
}

