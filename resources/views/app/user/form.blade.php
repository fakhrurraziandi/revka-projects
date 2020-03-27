@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            

            <div class="card border-0 shadow-sm">
                <div class="card-header">{{ isset($user) ? 'Edit User' : 'Add New User' }}</div>
                <div class="card-body">
                    
                    
                    @if(isset($user))
                        <form action="{{ route('app.user.update', $user->id)}}" method="POST" enctype="multipart/form-data">
                    @else
                        <form action="{{ route('app.user.store')}}" method="POST" enctype="multipart/form-data">
                    @endif

                        @csrf

                        @isset($user)
                            @method('PUT')
                        @endisset

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        @if(isset($user))

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                        @endif
                       

                        <div class="row mt-3">
                            <div class="col-sm-6 offset-sm-4">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="{{route('app.user.index')}}" class="btn btn-secondary">Cancel</a>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        
        </div>
    </div>
</div>
@endsection
