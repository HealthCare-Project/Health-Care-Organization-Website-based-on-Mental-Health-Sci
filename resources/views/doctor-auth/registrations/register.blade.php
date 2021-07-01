<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title> Doctor Registeration </title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/doctor_style/doctor_register.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
</head>

<body>
    <form class="box2" method="POST" action="{{ route('doctor.store') }}" enctype="multipart/form-data">
        @csrf
        <h2> Registeration </h2>

        <input type="text" name="first_name" placeholder="First name" value="{{ old('first_name') }}" required>
        @error('first_name')
            <small class="form-text text-danger">{{ $message }}</small>
        @enderror
        <input type="text" name="last_name" placeholder="Last Name" value="{{ old('last_name') }}" required>
        @error('last_name')
            <small class="form-text text-danger">{{ $message }}</small>
        @enderror

        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
        @error('email')
            <small class="form-text text-danger">{{ $message }}</small>
        @enderror

        <input type="password" name="password" placeholder="Password" value="{{ old('password') }}" required>
        <input type="password" name="password_confirmation" placeholder="Confirm Password"
            value="{{ old('password_confirmation') }}" required>

        <input type="number" name="age" placeholder="Your Age" value="{{ old('age') }}" required>
        @error('age')
            <small class="form-text text-danger">{{ $message }}</small>
        @enderror

        <select class="gender" name="gender">
            <option disabled selected> Select a Gender </option>
            <option value="Male" @if (old('gender') == 'Male') {{ 'selected' }} @endif>Male</option>
            <option value="Female" @if (old('gender') == 'Female') {{ 'selected' }} @endif>Female</option>
        </select>

        <input type="text" name="phone" placeholder="Phone Number" value="{{ old('phone') }}" required>
        @error('phone')
            <small class="form-text text-danger">{{ $message }}</small>
        @enderror

        <input type="text" name="address" placeholder="Your Address" value="{{ old('address') }}" required>
        @error('address')
            <small class="form-text text-danger">{{ $message }}</small>
        @enderror

        <select class="governorate_id" name="governorate_id">
            <option selected>Select a Governorate</option>
            @foreach ($governorates as $governorate)
                <option value="{{$governorate->id}}">{{$governorate->governorate_name}}</option>
            @endforeach
        </select>

        <select class="city_id" name="city_id">
            <option selected> Select a City</option>
            @foreach ($cities as $city)
                <option value="{{$city->id}}">{{$city->city_name}}</option>
            @endforeach
        </select>

        <select class="speciality_id" name="speciality_id">
            <option disabled selected>Select a Speciality</option>
            @foreach ($specialities as $specialty)
                <option value="{{$specialty->id}}">{{$specialty->name}}</option>
            @endforeach
        </select>

        <select class="hospital_id" name="hospital_id">
            <option disabled selected>Select a Hospital</option>
            @foreach ($hospitals as $hospital)
                <option value="{{$hospital->id}}">{{$hospital->name}}</option>
            @endforeach
        </select>

        <select class="day_id" name="day_id">
            <option selected> Select Your Work Day</option>
            @foreach ($days as $day)
                <option value="{{$day->id}}">{{$day->day}}</option>
            @endforeach
        </select>

        <select class="time_id" name="time_id">
            <option selected> Your Work Appointment </option>
            @foreach ($times as $time)
                <option value="{{$time->id}}">{{$time->time}}</option>
            @endforeach
        </select>

        <input type="file" id="file" name="doctor_image" value="{{ old('doctor_image') }}" required>
        <label for="file">
            <span class="material-icons">
                add_photo_alternate
            </span>
            Upload an Image
        </label>
        @error('doctor_image')
            <small class="form-text text-danger">{{ $message }}</small>
        @enderror

        <input type="submit" name="signup" value="Sign Up">
    </form>

</body>

</html>
