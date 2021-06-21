@extends('layout.main')
@section('content')
    <div class="container">
        <h1>{{ $post['title'] }}</h1>
        <img src="{{ url($post['feature_image']) }}" />
        <div>{{ $post['publish_date'] }}</div>
        <p>{{ $post['content'] }}</p>
        <a href="{{ url('posts') }}">back</a>
    </div>
@endsection
