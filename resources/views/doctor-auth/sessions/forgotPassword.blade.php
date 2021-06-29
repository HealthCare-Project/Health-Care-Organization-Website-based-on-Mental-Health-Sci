<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title> Forgot Your Password? </title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/doctor_style/forgot_password.css') }}">
</head>

<body>
    <form class="box2" action="{{ route('password.update') }}" method="POST">
        @csrf
        <h2> Forgot password </h2>
        <p class="message"> Enter your email address to reset your password. You may need to check your email </p>
        <input type="email" name="email" placeholder="Email" required>
        <input type="submit" name="Reset" value="Reset">
    </form>
</body>

</html>
