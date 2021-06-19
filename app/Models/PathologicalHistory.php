<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PathologicalHistory extends Model
{
    use HasFactory;

    protected $table = 'pathological_histories';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'patient_id',
        'weight',
        'height',
        'blood_type',
        'diabetic',
        'allergy_to_medical',
        'allergy_to_medical_description',
        'description',
        'Lsugar_test',
        'blood_pressure_sys',
        'blood_pressure_dyas',
        'smoke',
        'alcohol',
        'surgical_history',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'patient_id',

    ];
    
    //relations
    public function patients(){
    	return $this->belongsTo(Patient::class, 'patient_id', 'id');
    }

    public function user(){
        return $this->belongsTo(Patient::class, 'patient_id', 'id');
    }
}
