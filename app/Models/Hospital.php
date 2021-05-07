<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillabe = [
        'name',
        'address',
        'city',
        'governorate',
        'created_at',
        'updated_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'id',
        'created_at',
        'updated_at'
    ];

    
    ////relations
    public function hospitalPhones(){
        return $this->hasMany(HospitalPhone::class, 'hospital_id');
    }

    public function hospitalDoctors(){
        return $this->hasMany(Doctor::class, 'hospital_id');
    }
}
