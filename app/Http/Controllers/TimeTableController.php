<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Doctor;

class TimeTableController extends Controller
{
    //
    public function index()
    {

        $doctors = Doctor::join('specialities', 'doctors.speciality_id', '=', 'specialities.id')
            ->join('doctor_day_schedules', 'doctors.day_id', '=', 'doctor_day_schedules.id')
            ->join('doctor_time_schedules', 'doctors.time_id', '=', 'doctor_time_schedules.id')
            ->get([
                'doctors.*',
                'specialities.name',
                'doctor_day_schedules.day',
                'doctor_time_schedules.time'
            ]);

        return view('pages.timetable', [
            'doctors' => $doctors,
        ]);
    }
}
