showing
<<<<<<< HEAD
{{$complaint->title}}
{{$complaint->description}}



<h1>Comments</h1>

<form method="POST" action="{{ route('complaint.comment', $complaint->id) }}">
	{{ csrf_field() }}
	<label for="text">Description</label>
	<textarea for="description" name="description" rows="4" cols="50"></textarea>
	<button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
</form>
=======
{{ $complaint->title }}
{{ $complaint->description }}
>>>>>>> 3e63c86df37a0d7a2111a125fb4e655e03ee5be5
