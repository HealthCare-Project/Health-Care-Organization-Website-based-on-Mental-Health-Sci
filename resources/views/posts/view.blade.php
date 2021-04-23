@extends('layout.main') @section('content')
<div class="container">
	<h1>{{$post['title']}}</h1>
	<p>{{$post['content']}}</p>
	<div>{{$post['publish_date']}}</div>
	<img src="{{url($post['feature_image'])}}" />
    <a href="{{url('posts')}}">back</a>
</div>
@endsection