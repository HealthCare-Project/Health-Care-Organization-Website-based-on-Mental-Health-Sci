@extends('layout.main') @section('content')
<div class="container">
	<h1>{{ $newsarticle['title'] }}</h1>
	<img src="{{ url($newsarticle['feature_image']) }}" />
	<div>{{ $newsarticle['publish_date'] }}</div>

	<p>{{ $newsarticle['content'] }}</p>

	<a href="{{ url('newsarticles') }}">back</a>
</div>
@endsection