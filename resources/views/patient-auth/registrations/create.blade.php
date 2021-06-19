

<title> Login </title>
<link rel="stylesheet" type="text/css" href="{{ asset('css/stylesignup.css') }}">


<form class="box2" method="POST" action="{{ route('register.store') }}">
    {{ csrf_field() }}
    <h1> Sign Up </h1>

    <input type = "text" name = "first_name" placeholder = "First Name" required>
    <input type = "text" name = "last_name" placeholder = "Last Name" required>
    <input type = "email" name = "email" placeholder = "Email" required>
    <input type = "password" name = "password" placeholder = "Password" required>
    <input type = "password" name = "password_confirmation" placeholder = "Confirm Password" required>
    <input type = "number" name = "age" placeholder = "Age" value = "" required>
    <input type = "text" name = "phone" placeholder = "Phone" value = "" required>
    <input type = "number" name = "weight" placeholder = "Weight (kg)" value = "" required>
    <input type = "number" name = "height" placeholder = "Height (cm)" value = "" required>
    <input type = "checkbox"> <span> I agree to Health Care Terms </span>
    <input type="submit" name="signup" value="SIGN UP">
    <p class = "message"> Already have an account? <a href = "/patient/login"> Login </a></p>
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
