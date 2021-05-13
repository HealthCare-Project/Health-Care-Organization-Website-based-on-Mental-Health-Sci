<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComplaintComment extends Model
{
    use HasFactory;

   protected $fillable = [
        'description',
        'complaint_id',
    ];
    protected $hidden = [
        'patient_id',
        'doctor_id',
        'complaint_id',
    ];
    public function complaint(){
    	return $this->belongsTo(Complaint::class, 'complaint_id', 'id');
    }

    public function patient(){
    	return $this->belongsTo(Patient::class, 'patient_id', 'id');
    }
    public function doctor(){
    	return $this->belongsTo(Doctor::class, 'doctor_id', 'id');
    }
}
