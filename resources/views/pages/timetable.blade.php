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

    <section class="dento-pricing-table-area mt-50 section-padding-0-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="dento-price-table table-responsive">
                        <table class="table table-borderless mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">Speciality</th>
                                    <th scope="col">Doctor Name</th>
                                    <th scope="col">Working Day</th>
                                    <th scope="col">Working Time</th>
                                    <th scope="col">Visit Doctor Profile</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($doctors as $doctor)
                                    <tr>
                                        <td>{{ $doctor->name }}</td>
                                        <td>{{ 'Dr.' . $doctor->first_name . ' ' . $doctor->last_name }}</td>
                                        <td>{{ $doctor->day }}</td>
                                        <td>{{ $doctor->time }}</td>
                                        <td>
                                            <div class="doc-profile">
                                                <a href="/doctor/profile/{{ $doctor->id }}">
                                                    <input type="submit" name="" value="Profile">
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
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

@endsection
