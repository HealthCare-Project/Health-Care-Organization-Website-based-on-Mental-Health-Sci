<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $table = 'reviews';


   protected $fillable = [
        'description',
        'patient_id',
        'doctor_id',
        'rating',
    ];
    protected $hidden = [
        'patient_id',
        'doctor_id',
        'review_id',
    ];

    public function patient(){
    	return $this->belongsTo(Patient::class, 'patient_id', 'id');
    }

    public function doctor(){
    	return $this->belongsTo(Doctor::class, 'doctor_id', 'id');
    }
}
