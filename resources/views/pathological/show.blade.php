@extends('includes.main')
@section('content')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Pathological History</th>
            </tr>
        </thead>
        <tbody>
            @if (isset($pathologicalHistory))
                @foreach ($pathologicalHistory as $data)
                    <tr>
                        <th scope="row">Patient Name</th>
                        <td>{{ $data->patientPathologicalHistory->first_name }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Age</th>
                        <td>{{ $data->patientPathologicalHistory->age }}</td>
                    </tr>
                    <tr>
                        <th scope="row">height</th>
                        <td>{{ $data->height }}</td>
                    </tr>
                    <tr>
                        <th scope="row">weight</th>
                        <td>{{ $data->weight }}</td>
                    </tr>
                    <tr>
                        <th scope="row">blood_type</th>
                        <td>{{ $data->blood_type }}</td>
                    </tr>
                    <tr>
                        <th scope="row">diabetic</th>
                        <td>{{ $data->diabetic }}</td>
                    </tr>
                    <tr>
                        <th scope="row">allergy_to_medical</th>
                        <td>{{ $data->allergy_to_medical }}</td>
                    </tr>
                    <tr>
                        <th scope="row">allergy_to_medical_description</th>
                        <td>{{ $data->allergy_to_medical_description }}</td>
                    </tr>
                    <tr>
                        <th scope="row">description</th>
                        <td>{{ $data->description }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Lsugar_test</th>
                        <td>{{ $data->Lsugar_test }}</td>
                    </tr>
                    <tr>
                        <th scope="row">blood_pressure_sys</th>
                        <td>{{ $data->blood_pressure_sys }}</td>
                    </tr>
                    <tr>
                        <th scope="row">blood_pressure_dyas</th>
                        <td>{{ $data->blood_pressure_dyas }}</td>
                    </tr>
                    <tr>
                        <th scope="row">smoke</th>
                        <td>{{ $data->smoke }}</td>
                    </tr>
                    <tr>
                        <th scope="row">alcohol</th>
                        <td>{{ $data->alcohol }}</td>
                    </tr>
                    <tr>
                        <th scope="row">surgical_history</th>
                        <td>{{ $data->surgical_history }}</td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
@endsection
