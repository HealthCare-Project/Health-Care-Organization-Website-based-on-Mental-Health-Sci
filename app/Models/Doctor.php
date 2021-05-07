<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Doctor extends Authenticatable implements MustVerifyEmail
{   
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'age', 
        'gender',
        'email',
        'password',
        'phone',
        'address',
        'governorate',
        'city',
        'specialty',
        'password',
        'doctor_image',
        'hospital_id',
        'created_at',
        'updated_at',
        'remember_token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'id',
        'password',
        'remember_token',
        'created_at',
        'updated_at',
        'hospital_id'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    
    ////relations
    public function doctorPhones(){
        return $this->hasMany(DoctorPhone::class, 'doctor_id');
    }

    public function hospitals(){
        return $this->belongsTo(Hospital::class, 'hospital_id');
    }


}
 