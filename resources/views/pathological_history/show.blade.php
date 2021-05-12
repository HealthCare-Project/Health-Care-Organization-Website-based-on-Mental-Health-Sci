@extends('includes.main')
@section('content')

    <ul class="content">
        @if (isset($data))
            @foreach ($data as $row)
                <li>{{ $row->weight }}</li>
                <li>{{ $row->height }}</li>
                <li>{{ $row->blood_type }}</li>
                <li>{{ $row->diabetic }}</li>
                <li>{{ $row->allergy_to_medical }}</li>
                <li>{{ $row->allergy_to_medical_description }}</li>
                <li>{{ $row->description }}</li>
                <li>{{ $row->Lsugar_test }}</li>
                <li>{{ $row->blood_pressure_sys }}</li>
                <li>{{ $row->smoke }}</li>
                <li>{{ $row->alcohol }}</li>
                <li>{{ $row->surgical_history }}</li>
            @endforeach
        @endif
    </ul>

@endsection
