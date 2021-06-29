<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use \App\Models\City;
use \App\Models\Speciality;
use \App\Models\Governorate;

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
        'remember_token',
        'availability',
        'city_id',
        'governorate_id',
        'speciality_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [        
        'password',
        'remember_token',
        'created_at',
        'updated_at'        
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

    public function city(){
        return $this->belongsTo(City::class, 'city_id');
    }

    public function speciality(){
        return $this->belongsTo(Speciality::class, 'speciality_id');
    }
    public function governorate(){
        return $this->belongsTo(Governorate::class, 'governorate_id');
    }

    public function complaintcomments(){
        return $this->hasMany(ComplaintComment::class);
    }
    public function complaints(){
        return $this->hasMany(Complaint::class);
    }

    public function doctors(){
        return $this->hasMany(Complaint::class);
    }
    public function reviews(){
        return $this->hasMany(Review::class);
    }
}
 