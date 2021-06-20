@extends('layout.main')

<link rel="stylesheet" type="text/css" href="{{ asset('css/doc-profile.css') }}">
<title>{{ $doctor->first_name }} {{ $doctor->last_name }}</title>

@section('content')

    {{ $doctor->email }}

    <div id="profile-page-container">
        <section id="doc-profile-container">
            <div class="doc-profile">
                <article>
                    <img src="doc1.jpg" width="200" height="200" alt="image">
                </article>
                <article id="doc-info">
                    <h4>Profile</h4>
                    <div id="intro">
                        <h2 id="name">{{ $doctor->first_name }} {{ $doctor->last_name }}</h2>
                        <span id="titles">{{ $doctor->specialty }}</span>
                        <span id="quals">M.D</span>
                    </div>
                    <div class="doc-info-attribute">
                        <span>Expereince</span>
                        <span>5 years+</span>
                    </div>
                    <div class="doc-info-attribute">
                        <span id="langs">Languages</span>
                        <span>English, French</span>
                    </div>
                    <div id="specialties">
                        <h2>Specialties</h2>
                        <span>Pathologist</span>
                        <span>Pathologist</span>
                        <span>Pathologist</span>
                        <span>Pathologist</span>
                    </div>
                    <button id="book-doc">Book</button>
                </article>
            </div>
        </section>

        <section id="reviews-cont">
            <h3>Reviews</h3>
            <div class="reviewer">
                <div>
                    <img src="profile.png" alt="prof" height="70" width="70">
                </div>
                <article>
                    <div class="reviewer-info">
                        <span class="reviewer-name">Name Name</span>
                        <div>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                    <div class="review-content">
                        <p>ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur.</p>
                    </div>
                </article>
            </div>
            <div class="reviewer">
                <div>
                    <img src="profile.png" alt="prof" height="70" width="70">
                </div>
                <article>
                    <div class="reviewer-info">
                        <span class="reviewer-name">Name Name</span>
                        <div>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                        </div>
                    </div>
                    <div class="review-content">
                        <p>ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur.</p>
                    </div>

                   @if(auth()->guard('patient')->check())
                        <h3>Leave a Review</h3>
                        <form method="POST" action="{{ route('review.store', ['id' => $doctor->id]) }}">
                            {{ csrf_field() }}
                            <label for="text">Description</label>
                            <textarea for="description" name="description" rows="4" cols="50"></textarea>
                            <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    @endif
            @if($doctor->reviews)
            dwfffffffffffffffffffffffffffffffff
                @foreach($doctor->reviews as $layanan)
                    dwdwdwdddddddddddddddddddddddddddddddddddddddddddd
                @endforeach  
                {{$doctor->reviews}}
            @endif


                </article>
            </div>
        </section>
    </div>

@endsection
