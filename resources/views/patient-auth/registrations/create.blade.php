<title> Login </title>
<link rel="stylesheet" type="text/css" href="{{ asset('css/stylesignup.css') }}">


<form class="box2" method="POST" action="{{ route('register.store') }}">
    {{ csrf_field() }}
    <h1> sign up </h1>
    <input type="text" name="first_name" placeholder="First Name" required>
    <input type="text" name="last_name" placeholder="Last Name" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <input type="password" name="password_confirmation" placeholder="Password Confirmation">
    <div class="form-group">
        <label for="age">Age:</label>
        <input type="number" class="form-control" id="age" name="age">
    </div>
    <div class="form-group">
        <label for="phone">Phone:</label>
        <input type="text" class="form-control" id="phone" name="phone">
    </div>
    <div class="form-group">
        <label for="weight">Weight:</label>
        <input type="number" class="form-control" id="weight" name="weight" placeholder="Enter in kgs">
    </div>
    <div class="form-group">
        <label for="height">Height:</label>
        <input type="number" class="form-control" id="height" name="height" placeholder="Enter in cms">
    </div>
    <input type="checkbox"> <span> I agree to Health Care Terms </span>
    <input type="submit" name="signup" value="SIGN UP">
    <p class="message"> Already have an account? <a href="login.html"> Login </a></p>
</form>


@if (count($errors) > 0)
    <div class="error">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
