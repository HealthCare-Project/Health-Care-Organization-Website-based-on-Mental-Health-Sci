@extends('layout.main')
@section('content')
    <div class="container">
        <div class="row">
            @foreach ($posts as $post)
                <a href="{{ url('posts', $post['id']) }}">
                    <div class="col-md-4">
                        <div>{{ $post['title'] }}</div>
                        <div>{{ $post['publish_date'] }}</div>
                        <img src="{{ url($post['feature_image']) }}" />
                    </div>
                </a>
            @endforeach
        </div>
    </div>
@endsection
