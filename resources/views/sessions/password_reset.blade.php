<title> Reset Password </title>
<link rel="stylesheet" type="text/css" href="{{asset('css/newpassword.css')}}">   
<form method="POST" action="{{route('new-password', ['token' => $token])}}" class="box1">
    	{{ csrf_field() }}
        <h1> Forgot password </h1>
        <p class = "message"> Enter a new password for your account. </p> 
        <input type = "password" name = "password" placeholder = "New Password" required>
        <input type = "password" name = "password_confirmation" placeholder = "Confirm New Password" required>
        <button type = "submit" value = "Submit">Submit</button>
</form>



