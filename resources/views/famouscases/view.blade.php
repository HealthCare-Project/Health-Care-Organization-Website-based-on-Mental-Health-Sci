@extends('layout.main') @section('content')
<div class="container">
	<h1>{{$famouscase['title']}}</h1>
	<p>{{$famouscase['content']}}</p>
	<div>{{$famouscase['publish_date']}}</div>
	<img src="{{url($famouscase['feature_image'])}}" />
	<a href="{{url('famouscases')}}">back</a>
</div>
@endsection