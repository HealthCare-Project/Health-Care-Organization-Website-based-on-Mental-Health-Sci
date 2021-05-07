
<head>
  <meta charset="UTF-8">
  <meta name="description" content="Dento - Dentist &amp; Medical HTML Template">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>Pathological History</title>

  <!-- Favicon -->
  <link rel="icon" href="./img/core-img/favicon.ico">

  <!-- Core Stylesheet -->
  <link rel="stylesheet" href="style.css">

  
  <script type="text/javascript">
    function ShowHideDiv(chkMedicine) 
    { var dvMedicine = document.getElementById("dvMedicine");
      dvMedicine.style.display = chkMedicine.checked ? "block" : "none"; 
    }
  </script>
  <link rel="stylesheet" href="{{asset('style3.css')}}">

</head>
@extends('layout.main')
@section('content')

<body>
  <!-- ***** Breadcrumb Area Start ***** -->
  <div class="breadcumb-area bg-img bg-gradient-overlay" style="background-image: url(img/bg-img/12.jpg);">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12">
          <h2 class="title">Pathological History</h2>
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
              <li class="breadcrumb-item active" aria-current="page">Fill Pathological History</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <!-- ***** Breadcrumb Area End ***** -->
  <!-- ***** Fill Patient Information Area ***** -->

  <form action="" method="post">
    <fieldset>

      <legend>Current patient information</legend>
      <label for="bloodtype">Blood Type</label>
      <input type="text" id="bloodtype" name="bloodtype">

      <label for="length">Height</label>
      <input type="text" id="height" name="height">Cm

      <label for="weight">Weight</label>
      <input type="text" id="weight" name="weight">Kg

      <label for="occupation">Occupation</label>
      <input type="text" id="occupation" name="occupation">

      <label for="socialstatus">Social Status</label>
      <input type="text" id="socialstatus" name="socialstatus">

    </fieldset>

    <fieldset>

      <legend>Medications</legend>
      <p>Do you take any prescription medicines? If so, what is the dose and frequency?</p>
      <label for="yesMedicine">
      <input type="radio" id="yesMedicine" name="Medicine">Yes</label>

      <label for="noMedicine">
      <input type="radio" id="noMedicine" name="Medicine">No</label>

    </fieldset>

    <fieldset>
      <legend>Special information</legend>
      <p>Do you allergy to medical?</p>
      <input type="radio" id="all" name="allergy" value="yes">
      <label for="all">Yes</label>
      <input type="radio" id="all2" name="allergy" value="no">
      <label for="all2">No</label>

      <p>Have you ever used an inhaler or asthma medication?</p>
      <input type="radio" id="inh" name="inhaler" value="yes">
      <label for="inh">Yes</label>
      <input type="radio" id="inh2" name="inhaler" value="no">
      <label for="inh2">No</label>

      <p>Were you ever operated on, even as a child? What year did this occur? Were there any complications?</p>
      <input type="radio" id="ope" name="operate" value="yes">
      <label for="ope">Yes</label>
      <input type="radio" id="ope2" name="operate" value="no">
      <label for="ope2">No</label>
      <hr>
      <label for="problem">Do you other health problems?</label>
      <textarea id="problem" name="problem" cols="50" rows="4"></textarea>
    </fieldset>

    <fieldset>
      <legend>Recent measurements</legend>
      <label for="sugartest">Last sugar test</label>
      <input type="text" id="sugartest" name="sugartest" size="6">mg/dl
      <hr>
      <label for="bloodtest">Last pressure measurement</label>
      SYS <input type="text" id="bloodtest" name="bloodtest" size="6">mm Hg<br>
      DIA <input type="text" id="bloodtest" name="bloodtest" size="6">mm Hg
    </fieldset>
  
    <fieldset>

      <legend>Habits</legend>
      <input type="checkbox" id="sm" name="option1" value="smoking">
      <label for="sm">Smoking</label><br>
      
      <input type="checkbox" id="al" name="option2" value="alcohol">
      <label for="al">Alcohol</label>

      <label for="time">how many times a day? </label>
      <input type="text" id="time" name="TimesInDay">

    </fieldset>
  
    <fieldset>

      <legend>Family history</legend>
      <p> Does any family member suffer from any diseases?</p>
      <input type="radio" id="any" name="member" value="yes">
      <label for="any">Yes</label>
      <input type="radio" id="any1" name="member" value="no">
      <label for="any1">No</label>

      <p>Does anyone in the family suffer from a specific allergy?</p>
      <input type="radio" id="suf" name="suffer" value="yes">
      <label for="suf">Yes</label>
      <input type="radio" id="suf1" name="suffer" value="no">
      <label for="suf1">No</label>

      <p>Has anyone in our family ever had a heart attack?</p>
      <input type="radio" id="hea" name="ever" value="yes">
      <label for="hea">Yes</label>
      <input type="radio" id="hea2" name="ever" value="no">
      <label for="hea2">No</label>

      <p>Are there any diseases that continue to appear among our relatives?</p>
      <input type="radio" id="dis" name="relative" value="yes">
      <label for="dis">Yes</label>
      <input type="radio" id="dis2" name="relative" value="no">
      <label for="dis2">No</label>

    </fieldset>

    <fieldset>

      <input type="submit" value="Send Your Data">

    </fieldset>

  </form>

  <!-- ***** Fill Patient Information Area End***** -->



@endsection
</body>