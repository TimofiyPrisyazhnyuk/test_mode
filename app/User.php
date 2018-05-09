<?php

namespace App;

use App\Notifications\VerifyEmail;
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
        'name', 'email', 'password', 'email_token',
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
     * @return bool
     */
    public function verified()
    {
        return $this->email_token === null;
    }

    /**
     * Send Email message
     */
    public function sendVerificationEmail()
    {
        $this->notify(new VerifyEmail($this));
    }
}
