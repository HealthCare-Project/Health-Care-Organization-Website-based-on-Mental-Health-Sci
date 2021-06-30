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
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Title -->
	<title>HealthCare </title>

	<!-- Favicon -->
	<link rel="icon" href="{{asset('img/core-img/favicon.ico')}}">

	<!-- Core Stylesheet -->
	<link rel="stylesheet" href="{{asset('style.css')}}">
	<link rel="stylesheet" href="{{asset('styleheader.css')}}">
	<link rel="stylesheet" href="{{asset('1b-ticker.css')}}">
	<link rel="stylesheet" href="{{asset('stylenewfooter.css')}}">
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
              <a class="encyclo" href="#">- Encyclopedia <i class="fas fa-caret-right"></i></a>
              <input type="checkbox" id="btn-2">
              <ul>
                <li><a href="posts">- Diseases </a></li>
                <li><a href="famouscases">- Famous Cases</a></li>
			  </ul>
            </li>  
			<li><a href="newsarticles">- Health News</a></li>
            <li><a href="relativesarticles">- Articles For Relatives</a></li>
            <li><a href="doctorarticles">- Articles For Doctors</a></li>
          </ul>
        </li>
        <li>
          <label for="btn-3" class="showheader">Departments +</label>
          <a href="#">Departments <i class="fas fa-caret-down"></i></a>
          <input type="checkbox" id="btn-3">
          <ul>
            <li><a href="internal_medicine">- Internal Medicine</a></li>
            <li><a href="pediatric">- Pediatric</a></li>
            <li><a href="surgery">- Surgery</a></li>
            <li><a href="oncology">- Oncology</a></li>
            <li><a href="nephrology">- Nephrology</a></li>
            <li><a href="hematology">- Hematology</a></li>
            <li><a href="endocrinology">- Endocrinology</a></li>
            <li><a href="cardiology">- Cardiology</a></li>
            <li><a href="neurology">- Neurology</a></li>
            <li><a href="psychiatry">- Psychiaty</a></li>
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
          <a href="#">Applications <i class="fas fa-caret-down"></i></a>
          <input type="checkbox" id="btn-5">
          <ul>
            <li><a href="application1">- Weight Calculator</a></li>
			<li><a href="application2">- Calories</a></li>
            <li><a href="#">- Pathological History</a></li>
			<li>
            <label for="btn-6" class="show1header">- Make an Article +</label>
              <a class="makearticle" href="#">- Make an Article <i class="fas fa-caret-right"></i></a>
              <input type="checkbox" id="btn-6">
              <ul>
                <li><a href="postsinsert">- Diseases </a></li>
                <li><a href="famouscasesinsert">- Famous Cases</a></li>
				<li><a href="newsarticlesinsert">- Health News</a></li>
				<li><a href="relativesarticlesinsert">- Relatives Articles</a></li>
				<li><a href="doctorarticlesinsert">- Doctors Articles</a></li>
			  </ul>
			</li>
          </ul>
        </li>
			@if(!auth()->guard('patient')->check() && !auth()->guard('doctor')->check())
		<li>
          <label for="btn-7" class="showheader">Login +</label>
          <a href="#">Login <i class="fas fa-caret-down"></i></a>
          <input type="checkbox" id="btn-7">
          <ul>
            <li><a href="{{route('doctor.login')}}">- Doctor</a></li>
            <li><a href="{{route('session.login')}}">- Patient</a></li>
          </ul>
        </li>
        @else
        <li>
        @if (auth()->guard('patient')->check())
            <label for="btn-7" class="showheader">Log out</label>
          	<a href="{{route('session.destroy')}}">Log out</a>
          @elseif (auth()->guard('doctor')->check())
            <label for="btn-7" class="showheader">Log out</label>
            <a href="{{route('doctor.logout')}}">Log out</a>
          @endif
        </li>
        @endif
		<li>
          <label for="btn-8" class="showheader">Registration +</label>
          <a href="#">Registration  <i class="fas fa-caret-down"></i></a>
          <input type="checkbox" id="btn-8">
          <ul>
            <li><a href="{{ route('doctor.store')}}">- Doctor</a></li>
            <li><a href="{{ route('patient-registeration-page') }}">- Patient</a></li>
          </ul>
        </li>
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
	<footer class="footer-area">
        <div class="footer-content">
		    <div class="footer-top"></div>
            <div class="logo-footer">HealthCare</div>
            <ul>
                <li><a href="{{ route('patient-registeration-page') }}">Sign up</a></li>
                <li><a href="newsarticles">Health News</a></li>
				<li><a href="timetable">Timetable</a></li>
                <li><a href="posts">Diseases</a></li>
            </ul>
            <p>Download HealthCare App Now Available</p>
                <a class="appfooter" href="#"><img src="google-play.png"></a>
        </div>
        <div class="footer-bottom">
            <p>Copyright &copy; 2021 HealthCare. All Rights Reserved.</p>
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

	@yield('scripts')
</body>

</html>