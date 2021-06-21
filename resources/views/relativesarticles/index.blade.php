<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <!-- Load Require CSS -->
    <!-- Font CSS -->
    <link href="assets/css/boxicon.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- Load Tempalte CSS -->
    <link rel="stylesheet" href="{{asset('poststyles/templatemo.css')}}">
    <link rel="stylesheet" href="{{asset('poststyles/custom.css')}}">
        <link rel="stylesheet" href="{{asset('poststyles/1b-ticker.css')}}">
    <link rel="stylesheet" href="{{asset('poststyles/bootstrap.min.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('poststyles/boxicon.min.css')}}">
</head>
<body style="background-color:whitesmoke;">
@extends('layout.main') @section('content')

<!-- ***** Breadcrumb Area Start ***** -->
<div class="breadcumb--con">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">
							<a href="#">
								<i class="fa fa-home"></i> Home</a>
						</li>
						<li class="breadcrumb-item active" aria-current="page">My Health</li>

						<li class="breadcrumb-item active" aria-current="page">Health News</li>
					</ol>
				</nav>
			</div>
		</div>
	</div>
</div>
<!-- ***** Breadcrumb Area END ****

<!-- ***** Breadcrumb Area END ***** -->


    <!-- Start Our Work -->
	
    <div >
	


        <div style=" margin-right: 80px; margin-left: 80px;  " class="row projects gx-lg-5">
		@foreach($relativesarticles as $relativesarticle)
            <a href="{{url('relativesarticles',$relativesarticle['id'])}}" class="col-sm-6 col-lg-4 text-decoration-none project marketing social business">
                <div class="service-work overflow-hidden card mb-5 mx-5 m-sm-0">
                    <img style="height: 194px;" class="card-img-top" src="{{url($relativesarticle['feature_image'])}}" alt="...">
                    <div class="card-body">
                        <h5 class="card-title light-300 text-dark">{{$relativesarticle['title']}}</h5>
                        <p class="card-text light-300 text-dark">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolor.
                        </p>
                        <span class="text-decoration-none text-primary light-300">
						{{$relativesarticle['publish_date']}} <i class='bx bxs-hand-right ms-1'></i>
                          </span>
						  
                    </div>
					
                </div>
				
            </a>
			
			@endforeach	
    </section>
</div>
</div>

<!-- *****Blog Area End ***** -->
@endsection
</body>