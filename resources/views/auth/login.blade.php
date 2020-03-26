@extends('layouts.auth')

@section('content')
<div class="text-center">
    <h1 class="h4 text-gray-900 mb-4">{{ __('Login') }}</h1>
</div>

<form method="POST" action="{{ route('login') }}">
    
    @csrf

    <div class="form-group">
        <label for="exampleInputEmail1">{{ __('E-Mail Address') }}</label>
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="form-group">
        <label for="password">{{ __('Password') }}</label>
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="form-group form-check">
        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
        <label class="form-check-label" for="remember">
            {{ __('Remember Me') }}
        </label>
    </div>
    <button type="submit" class="btn btn-danger btn-block">
        {{ __('Login') }}
    </button>
</form>
@endsection
