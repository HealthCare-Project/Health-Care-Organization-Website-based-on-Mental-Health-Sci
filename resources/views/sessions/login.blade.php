<title> Login </title>
 
  <link rel="stylesheet" type="text/css" href="{{asset('css/stylelogin.css')}}">   
    @if( auth()->check() )
        <li class="nav-item">
            <p class="nav-link" href="#">Hey, {{ auth()->user()->first_name }} 
            {{auth()->user()->last_name}}wwww
            </p>
        </li>
            <li class="nav-item">
            <a class="nav-link" href="{{route('session.destroy')}}" style="color:blue;">Log Out</a>
        </li>
    @endif
        <form method="POST" class="box1" action="{{route('session.login')}}">
        {{ csrf_field() }}
        <h1> Sign in </h1>
        <input type = "email" name = "email" placeholder = "Email" required>
        <input type = "password" name = "password" placeholder = "Password" required>
     
        <input type = "checkbox"> <span> Remember me </span> 
        <p class = "forgot"> <a href = "{{route('session.forgot')}}"> Forgot Your Password? </a> </p>
        <input type = "submit" name = "login" value = "Login">
        <p class = "message"> Don't have an account? <a href = "signup.html"> Sign up </a></p>
        </form>





