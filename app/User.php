<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name','email','password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $appends = [
        'created_at_formatted'
    ];

    public function getCreatedAtFormattedAttribute()
    {
        if ($date = strtotime($this->created_at))
        return date("j M, Y", $date);

        return null;
    }
}
