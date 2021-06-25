<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="description" content="Dento - Dentist &amp; Medical HTML Template">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="file:///E:/fontawesome/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Title -->
	<title>HealthCare </title>

	<!-- Favicon -->
	<link rel="icon" href="{{asset('img/core-img/favicon.ico')}}">

	<!-- Core Stylesheet -->
	<link rel="stylesheet" href="{{asset('style.css')}}">
	<link rel="stylesheet" href="{{asset('styleheader.css')}}">
	<link rel="stylesheet" href="{{asset('1b-ticker.css')}}">
</head>

<body>
	<!-- Preloader -->
	<div id="preloader">
		<div class="preload-content">
			<div id="dento-load"></div>
		</div>
	</div>

	<!-- ***** Header Area Start ***** -->
	<header  class="header-area">
	<nav>
      <div class="logo">HealthCare</div>
      <label for="btn" class="iconheader">
        <span class="fa fa-bars"></span>
      </label>
      <input type="checkbox" id="btn">
      <ul>
        <li><label class="showheader">Home</label>
          <a href="/">Home</a>
        </li>
        <li>
          <label for="btn-1" class="showheader">My Health +</label>
          <a href="#">My Health <i class="fas fa-caret-down"></i></a>
          <input type="checkbox" id="btn-1">
          <ul>
		  <li>
            <label for="btn-2" class="show1header">- Encyclopedia +</label>
              <a href="#">- Encyclopedia <i class="fas fa-caret-right"></i></a>
              <input type="checkbox" id="btn-2">
              <ul>
                <li><a href="posts">- Diseases </a></li>
                <li><a href="famouscases">- Famous Cases</a></li></ul>
			<li><a href="newsarticles">- Health News</a></li>
            <li><a href="relativesarticles">- For Relatives</a></li>
            <li><a href="doctorarticles">- For Doctors</a></li>
           
              
            </li>
          </ul>
        </li>
        <li>
          <label for="btn-3" class="showheader">Departments +</label>
          <a href="#">Departments <i class="fas fa-caret-down"></i></a>
          <input type="checkbox" id="btn-3">
          <ul>
            <li><a href="internamedicine">- Internal Medicine</a></li>
            <li><a href="pediatric">- Pediatric</a></li>
            <li><a href="rheumatology">- Rheumatology</a></li>
            <li><a href="oncology">- Oncology</a></li>
            <li><a href="nephrology">- Nephrology</a></li>
            <li><a href="hematology">- Hematology</a></li>
            <li><a href="endocrinology">- Endocrinology</a></li>
            <li><a href="cardiology">- Cardiology</a></li>
            <li><a href="neurology">- Neurology</a></li>
            <li><a href="psychiaty">- Psychiaty</a></li>
            <li><a href="surgery">- Surgery</a></li>
            <li><a href="dentist">- Dentistry</a></li>
          </ul>
        </li>
        <li>
          <label for="btn-4" class="showheader">Timetable</label>
          <a href="timetable">Timetable</a>
        </li>
        <li>
          <label for="btn-5" class="showheader">Applications +</label>
          <a href="#">Applications<i class="fas fa-caret-down"></i></a>
          <input type="checkbox" id="btn-5">
          <ul>
            <li><a href="application1">- Weight Calculatour</a></li>
			<li><a href="application2">- Calories</a></li>
            <li><a href="#">- Pathological History</a></li>
            <li><a href="#">- Make Appointment</a></li>
            <li><a href="#">- Make an Article<i class="fas fa-caret-right"></i></a>
              <input type="checkbox" id="btn-2">
              <ul>
                <li><a href="postsinsert">- Diseases </a></li>
                <li><a href="famouscasesinsert">- Famous Cases</a></li>
				<li><a href="newsarticlesinsert">- Health 1News</a></li>
				<li><a href="relativesarticlesinsert">- Relatives Articles</a></li>
				<li><a href="doctorarticlesinsert">- Doctors Articles</a></li></ul></li>
            <li><a href="#">- Post Timetable (Dr)</a></li>
          </ul>
        </li>
        <li>
          <label for="btn-7" class="showheader">Registration +</label>
          <a href="#">Registration  <i class="fas fa-caret-down"></i></a>
          <input type="checkbox" id="btn-7">
          <ul>
            <li><a href="{{ route('doctor.store')}}">- Doctor</a></li>
            <li><a href="{{ route('patient-registeration-page') }}">- Patient</a></li>
          </ul>
        </li>
			@if(!auth()->guard('patient')->check() && !auth()->guard('doctor')->check())
			   <li>
          <label for="btn-6" class="showheader">Login +</label>
          <a href="#">Login <i class="fas fa-caret-down"></i></a>
          <input type="checkbox" id="btn-6">
          <ul>
            <li><a href="{{route('doctor.login')}}">- Doctor</a></li>
            <li><a href="{{route('session.login')}}">- Patient</a></li>
          </ul>
        </li>
        @else
        <li>
        @if (auth()->guard('patient')->check())
            <label for="btn-8" class="showheader">Log out</label>
          	<a href="{{route('session.destroy')}}">Log out</a>
          @elseif (auth()->guard('doctor')->check())
            <label for="btn-8" class="showheader">Log out</label>
            <a href="{{route('doctor.logout')}}">Log out</a>
          @endif
        </li>

        @endif
      </ul>
    </nav>
