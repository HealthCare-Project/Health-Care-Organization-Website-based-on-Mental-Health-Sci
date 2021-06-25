@extends('layout.main')

<link rel="stylesheet" type="text/css" href="{{ asset('css/doc-profile.css') }}">
<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/rater/rater.min.js') }}" async></script>
<script type="text/javascript" src="{{ asset('js/testrater.js') }}" async></script>
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
                        <h2 id="name">Dr. Maggy Hudson</h2>
                        <span id="titles">Surgeon, Oncologist</span>
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
            <h3 id="reviews-word">Reviews</h3>
                @if($doctor->reviews)
                    @foreach($doctor->reviews as $review)
                    <div class="reviewer">
                        <article>
                            <div class="reviewer-info">
                                <span class="reviewer-name">{{$review->patient->first_name}} {{$review->patient->last_name}}</span>
                                <span class="reviewe-data">{{$review->created_at->diffForHumans()}}</span>
                                <div>   
                                    @if(substr($review->rating, 0, 1) != 0)
                                        @foreach(range(1, substr($review->rating, 0, 1)) as $r)
                                        <span class="fa fa-star checked"></span>
                                        @endforeach
                                    @endif
                                    @if(substr($review->rating, 2, 3))
                                        <span class="fa fa-star-half-o checked"></span>
                                    @endif
                                </div>
                            </div>
                            <div class="review-content">
                                <p>{{$review->description}}</p>
                            </div>
                        </article>
                    </div> <!-- reviewer !-->
                    @endforeach  
                @endif

                   @if(auth()->guard('patient')->check())
                    <div id = "leaving-reviews-section">
                        <h3>Leave a Review</h3>
                        <form method="POST" action="{{ route('review.store', ['id' => $doctor->id]) }}">
                            {{ csrf_field() }}
                            <label for="text">Description</label>
                            <textarea for="description" name="description" id="review-textarea"></textarea>
                            <div id="reviews-area-flexed">
                                <input id="review-rating-entry" type="hidden" name="rating" for="rating" placeholder="Rating from 1 to 5" min=".5" max="5" step=".5">
                                <div id="rate-plugin" data-rate-value=6></div>
                                <button id="review-submit-button" type="submit">Submit</button>
                            </div>
                        </form>
                    @endif

                    </div> <!-- leaving-reviews-section end !-->

                </article>
            </div>
        </section>
    </div>

@endsection
 

