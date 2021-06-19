<title> Login </title>

@include('flash-message')

<link rel="stylesheet" type="text/css" href="{{ asset('css/stylelogin.css') }}">
@if (auth()->guard('patient')->check())
    <li class="nav-item">
        {{ auth()->guard('patient')->user()->first_name }}
        {{ auth()->guard('patient')->user()->last_name }}

        </p>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('session.destroy') }}" style="color:blue;">Log Out</a>
    </li>
@endif

@if (session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif

<form method="POST" class="box1" action="{{ route('session.login') }}">
    {{ csrf_field() }}
    <h1> Sign in </h1>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>

    <input type="checkbox"> <span> Remember me </span>
    <p class="forgot"> <a href="{{ route('session.forgot') }}"> Forgot Your Password? </a> </p>
    <input type="submit" name="login" value="Login">
    <p class="message"> Don't have an account? <a href="/patient/register"> Sign up </a></p>
</form>
