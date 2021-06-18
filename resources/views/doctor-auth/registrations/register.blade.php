<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title> Doctor Registeration </title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/doctor_style/doctor_register.css') }}">
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

        <input type="number" name="age" placeholder="Age" value="{{ old('age') }}" required>
        @error('age')
            <small class="form-text text-danger">{{ $message }}</small>
        @enderror

        <select class="gender" name="gender">
            <option selected>Select Gender</option>
            <option value="M" @if (old('gender') == 'M') {{ 'selected' }} @endif>Male</option>
            <option value="F" @if (old('gender') == 'F') {{ 'selected' }} @endif>Female</option>
        </select>

        <input type="text" name="phone" placeholder="Phone" value="{{ old('phone') }}" required>
        @error('phone')
            <small class="form-text text-danger">{{ $message }}</small>
        @enderror

        <input type="text" name="address" placeholder="Address" value="{{ old('address') }}" required>
        @error('address')
            <small class="form-text text-danger">{{ $message }}</small>
        @enderror

        <input type="text" name="city" placeholder="City" value="{{ old('city') }}" required>
        @error('city')
            <small class="form-text text-danger">{{ $message }}</small>
        @enderror

        <select class="governorate" name="governorate">
            <option selected>Choose a governorate...</option>
            <option value="Alexandria" @if (old('governorate') == 'Alexandria') {{ 'selected' }} @endif>Alexandria</option>
            <option value="Aswan" @if (old('governorate') == 'Aswan') {{ 'selected' }} @endif>Aswan</option>
            <option value="Asyut" @if (old('governorate') == 'Asyut') {{ 'selected' }} @endif>Asyut</option>
            <option value="Beheira" @if (old('governorate') == 'Beheira') {{ 'selected' }} @endif>Beheira</option>
            <option value="Beni Suef" @if (old('governorate') == 'Beni Suef') {{ 'selected' }} @endif>Beni Suef</option>
            <option value="Cairo" @if (old('governorate') == 'Cairo') {{ 'selected' }} @endif>Cairo</option>
            <option value="Dakahlia" @if (old('governorate') == 'Dakahlia') {{ 'selected' }} @endif>Dakahlia</option>
            <option value="Damietta" @if (old('governorate') == 'Damietta') {{ 'selected' }} @endif>Damietta</option>
            <option value="Faiyum" @if (old('governorate') == 'Faiyum') {{ 'selected' }} @endif>Faiyum</option>
            <option value="Gharbia" @if (old('governorate') == 'Gharbia') {{ 'selected' }} @endif>Gharbia</option>
            <option value="Giza" @if (old('governorate') == 'Giza') {{ 'selected' }} @endif>Giza</option>
            <option value="Ismailia" @if (old('governorate') == 'Ismailia') {{ 'selected' }} @endif>Ismailia</option>
            <option value="Kafr El Sheikh" @if (old('governorate') == 'Kafr El Sheikh') {{ 'selected' }} @endif>Kafr El Sheikh</option>
            <option value="Luxor" @if (old('governorate') == 'Luxor') {{ 'selected' }} @endif>Luxor</option>
            <option value="Matruh" @if (old('governorate') == 'Matruh') {{ 'selected' }} @endif>Matruh</option>
            <option value="Minya" @if (old('governorate') == 'Minya') {{ 'selected' }} @endif>Minya</option>
            <option value="Monufia" @if (old('governorate') == 'Monufia') {{ 'selected' }} @endif>Monufia</option>
            <option value="New Valley" @if (old('governorate') == 'New Valley') {{ 'selected' }} @endif>New Valley</option>
            <option value="North Sinai" @if (old('governorate') == 'North Sinai') {{ 'selected' }} @endif>North Sinai</option>
            <option value="Port Said" @if (old('governorate') == 'Port Said') {{ 'selected' }} @endif>Port Said</option>
            <option value="Qalyubia" @if (old('governorate') == 'Qalyubia') {{ 'selected' }} @endif>Qalyubia</option>
            <option value="Qena" @if (old('governorate') == 'Qena') {{ 'selected' }} @endif>Qena</option>
            <option value="Red Sea" @if (old('governorate') == 'Red Sea') {{ 'selected' }} @endif>Red Sea</option>
            <option value="Sharqia" @if (old('governorate') == 'Sharqia') {{ 'selected' }} @endif>Sharqia</option>
            <option value="Sohag" @if (old('governorate') == 'Sohag') {{ 'selected' }} @endif>Sohag</option>
            <option value="South Sinai" @if (old('governorate') == 'South Sinai') {{ 'selected' }} @endif>South Sinai</option>
            <option value="Suez" @if (old('governorate') == 'Suez') {{ 'selected' }} @endif> Suez</option>
        </select>

        <input type="text" name="specialty" placeholder="Enter Your Specialty" value="{{ old('specialty') }}"
            required>
        @error('specialty')
            <small class="form-text text-danger">{{ $message }}</small>
        @enderror

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

        <button type="submit" name="signup" value="Sign Up">Sign up</button>
    </form>
</body>

</html>
