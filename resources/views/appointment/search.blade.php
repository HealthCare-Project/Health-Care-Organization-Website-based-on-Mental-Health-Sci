@extends('layout.main')
@section('content')

    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{{ asset('css/appointment/style.css') }}">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    </head>

    <div class="appointment_search">
        <div class="search_content">
            <div class="subject">
                <h3>Book a Doctor</h3>
            </div>
            <div class="search_container">
                <div class="dropdown_row">
                    <label for="governorate">Governorate:</label>
                    <select id="governorates">
                        <option value="">Select Governorate</option>
                    </select>
                </div>
                <div class="dropdown_row">
                    <label for="cities">City:</label>
                    <select id="cities">
                        <option value="">Select City</option>
                    </select>
                </div>
                <div class="dropdown_row">
                    <label for="specialities">Speciality:</label>
                    <select id="specialities">
                        <option value="">Select Speciality</option>
                    </select>
                </div>
                <div class="dropdown_row">
                    <button id="search">Search</button>
                </div>
            </div>
        </div>
        <!-- Start Result -->
        <div class="doctor_info">
            <div class="content" id="doctors">
                <div>
                </div>
            </div>
        </div>
        <!-- End Result -->
    </div>


@section('scripts')
    <script type="text/javascript">
        var cities = JSON.parse('{!! $cities !!}');
        var governorates = JSON.parse('{!! $governorates !!}');
        var specialities = JSON.parse('{!! $specialities !!}');
        governorates.forEach(g => {
            $('#governorates').append(`<option value="${g.id}">${g.governorate_name}</option>`);
        });

        cities.forEach(g => {
            $('#cities').append(`<option value="${g.id}">${g.city_name}</option>`);
        });

        specialities.forEach(g => {
            $('#specialities').append(`<option value="${g.id}">${g.name}</option>`);
        });

        $('#governorates').change(function() {
            let governorate_id = $(this).val();
            $('#cities').html('<option value="">Select City</option>');
            cities.forEach(g => {
                if (!governorate_id || g.governorate_id == governorate_id) {
                    $('#cities').append(`<option value="${g.id}">${g.city_name}</option>`);
                }
            });
        });
        $('#search').click(function() {
            var governorate_id = $('#governorates').val();
            var city_id = $('#cities').val();
            var speciality_id = $('#specialities').val();
            $('#search').attr('disabled', true);
            $.ajax({
                method: 'GET',
                url: `/getDoctors?governorate_id=${governorate_id}&city_id=${city_id}&speciality_id=${speciality_id}`,
                success: function(data) {
                    $('#doctors').html('');
                    data.forEach(d => {
                        $('#doctors').append(`<div class="part">
                            <img alt="doctor" src="{{ asset('doctor_images/${d.doctor_image}') }}"/>
                    <p>Dr.${d.first_name} ${d.last_name}</p>
                    <p>${d.phone}</p>
                    <hr>
                    <p><button>Book Now</button></p>
                    </div>`)
                    });
                    $('#search').removeAttr('disabled');
                },
                error: function(error) {
                    console.log(error);
                    $('#search').removeAttr('disabled');
                }
            });
        });
    </script>

@endsection
