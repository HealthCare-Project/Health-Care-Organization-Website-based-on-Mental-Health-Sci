@extends('includes.main')
@section('content')

    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{{ asset('css/appointment/style.css') }}">
        <!-- include jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    </head>

    <div class="appointment_search">
        <div class="content">
            <div class="subject">
                <h3>Book a Doctor</h3>
            </div>
            <div class="search_container">
                <div class="dropdown_row">
                    <label for="governorate">Governorate</label>
                    <select id="governorate" name="governorate" required>
                        <option value="ch" disabled selected>Choose The Governorate</option>
                        @foreach ($governorates as $governorate)
                            <option value="{{ $governorate->id }}">{{ $governorate->governorate_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="dropdown_row">
                    <label for="city">City:</label>
                    <select id="city" name="city"></select>
                </div>
                <div class="dropdown_row">
                    <label for="name">Name:</label>
                    <select id="name" name="name"></select>
                </div>
                <div class="dropdown_row">
                    <label for="specialty">Speciality:</label>
                    <select id="specialty" name="specialty"></select>
                </div>
            </div>
            <div class="doctor_blog">
                <div class="content">
                    <div class="doctor_info" id="doctor_info">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript">
        $('#governorate').change(function() {
            var governorateID = $(this).val();
            if (governorateID) {
                $.ajax({
                    type: "GET",
                    url: "{{ url('getCity') }}?id=" + governorateID,
                    success: function(res) {
                        if (res) {
                            $("#city").empty();
                            $("#city").append('<option>Select City</option>');
                            $.each(res, function(key, value) {
                                value.forEach(element => {
                                    $("#city").append('<option value="' + key +
                                        '">' +
                                        element.city_name +
                                        '</option>');
                                });
                            });
                        } else {
                            $("#city").empty();
                        }
                    }
                });
            } else {
                $("#city").empty();
                $("#name").empty();
                $("#specialty").empty();

            }
        });


        $('#city').on('change', function() {
            var CityID = $(this).val();
            if (CityID) {
                $.ajax({
                    type: "GET",
                    url: "{{ url('getName') }}?id=" + CityID,
                    success: function(res) {
                        if (res) {
                            $("#name").empty();
                            $("#name").append('<option>Select Hospital Name</option>');
                            $.each(res, function(key, value) {
                                value.forEach(element => {
                                    $("#name").append('<option value="' + key +
                                        '">' +
                                        element.name +
                                        '</option>');
                                });
                            });

                        } else {
                            $("#name").empty();
                        }
                    }
                });
            } else {
                $("#name").empty();
                $("#specialty").empty();
            }
        });


        $('#name').on('change', function() {
            var DoctorID = $(this).val();
            if (DoctorID) {
                $.ajax({
                    type: "GET",
                    url: "{{ url('getSpeciality') }}?id=" + DoctorID,
                    success: function(res) {
                        if (res) {
                            $("#specialty").empty();
                            $("#specialty").append('<option>Select Speciality</option>');
                            $.each(res, function(key, value) {
                                $("#specialty").append('<option value="' +
                                    key + '">' +
                                    value +
                                    '</option>');
                            });
                        } else {
                            $("#specialty").empty();
                        }
                    }
                });
            } else {
                $("#specialty").empty();
            }
        });


        $('#specialty').on('change', function() {
            var doctorID = $(this).val();
            if (doctorID) {
                $.ajax({
                    type: "GET",
                    url: "{{ url('getDoctors') }}?id=" + doctorID,
                    success: function(res) {
                        if (res) {
                            $("#doctor_info").empty();
                            $.each(res, function(key, value) {
                                value.forEach(element => {
                                    $("#doctor_info").append('<img src="asset(' +
                                        'doctor_images/' + element.doctor_images +
                                        ')">' +
                                        '<br>' +
                                        '<p value="' + key + '">' +
                                        'Dr.' +
                                        element.first_name + ' ' +
                                        element.last_name + '<br>' +
                                        element.phone +
                                        '</p>' +
                                        '<button type="submit">' + 'Book' +
                                        '</button>');
                                });
                            });
                        } else {
                            $("#doctor_info").empty();
                        }
                    }
                });
            } else {
                $("#doctor_info").empty();
            }
        });
    </script>

    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'csrftoken': '{{ csrf_token() }}'
            }
        });
    </script>

@endsection
