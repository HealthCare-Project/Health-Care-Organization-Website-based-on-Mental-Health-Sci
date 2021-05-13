showing
{{$complaint->title}}
{{$complaint->description}}



<h1>Comments</h1>

<form method="POST" action="{{ route('complaint.comment', $complaint->id) }}">
	{{ csrf_field() }}
	<label for="text">Description</label>
	<textarea for="description" name="description" rows="4" cols="50"></textarea>
	<button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
</form>