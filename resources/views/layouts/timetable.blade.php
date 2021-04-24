@extends('includes.main')
@section('content')

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
              <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
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
            <table class="table table-borderless mb-0">
              <thead>
                <tr>
                  <th scope="col">Service Names</th>
                  <th scope="col">Doctor Name</th>
                  <th scope="col">Days</th>
                  <th scope="col">Time</th>
                </tr>
              </thead>
              <tbody>
                  <tr>
                      <th scope="row">ُEmergency</th>
                      <td>Dr.Bassem M.Maher</td>
                      <td>The 7 days</td>
                      <td>24 Hrs</td>
                    </tr>
                    <tr>
                        <th scope="row">Neurology</th>
                        <td>Dr.Hazem Adly FarouQ</td>
                        <td>Monday</td>
                        <td>From 3:00PM TO 9:00PM</td>
                      </tr>
                <tr>
                  <th scope="row">Cardiovascular </th>
                  <td>D. Ismael Gomaa Kamal</td>
                  <td> The 7 days</td>
                  <td>From 3:00PM TO 9:00PM</td>
                </tr>
                <tr>
                  <th scope="row">Respiratory </th>
                  <td>Dr.Islam Essam</td>
                  <td>Tuesday</td>
                  <td>From 3:00PM TO 9:00PM</td>
                </tr>
                <tr>
                  <th scope="row">Skin</th>
                  <td>Dr.Taha Younnis</td>
                  <td>Sunday,Monday,Tuesday</td>
                  <td>From 3:00PM TO 9:00PM</td>
                </tr>
                
                <tr>
                  <th scope="row">Orthopedic </th>
                  <td>Dr. Mira Sami</td>
                  <td>sunday,Wednessday</td>
                  <td>From 3:00PM TO 9:00PM</td>
                </tr>
                <tr>
                  <th scope="row">Oral and maxillofacial</th>
                  <td>Dr.Merhan M.Maher</td>
                  <td>Monday</td>
                  <td>From 3:00PM TO 9:00PM</td>
                </tr>
                <tr>
                    <th scope="row">Oral and maxillofacial</th>
                    <td>Dr. Ramy M.Ibrahim</td>
                    <td>Saturday</td>
                    <td>From 3:00PM TO 9:00PM</td>
                  </tr>
                  <tr>
                      <th scope="row">Dentistry</th>
                      <td>Dr.Hatem Hussien</td>
                      <td>Friday</td>
                      <td>From 3:00PM TO 9:00PM</td>
                    </tr>

              </tbody>
            </table>
          </div>
        </div>

        <div class="col-12">
          <div class="more-btn text-center mt-50">
            <a href="#" class="btn dento-btn"  href="./contact.html">Visit US </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ***** Dento Pricing Table Area End ***** -->

@endsection