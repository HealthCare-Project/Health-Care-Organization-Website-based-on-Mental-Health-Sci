@extends('includes.main')
@section('content')

  <div class="breadcumb-area bg-img bg-gradient-overlay" style="background-image: url(img/bg-img/35.jpg);">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12">
          <h2 class="title">Calculate Your weight  </h2>
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
              <li class="breadcrumb-item active" aria-current="page">Calculate Your weight </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <!-- ***** Breadcrumb Area End ***** -->
<!-- saved from url=(0052)https://ee3.us/wp-content/uploads/2019/02/weight.htm -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="style.css">
    <style type="text/css">
    
    
 
    </style>
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link href="./style.css" rel="stylesheet" type="text/css">
    <title></title>
    </head>
    <body>
    <center>
    <div class="decoration"></div>
    <script language="JavaScript">
    
    function bmiCalc(form) {
            var weight = Number(form.wt.value);
        var height = Number(form.ht.value);
    
        if (!checkNum(weight,"WEIGHT")) {
            form.wt.select();
            form.wt.focus();
            return false
        }
    
        if (!checkNum(height,"HEIGHT")) {
            form.ht.select();
            form.ht.focus();
            return false
        }
    
            if (form.wu.selectedIndex == 0) {
                                            //  What units for weight?
                                            //  0 = lbs
                                            //  1 = kg
                    weight = weight * 0.45359237;	//  Convert wt (lbs to kg)
            }
    
            if (form.sex[1].checked) {      //  Is the patient female?
                                            //  0 = male
                                            //  1 = female
            leanConvert = 148;
            idealConvert = 45.5;	//  conversion factors for women
            } else {
            leanConvert = 128;
            idealConvert = 50;	//  conversion factors for men
        }
    
        if (form.hu.selectedIndex == 0) {  
                    //  if height units are "inches"
            heightInches = height;
            heightMeters = height * 2.54 / 100;
        }
    
        if (form.hu.selectedIndex == 1) {  
                    //  if height units are "cm"
            heightInches = height / 2.54;
            heightMeters = height / 100;
        }
    
        if (form.hu.selectedIndex == 2) {  
                    //  if height units are "meters"
            heightInches = height * 100 / 2.54;
            heightMeters = height;
        }
    
    
        var bsa = 0.20247 * Math.pow(heightMeters,0.725) *
            Math.pow(weight,0.425);
        var leanKg = 1.1 * weight - leanConvert * (Math.pow(weight,2) / 
            Math.pow((100 * heightMeters),2));
        var leanLbs = leanKg * 2.2046226;
        var idealKg = idealConvert + 2.3 * (heightInches - 60);
        var idealLbs = idealKg * 2.2046226;
        var bmi = weight / Math.pow(heightMeters,2);
    
        bsa = rounding(bsa,2);
        leanKg = Math.round(leanKg);
        leanLbs = Math.round(leanLbs);
        idealKg = Math.round(idealKg);
        idealLbs = Math.round(idealLbs);
        bmi = rounding(bmi,1);
        if (bmi < 18.5) {
            var interp = "Below normal"
        } else {
            if (bmi < 25.0) {
                var interp = "Congratulations on the normal range"
            } else {
                if (bmi < 30.0) {
                    var interp = "Higher than normal"
                } else {
                    var interp = "You are overweight, you must lose it"
                }
            }
        }
    
            form.bsa.value = bsa;
            form.leanKg.value = leanKg;
        form.leanLbs.value = leanLbs;
            form.idealKg.value = idealKg;
        form.idealLbs.value = idealLbs;
            form.bmi.value = bmi;
        form.interp.value = interp;
    
        return true
    }
    
    
    function checkNum(val,text) {
            if ((val == null) || (isNaN(val)) || (val == "") || (val < 0)) {
            alert("Please enter numbers in the Height and Weight fields");
                    return false
            }
            return true;
    }
    
    
    function rounding(number,decimal) {
        multiplier = Math.pow(10,decimal);
        number = Math.round(number * multiplier) / multiplier;
            return number
    }
    
    
    </script>
    <script language="JavaScript">function bmiCalc(form) {
            var weight = Number(form.wt.value);
        var height = Number(form.ht.value);
    
        if (!checkNum(weight,"WEIGHT")) {
            form.wt.select();
            form.wt.focus();
            return false
        }
    
        if (!checkNum(height,"HEIGHT")) {
            form.ht.select();
            form.ht.focus();
            return false
        }
    
            if (form.wu.selectedIndex == 0) {
                                            //  What units for weight?
                                            //  0 = lbs
                                            //  1 = kg
                    weight = weight * 0.45359237;	//  Convert wt (lbs to kg)
            }
    
            if (form.sex[1].checked) {      //  Is the patient female?
                                            //  0 = male
                                            //  1 = female
            leanConvert = 148;
            idealConvert = 45.5;	//  conversion factors for women
            } else {
            leanConvert = 128;
            idealConvert = 50;	//  conversion factors for men
        }
    
        if (form.hu.selectedIndex == 0) {  
                    //  if height units are "inches"
            heightInches = height;
            heightMeters = height * 2.54 / 100;
        }
    
        if (form.hu.selectedIndex == 1) {  
                    //  if height units are "cm"
            heightInches = height / 2.54;
            heightMeters = height / 100;
        }
    
        if (form.hu.selectedIndex == 2) {  
                    //  if height units are "meters"
            heightInches = height * 100 / 2.54;
            heightMeters = height;
        }
    
    
        var bsa = 0.20247 * Math.pow(heightMeters,0.725) *
            Math.pow(weight,0.425);
        var leanKg = 1.1 * weight - leanConvert * (Math.pow(weight,2) / 
            Math.pow((100 * heightMeters),2));
        var leanLbs = leanKg * 2.2046226;
        var idealKg = idealConvert + 2.3 * (heightInches - 60);
        var idealLbs = idealKg * 2.2046226;
        var bmi = weight / Math.pow(heightMeters,2);
    
        bsa = rounding(bsa,2);
        leanKg = Math.round(leanKg);
        leanLbs = Math.round(leanLbs);
        idealKg = Math.round(idealKg);
        idealLbs = Math.round(idealLbs);
        bmi = rounding(bmi,1);
        if (bmi < 18.5) {
            var interp = "Below normal"
        } else {
            if (bmi < 25.0) {
                var interp = "Congratulations on the normal range"
            } else {
                if (bmi < 30.0) {
                    var interp = "Higher than normal"
                } else {
                    var interp = "You are overweight, you must lose it"
                }
            }
        }
    
            form.bsa.value = bsa;
            form.leanKg.value = leanKg;
        form.leanLbs.value = leanLbs;
            form.idealKg.value = idealKg;
        form.idealLbs.value = idealLbs;
            form.bmi.value = bmi;
        form.interp.value = interp;
    
        return true
    }
    
    
    function checkNum(val,text) {
            if ((val == null) || (isNaN(val)) || (val == "") || (val < 0)) {
            alert("Please enter numbers in the Height and Weight fields");
                    return false
            }
            return true;
    }
    
    
    function rounding(number,decimal) {
        multiplier = Math.pow(10,decimal);
        number = Math.round(number * multiplier) / multiplier;
            return number
    }</script> <form method="post" name="bmi">
    <div align="center">
    <table cellspacing="1" cellpadding="0" border="0" bgcolor="#FFFFFF"><tbody><tr><td>
    <table width="763" border="0" cellpadding="3" cellspacing="3" bgcolor="#FFFFFF" dir="rtl"><tbody><tr><td width="348">
    <font size="4"><b>Sex :</b> <input checked="" name="sex" type="radio" value="0"></font><font color="#0000FF"><b><font size="4">Male</font></b></font><font size="4"> <input name="sex" type="radio" value="1"></font><b><font color="#FF00FF" size="4">Female</font></b></td></tr><tr><td>
    <font size="4" color="#000080"></font><font size="4"> </font>
    <input type="number" class="form-control" name="wt" required="" placeholder="Enter your weight"><font size="4"> <select name="wu" size="1"><option value="0">
    Pound</option><option value="1" selected="">Kg</option></select></font></td></tr><tr><td>
    <font size="4" color="#000080"></font><font size="4"> </font>
    <input type="number" class="form-control" name="ht" required="" placeholder="Enter your height"><font size="4"> <select name="hu" size="1"><option value="0">
    "</option><option value="1" selected="">Cm</option><option value="2">
    Meter</option></select></font></td></tr><tr><td>
    <input name="button" onclick="bmiCalc(this.form)" type="button" value="Calculate" style="color:#FFFFFF; font-size:12pt; background-color:#FF9933"></td></tr><tr><td align="center">
    <p align="justify"><b> <font color="#ff0000"><font size="4">
    The results:</font> </font></b></p></td></tr><tr><td>
    <font color="#663300">Surface area of The body:</font> <font size="4"> <input maxlength="5" name="bsa" size="5"></font>
    m<sup>2</sup></td></tr>
    <tr>
    <td>
    <font color="#008000"><b>Your Ideal Weight is :</b></font><font size="3" color="#008000"><input maxlength="5" name="idealKg" size="3" style="color: #008000; "></font><font color="#008000">
    <b>Kg</b> =
    </font><font size="3" color="#008000">
    <input maxlength="5" name="idealLbs" size="3" style="color: #008000"></font><font color="#008000">
    <b>Pound</b></font></td>
    </tr>
    <tr><td>
    <font color="#663300">Weight Without Grease :</font><font size="3"><input maxlength="5" name="leanKg" size="3"></font>
    Kg <b>= </b> <font size="4"> <input maxlength="5" name="leanLbs" size="3"> </font>
    Pound</td></tr><tr><td>
    <font color="#663300">Your ratio of body weight to Surface :</font> <font size="4"> <input maxlength="5" name="bmi" size="5"></font>
    Kg/m<sup>2</sup></td></tr><tr><td align="center">
    <input maxlength="12" name="interp" style="color: #FF0000; font-size:10pt; font-family:Tahoma" size="28"></td></tr></tbody></table></td></tr></tbody></table>
    </div>
    </form> </center></body></html>

    <br>
@endsection