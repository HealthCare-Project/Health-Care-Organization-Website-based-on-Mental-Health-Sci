@extends('layout.main') @section('content')
<div class="container">
	<h1>{{ $newsarticle['title'] }}</h1>
	<p>{{ $newsarticle['content'] }}</p>
	<div>{{ $newsarticle['publish_date'] }}</div>
	<img src="{{ url($newsarticle['feature_image']) }}" />
	<a href="{{ url('newsarticles') }}">back</a>
</div>
@endsection