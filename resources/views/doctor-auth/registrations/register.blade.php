@extends('layout.main')
@section('content')

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <h2>Doctor registeration</h2>
    <form method="POST" action="{{ route('doctor.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col">
                <label for="first_name">First Name</label>
                <input type="text" class="form-control" placeholder="First name" name="first_name" value="{{ old('first_name') }}">
                @error('first_name')
                    <small class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="col">
                <label for="last_name">Last Name</label>
                <input type="text" class="form-control" placeholder="Last name" name="last_name" value="{{ old('last_name') }}">
                @error('last_name')
                    <small class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="age">Age</label>
            <input type="number" class="form-control" placeholder="age" id="age" name="age" value="{{ old('age') }}">
            @error('age')
                    <small class="form-text text-danger">{{$message}}</small>
            @enderror
        </div>
        <div class="form-group col-md-4">
            <label for="gender">Gender</label>
            @error('gender')
                    <small class="form-text text-danger">{{$message}}</small>
            @enderror
            <select id="inputState" class="form-control" name="gender">
                <option selected>Choose...</option>
                <option>Male</option>
                <option>Female</option>
            </select>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email" value="{{ old('email') }}">
                @error('email')
                    <small class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Password</label>
                <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="password">
                <small id="passwordHelpInline" class="form-text text-muted">
                    Must be 8-20 characters long.
                </small>
            </div>
            <div class="form-group">
                <label for="password_confirmation">Password Confirmation:</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                <small id="passwordHelpInline" class="form-text text-muted">
                    Must be 8-20 characters long.
                </small>              
            </div>
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}">
            @error('phone')
                    <small class="form-text text-danger">{{$message}}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address" value="{{ old('address') }}">
            @error('address')
                    <small class="form-text text-danger">{{$message}}</small>
            @enderror
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCity">City</label>
                <input type="text" class="form-control" id="inputCity" name="city" value="{{ old('city') }}">
                @error('city')
                    <small class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label for="inputState">Governorate</label>
                @error('governorate')
                    <small class="form-text text-danger">{{$message}}</small>
                @enderror
                <select id="inputState" class="form-control" name="governorate">
                    <option selected>Choose a governorate...</option>
                    <option>Cairo</option>
                    <option>Giza</option>
                    <option>Alexandria</option>
                    <option>Aswan</option>
                    <option>Suez</option>
                </select>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="inputEmail4">Specialty</label>
            <input type="text" class="form-control" id="inputEmail4" placeholder="Enter your Specialty" name="specialty" value="{{ old('specialty') }}">
            @error('specialty')
                <small class="form-text text-danger">{{$message}}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleFormControlFile1">Upload an image</label>
            <input type="file" class="form-control-file" name="doctor_image" value="{{ old('doctor_image') }}">
            @error('doctor_image')
                <small class="form-text text-danger">{{$message}}</small>
            @enderror
        </div> 
        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                    Check me out
                </label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Sign up</button>
    </form>

@endsection
