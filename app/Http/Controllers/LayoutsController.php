<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Governorate;
use App\Models\Speciality;

class LayoutsController extends Controller
{
    //home page
    public function index()
    {
        return view('pages.index');
    }

    public function service()
    {
        return view('pages.service');
    }

    public function blog()
    {
        return view('pages.blog');
    }

    public function blogDetails()
    {
        return view('pages.blog-details');
    }

    public function application()
    {
        return view('applications.application');
    }

    /*
    |    functions for return views of medical department
    */
    public function internal_medicine()
    {
        return view('medical_department.internal_medicine');
    }
    public function cardiology()
    {
        return view('medical_department.cardiology');
    }
    public function endocrinology()
    {
        return view('medical_department.endocrinology');
    }
    public function hematology()
    {
        return view('medical_department.hematology');
    }
    public function nephrology()
    {
        return view('medical_department.nephrology');
    }
    public function neurology()
    {
        return view('medical_department.neurology');
    }
    public function oncology()
    {
        return view('medical_department.oncology');
    }
    public function psychiaty()
    {
        return view('medical_department.psychiatry');
    }
    public function pediatric()
    {
        return view('medical_department.pediatric');
    }
    public function dentist()
    {
        return view('medical_department.dentist');
    }
    public function psychology()
    {
        return view('medical_department.psychology');
    }
}
