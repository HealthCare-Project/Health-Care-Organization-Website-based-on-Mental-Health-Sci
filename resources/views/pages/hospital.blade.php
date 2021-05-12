@extends('layout.main')
@section('content')

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">address</th>
                <th scope="col">city</th>
                <th scope="col">governorate</th>
            </tr>
        </thead>
        <tbody>
            @if (isset($hospitals) && $hospitals->count() > 0)
                @foreach ($hospitals as $hospital)
                    <tr>
                        <th scope="row">{{ $hospital->id }}</th>
                        <td>{{ $hospital->name }}</td>
                        <td>{{ $hospital->address }}</td>
                        <td>{{ $hospital->city }}</td>
                        <td>{{ $hospital->governorate }}</td>
                    </tr>
                @endforeach
            @endif

        </tbody>
    </table>
@endsection
