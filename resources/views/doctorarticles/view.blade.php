@extends('layout.main') @section('content')
<div class="container">
	<h1>{{ $doctorarticle['title'] }}</h1>
	<img src="{{ url($doctorarticle['feature_image']) }}" />

	<div>{{ $doctorarticle['publish_date'] }}</div>
	<p>{{ $doctorarticle['content'] }}</p>

	<a href="{{ url('doctorarticles') }}">back</a>
</div>
@endsection