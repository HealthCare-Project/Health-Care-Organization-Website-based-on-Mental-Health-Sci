@extends('layout.main') @section('content')
<div class="container">
	<h1>{{$famouscase['title']}}</h1>
	<img src="{{url($famouscase['feature_image'])}}" />
	<div>{{$famouscase['publish_date']}}</div>

	<p>{{$famouscase['content']}}</p>
	<a href="{{url('famouscases')}}">back</a>
</div>
@endsection