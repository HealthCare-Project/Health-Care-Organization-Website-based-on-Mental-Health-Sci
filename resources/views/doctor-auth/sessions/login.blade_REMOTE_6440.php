<!DOCTYPE html>
<html lang="en" dir="ltr">

@if (auth()->guard('doctor')->check())
    <li class="nav-item">
        {{ auth()->guard('doctor')->user()->first_name }}
        {{ auth()->guard('doctor')->user()->last_name }}

        </p>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('doctor.logout') }}" style="color:blue;">Log Out</a>
    </li>
@endif

<head>
    <meta charset="utf-8">
    <title> Login </title>
    <link rel="stylesheet" href="{{ asset('css/doctor_style/doctor_login.css') }}">
</head>

<body>
    <form class="box2" method="POST" action="{{ route('doctor.login') }}">
        @csrf
        <h2> sign in </h2>
        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email"
            autofocus>
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <input type="password" name="password" placeholder="Password" required autocomplete="current-password">
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <input class="form-check-input" type="checkbox" name="remember" id="remember"
            {{ old('remember') ? 'checked' : '' }}>
        <label class="form-check-label" for="remember">{{ __('Remember Me') }}</label><br />

        @if (Route::has('password.request'))
            <a class="btn btn-link" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
        @endif

        <input type="submit" name="login" value="Login">
        <p class="message"> Don't have an account? <a href="doctor-register"> Sign up </a></p>
    </form>
</body>

</html>
