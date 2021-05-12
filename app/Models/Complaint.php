<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    use HasFactory;

   protected $fillable = [
        'description',
        'title',
        'patient_id',
    ];

    protected $hidden = [
    	'patient_id',
	];
    public function patient(){
    	return $this->belongsTo(Patient::class, 'patient_id', 'id');
    }
}
