<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
<<<<<<< HEAD
        'first_name',
        'last_name',
        'email',
        'password',
        'height',
        'weight',
        'phone',
        'age',
=======
        'name',
        'email',
        'password',
>>>>>>> 93cb29eee4589d0d01a44db1e28422ac9ff6cfa4
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
<<<<<<< HEAD

    public function setPasswordAttribute($password){
        $this->attributes['password'] = bcrypt($password);
    }
=======
>>>>>>> 93cb29eee4589d0d01a44db1e28422ac9ff6cfa4
}
