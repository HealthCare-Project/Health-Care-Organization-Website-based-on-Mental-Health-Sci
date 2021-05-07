<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HospitalPhone extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillabe = [
        'phone',
        'hospital_id',
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
        'hospital_id',
        'created_at',
        'updated_at'
    ];


    ////relations
    public function hospital(){
        return $this->belongsTo(Hospital::class, 'hospital_id');
    }
}
