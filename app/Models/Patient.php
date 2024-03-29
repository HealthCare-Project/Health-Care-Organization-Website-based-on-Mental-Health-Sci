<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Patient extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable;
    protected $guard = 'patient';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'height',
        'weight',
        'phone',
        'age',
        'name',
        'email',
        'password',
        'verification_code'
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

    public function setPasswordAttribute($password){
        $this->attributes['password'] = bcrypt($password);
    }


    public function complaints(){
        return $this->hasMany(Complaint::class);
    }

    public function complaintcomments(){
        return $this->hasMany(ComplaintComment::class);
    }
    
    public function phone(){
        return $this->hasOne(PathologicalHistory::class);
    }

    public function patientPathologicalHistory(){
        return $this->hasOne(PathologicalHistory::class, 'patient_id', 'id');
    }
    public function reviews(){
        return $this->hasMany(Review::class);
    }
}
