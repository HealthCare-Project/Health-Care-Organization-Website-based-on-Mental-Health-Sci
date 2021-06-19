@extends('layout.main') @section('content')
<div class="container">
	<h1>{{ $relativesarticle['title'] }}</h1>
	<p>{{ $relativesarticle['content'] }}</p>
	<div>{{ $relativesarticle['publish_date'] }}</div>
	<img src="{{ url($relativesarticle['feature_image']) }}" />
	<a href="{{ url('relativesarticles') }}">back</a>
</div>
@endsection