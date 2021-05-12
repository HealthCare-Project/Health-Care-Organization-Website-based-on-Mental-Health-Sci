@extends('includes.main')

@section('content')
   @if(auth()->guard('doctor')->check())
        <li class="nav-item">
            {{auth()->guard('doctor')->user()->first_name}}
            {{auth()->guard('doctor')->user()->last_name}}

            </p>
        </li>
            <li class="nav-item">
            <a class="nav-link" href="{{route('doctor.logout')}}" style="color:blue;">Log Out</a>
        </li>
    @endif
    <h2>Doctor Log In</h2>
    <form method="POST" action="{{ route('doctor.login') }}">
        @csrf
        <div class="form-group">
            <label for="email">{{ __('E-Mail') }}</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="password">{{ __('Password') }}</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                name="password" required autocomplete="current-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                {{ old('remember') ? 'checked' : '' }}>
            <label class="form-check-label" for="remember">{{ __('Remember Me') }}</label>
            <div class="form-group">
                <button style="cursor:pointer" type="submit" class="btn btn-primary">Login</button>

                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </div>
    </form>
    @if (count($errors) > 0)
    eeeeeeeeeeeeeeew
    <div class="error">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@endsection
