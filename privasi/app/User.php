<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    protected $fillable = [
        'name', 'email', 'password', 'level'
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function level_()
    {
        return $this->belongsTo('App\Level', 'level', 'id');
    }
}
