@extends('layout.main')
@section('content')

<form method="POST" enctype="multipart/form-data" action="{{ route('complaint.store') }}">
    {{ csrf_field() }}
    <label for="title">Title</label>
    <input type="text" name="title" for="title" placeholder="Add a title to your complaint">

    <label for="text">Description</label>
    <textarea for="description" name="description" rows="4" cols="50"></textarea>
    <input type="file" name="img" for="img">
    <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
</form>

@if (count($errors) > 0)
    <div class="error">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

</div>


@endsection
