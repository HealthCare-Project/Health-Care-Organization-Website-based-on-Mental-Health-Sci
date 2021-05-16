@extends('layout.main') @section('content')
<div class="container">
	<h1>{{ $doctorarticle['title'] }}</h1>
	<p>{{ $doctorarticle['content'] }}</p>
	<div>{{ $doctorarticle['publish_date'] }}</div>
	<img src="{{ url($doctorarticle['feature_image']) }}" />
	<a href="{{ url('doctorarticles') }}">back</a>
</div>
@endsection