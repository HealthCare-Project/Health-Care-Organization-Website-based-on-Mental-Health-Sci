@extends('layout.main')
    
@section('content')
    @if( auth()->check() )
        <li class="nav-item">
            <p class="nav-link" href="#">Hey, {{ auth()->user()->first_name }} 
            {{auth()->user()->last_name}}
            </p>
        </li>
            <li class="nav-item">
            <a class="nav-link" href="{{route('session.destroy')}}" style="color:blue;">Log Out</a>
        </li>
    @endif
    <h2>Log In</h2>
    
    <form method="POST" action="{{route('session.login')}}">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>

        <div class="form-group">
            <button style="cursor:pointer" type="submit" class="btn btn-primary">Login</button>
        </div>
        @if (count($errors) > 0)
            <div class="error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif    
</form>

@endsection