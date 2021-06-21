@extends('layout.main') @section('content')
<div class="container">
	<h1>{{ $relativesarticle['title'] }}</h1>
	<img src="{{ url($relativesarticle['feature_image']) }}" />

	<div>{{ $relativesarticle['publish_date'] }}</div>
	<p>{{ $relativesarticle['content'] }}</p>

	<a href="{{ url('relativesarticles') }}">back</a>
</div>
@endsection