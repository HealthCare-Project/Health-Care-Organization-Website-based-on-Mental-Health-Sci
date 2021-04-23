<head>
<link rel="stylesheet" href="{{asset('style2.css')}}">
</head>


@extends('layout.main')
@section('content')

  <!-- ***** Breadcrumb Area Start ***** -->
  <div class="breadcumb-area bg-img bg-gradient-overlay" style="background-image: url(img/bg-img/12.jpg);">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12">
          <h2 class="title">Doctor Registeration</h2>
        </div>
      </div>
    </div>
  </div>
  <div class="breadcumb--con">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Doctor Registeration</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <!-- ***** Breadcrumb Area End ***** -->

  <!-- ***** Doctor Information ***** -->
  <form action="" method="post">

    <fieldset>

      <legend>Personal Information</legend>
      <label>First name</label>
      <input type="text" name="firstname">

      <label>Last name</label>
      <input type="text" name="lastname">
    
      <label>E-mail</label>
      <input type="email" name="email">

      <label>Password</label>
      <input type="password" name="password">

      <label>Confirm Password</label>
      <input type="password" name="cpassword">

      <label>Gender</label>
      <input type="radio" name="gender" value="male">Male
      <input type="radio" name="gender" value="female">Female

    </fieldset>

    <fieldset>
      <legend>Scientific specialization and skills</legend>
      <label>Specialty</label>
      <input type="text" name="specialty">

      <hr>

      <label>Languages</label>
      <input type="checkbox" name="English">English<br>
      <input type="checkbox" name="French">French<br>
      <input type="checkbox" name="German">German<br>

      <hr>
    
      <label>Skills</label>
      <textarea>Write down your skills</textarea>

    </fieldset>

    <fieldset>
      <legend>Worktime</legend>
      <label>Select work days</label>
      <input type="checkbox" name="Sunday">Sunday<br>
      <input type="checkbox" name="Monday">Monday<br>
      <input type="checkbox" name="Tuesday">Tuesday<br>
      <input type="checkbox" name="Wednesday">Wednesday<br>
      <input type="checkbox" name="Thursday">Thursday<br>
      <input type="checkbox" name="Friday">Friday<br>
      <input type="checkbox" name="Saturday">Saturday

      <br>
      <hr>

      <label>Hours of work per day</label>
      <input type="checkbox" name="option1">From 8:00AM TO 2:00PM<br>
      <input type="checkbox" name="option1">From 2:00PM TO 8:00PM<br>
      <input type="checkbox" name="option1">From 8:00PM TO 12:00PM
    </fieldset>

    <fieldset>
      <legend>Contact Information</legend>
      <label>Phones</label>
      <input type="text" name="phone1">
      <input type="text" name="phone2" placeholder="second number, if any"><br>

      <label>Landline phone</label>
      <input type="text" name="Landlinephone">
      <hr>

      <label>Country / region</label>
      <input type="text" name="region">

      <label>Street</label>
      <input type="text" name="street">
      <hr>
      
      <label>ZIP code</label>
      <input type="text" name="ZIP code">
   
    </fieldset>

    <fieldset>

      <input type="submit" value="Send Your Data">			

    </fieldset>

  </form>
  <!-- ***** Doctor Information End ***** -->




@endsection