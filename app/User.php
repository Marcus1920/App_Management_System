<?php

namespace App;

use Illuminate\Notifications\Notifiable;

use Cartalyst\Sentinel\Users\EloquentUser as CartalystUser;


class User extends CartalystUser
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'email', 'password','permissions','last_login','first_name','last_name','cell_number',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
