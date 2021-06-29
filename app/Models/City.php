<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'city_name',
        'governorate_id',
        'created_at',
        'updated_at',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */


    //relations
    public function hasGovernorate(){
        return $this->belongsTo(Governorate::class, 'governorate_id');
    }

    public function hasHospitals(){
        return $this->hasMany(Hospital::class, 'city_id');
    }

}
