Testing the index

@foreach ($complaints->all() as $complaint)
	<li>{{ $complaint->title }}</li>
	<li>{{ $complaint->patient->first_name }} {{ $complaint->patient->last_name }}</li>
	<li>{{ $complaint->patient->id }}</li>
@endforeach