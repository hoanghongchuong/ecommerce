<?php
namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
class Admin extends Authenticatable
{
    use Notifiable;
    /**
     * active account
     */
    const ACTIVE     = 1;
    const NOT_ACTIVE = 0;
    /*
     *
     */
    protected $fillable = [
        'username', 'email', 'password',
    ];
    protected $hidden = [
       'password', 'remember_token',
    ];
}