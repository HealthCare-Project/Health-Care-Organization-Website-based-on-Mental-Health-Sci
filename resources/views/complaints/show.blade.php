@extends('layout.main')
@section('content')

showing
{{$complaint->title}}
{{$complaint->description}}
<a href="{{ route('complaint.downloadfile', $complaint->img) }}" method="post">
<img src="{{asset('img/'.$complaint->img)}}" width="200" height="200" alt="image">
}
}


<h1>Comments</h1>

<form method="POST" action="{{ route('complaint.comment', $complaint->id) }}">
	{{ csrf_field() }}
	<label for="text">Description</label>
	<textarea for="description" name="description" rows="4" cols="50"></textarea>
	<button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
</form>

{{ $complaint->title }}
{{ $complaint->description }}


@endsection