<div class="breadcumb-area bg-img bg-gradient-overlay" style=" background-image: url(img/bg-img/4952578.jpg); height:30px">
	<div class="tcontainer"><div class="ticker-wrap"><div class="ticker-move">
    <div class="ticker-item"> Egypt : Egypt’s President Sisi Receives COVID-19 Vaccine</div>
    <div class="ticker-item"> Egypt : Total cases: 277K New Cases:+566 Recovered:205K </div>
    <div class="ticker-item"> USA : Biden thanks Americans as U.S. hits 300M COVID-19 vaccine shots in 150 days</div>
    <div class="ticker-item"> Weather : Cairo: 33/20  Alex. : 27/18  Aswan 40/29</div>
  </div></div></div></div>
	</header>
	<!-- ***** Header Area End ***** -->
	@yield('content')

	<!-- ***** Footer Area Start ***** -->
	<footer style="margin-top: 32px" class="footer-area bg-img bg-gradient-overlay" style="background-image: url(img/bg-img/3.jpg);">
		<div class="container">
			<div class="row">
				<!-- Single Footer Widget -->
				<div class="col-12 col-sm-6 col-lg-4">
					<div class="single-footer-widget">
						<a href="index" class="d-block mb-4">
							<img src="{{url('img/core-img/logo.png')}}" style="    width: 184px;
              margin-left: 15px;
              margin-top: -26px;">
						</a>


					</div>
				</div>

				<!-- Single Footer Widget -->
				<div class="col-12 col-sm-6 col-lg">
					<div class="single-footer-widget">
						<!-- Widget Title -->
						<h5 class="widget-title">Opening Hours</h5>

						<!-- Opening Hours -->
						<ul class="opening-hours">
							<li>
								<span>Mon-Wed</span>
								<span>8.00-18.00</span>
							</li>
							<li>
								<span>Thu-Fri</span>
								<span>8.00-17.00</span>
							</li>
							<li>
								<span>Sat</span>
								<span>9.00-17.00</span>
							</li>
							<li>
								<span>Sun</span>
								<span>10.00-17.00</span>
							</li>
							<li>
								<span>Holiday</span>
								<span>Closed</span>
							</li>
						</ul>
					</div>
				</div>

				<!-- Single Footer Widget -->
				<div class="col-12 col-sm-6 col-lg">
					<div class="single-footer-widget">
						<!-- Widget Title -->
						<h5 class="widget-title">Quick Link</h5>

						<!-- Quick Links Nav -->
						<div>
							<ul class="quick-links">
								<li>
									<a href="#">About</a>
								</li>
								<li>
									<a href="#">FAQs</a>
								</li>
								<li>
									<a href="#">Contact</a>
								</li>
								<li>
									<a href="#">Policy</a>
								</li>
								<li>
									<a href="#">News</a>
								</li>
								<li>
									<a href="#">Advisors</a>
								</li>
								<li>
									<a href="#">Careers</a>
								</li>
								<li>
									<a href="#">Dentist</a>
								</li>
								<li>
									<a href="#">Services</a>
								</li>
								<li>
									<a href="#">Legals</a>
								</li>
							</ul>
</div>
					</div>
				</div>

				<!-- Single Footer Widget -->
				<div class="col-12 col-sm-6 col-lg">
					<div class="single-footer-widget">
						<!-- Widget Title -->


						<!-- Social Info -->
						<div class="footer-social-info">
							<a href="#" data-toggle="tooltip" data-placement="top" title="Facebook">
								<i class="fa fa-facebook"></i>
							</a>
							<a href="#" data-toggle="tooltip" data-placement="top" title="Twitter">
								<i class="fa fa-twitter"></i>
							</a>
							<a href="#" data-toggle="tooltip" data-placement="top" title="Google Plus">
								<i class="fa fa-google-plus"></i>
							</a>
							<a href="#" data-toggle="tooltip" data-placement="top" title="Linkedin">
								<i class="fa fa-linkedin"></i>
							</a>
							<a href="#" data-toggle="tooltip" data-placement="top" title="Pinterest">
								<i class="fa fa-pinterest"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Copywrite Area -->
		<div class="container">
			<div class="row">
				<div class="col-12">

				</div>
			</div>
		</div>
	</footer>
	<!-- ***** Footer Area End ***** -->

	<!-- ******* All JS ******* -->
	<!-- jQuery js -->
	<script src="{{asset('js/jquery.min.js')}}"></script>
	<!-- Popper js -->
	<script src="{{asset('js/popper.min.js')}}"></script>
	<!-- Bootstrap js -->
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	<!-- All js -->
	<script src="{{asset('js/dento.bundle.js')}}"></script>
	<!-- Active js -->
	<script src="{{asset('js/default-assets/active.js')}}"></script>

</body>

</html>