<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <title> Forgot Your Password? </title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/doctor_style/forgot_password.css') }}">
    </head>

    <body>
        <form class="box1" action="{{ route('session.restore') }}" method="post">
            @csrf
            <h1> Forgot password </h1>
            <p class="message"> Enter your email address to reset your password. You may need to check your email </p>
            <input type="email" name="email" placeholder="Email" required>
            <input type="submit" name="Reset" value="Reset">
        </form>
    </body>
</html>
