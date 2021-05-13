@extends('layout.main')
@section('content')

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pathological-history.css') }}">

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
                            <li class="breadcrumb-item"><a href="/"><i class="fa fa-home"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Fill Pathological History</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Breadcrumb Area End ***** -->
    <!-- ***** Fill Patient Information Area ***** -->

    <form method="POST" action="{{ route('form.store') }}" enctype="multipart/form-data">
        @csrf

        <fieldset>
            <legend>Current patient information</legend>

            <label for="blood_type">Blood Type</label><br />
            <input type="text" name="blood_type" placeholder="blood type" value="{{ old('blood_type') }}"><br />
            @error('blood_type')
                <small class="form-text text-danger">{{ $message }}</small>
            @enderror

            <label for="height">Height</label><br />
            <input type="text" name="height" placeholder="height" value="{{ old('height') }}">Cm<br />
            @error('height')
                <small class="form-text text-danger">{{ $message }}</small>
            @enderror

            <label for="weight">Weight</label><br />
            <input type="text" name="weight" placeholder="weight" value="{{ old('weight') }}">Kg<br />
            @error('weight')
                <small class="form-text text-danger">{{ $message }}</small>
            @enderror
        </fieldset>

        <fieldset>
            <legend>Special information</legend>

            <label>Do you have Diabetes?</label><br />
            <input type="radio" name="diabetic" value="yes"> yes <br />
            <input type="radio" name="diabetic" value="no"> No <br />

            <label for="allergy_to_medical">allergy to medical</label>
            <script>
                function ShowHideDiv() {
                    var yes = document.getElementById("yes");
                    var medicalAllergy = document.getElementById("allergy_to_medical_description");
                    medicalAllergy.style.display = yes.checked ? "block" : "none";
                }

            </script>
            <input type="radio" value="yes" id="yes" name="allergy_to_medical" onclick="ShowHideDiv()">
            <label for="yes">Yes</label>
            <input type="radio" value="no" id="no" name="allergy_to_medical" onclick="ShowHideDiv()">
            <label for="no">No</label>


            <div id="allergy_to_medical_description" style="display: none">
                what medicines you have allergy from:
                <input type="text" id="allergy_to_medical_description" />
            </div><br />

            <label for="description">Do you other health problems?</label>
            <textarea id="description" name="description" cols="50" rows="4"></textarea>
        </fieldset>

        <fieldset>
            <legend>Recent measurements</legend>
            <label for="Lsugar_test">Last sugar test</label>
            <input type="text" id="Lsugar_test" name="Lsugar_test" size="6">mg/dl <br />
            <label for="Lblood_test">Last pressure measurement</label> <br />
            SYS <input type="text" name="blood_pressure_sys">mm Hg<br>
            DIA <input type="text" name="blood_pressure_dyas">mm Hg
        </fieldset>

        <fieldset>
            <legend>Habits</legend>
            <input type="checkbox" name="smoke" value="{{ old('smoke') }}">
            <label for="smoke">Smoking</label><br>

            <input type="checkbox" name="alcohol" value="{{ old('alcohol') }}">
            <label for="alcohol">Alcohol</label>
        </fieldset>

        <fieldset>
            <legend>Additional Infromation</legend>
            <label for="surgical_history">Did you have any medical surgeries?</label>
            <textarea name="surgical_history" cols="50" rows="4"></textarea>
        </fieldset>

        <button type="submit" class="btn btn-primary">Send Your Data</button>
    </form>
    <!-- ***** Fill Patient Information Area End***** -->

@endsection
