@extends('layout.main')
@section('content')


<style>
    input[type="submit"] {
        display: block;
        font-size: 15px;
        margin: 1px auto;
        text-align: center;
        border: 2px solid #00aeef;
        padding: 6px 25px;
        font-family: Arial;
        outline: none;
        color: #707070;
        background-color: whitesmoke;
        border-radius: 24px;
        transition: 0.25s;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background: #00aeef;
        color: whitesmoke
    }
</style>

<!-- ***** Breadcrumb Area Start ***** -->
<div class="breadcumb-area bg-img bg-gradient-overlay" style="background-image: url(img/bg-img/12.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <h2 class="title">Our Timeline </h2>
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
                        <li class="breadcrumb-item active" aria-current="page">Our Timetable</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- ***** Breadcrumb Area End ***** -->

<!-- ***** Dento Pricing Table Area Start ***** -->
<section class="dento-pricing-table-area mt-50 section-padding-0-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="dento-price-table table-responsive">

                    <select id="governorates">
                        <option value="">Select Governorate</option>
                    </select>
                    <select id="cities">
                        <option value="">Select City</option>
                    </select>
                    <select id="specialities">
                        <option value="">Select Speciality</option>
                    </select>
                    <button id="search">Search</button>
                    <table class="table table-borderless mb-0">
                        <thead>
                            <tr>
                                <th scope="col">Service Names</th>
                                <th scope="col">Doctor Name</th>
                                <th scope="col">Days</th>
                                <th scope="col">Time</th>
                                <th scope="col">Visit Doctor Profile</th>
                            </tr>
                        </thead>
                        <tbody id="doctors">

                        </tbody>
                    </table>
                    <div class="col-12">
                        <div class="more-btn text-center mt-50">
                            <a href="/search" class="btn dento-btn" href="./contact.html">Book An Appointment</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Dento Pricing Table Area End ***** -->

@endsection

@section('scripts')
<script type="text/javascript">
    var cities = JSON.parse('{!!$cities!!}');
    var governorates = JSON.parse('{!!$governorates!!}');
    var specialities = JSON.parse('{!!$specialities!!}');
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
                    $('#doctors').append(`<tr>
                    <td>${d.speciality.name}</td>
                    <td>${d.first_name} ${d.last_name}</td>                    
                    <td></td>
                    <td></td>
                    <td><a href="/doctors/${d.id}">Profile</a></td>
                    </tr>`)
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