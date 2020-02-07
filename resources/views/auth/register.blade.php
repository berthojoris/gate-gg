@extends('layouts.login')

@section('content')
<div class="bg-primary p-4 text-white text-center position-relative">
    <h4 class="font-20 m-b-5">Welcome!</h4>
    <p class="text-white-50 mb-4">Register your data at GATE UI</p>
    <a href="{{ url('/') }}" class="logo logo-admin">
        <img src="{{ asset('template/images/logo-sm.png') }}" height="24" alt="logo">
    </a>
</div>
<div class="account-card-content">
    <form method="POST" action="{{ route('register') }}" class="form-horizontal m-t-30">
        @csrf

        <div class="form-group">
            <label for="name">{{ __('Name') }}</label>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="off">

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="email">{{ __('Email Address') }}</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" required autocomplete="off">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="password">{{ __('Password') }}</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="off">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="password-confirm">{{ __('Confirm Password') }}</label>
            <input id="password-confirm" type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" required autocomplete="off">
        </div>

        <div class="form-group row m-t-20">
            <div class="col-sm-12 text-right">
                <button class="btn btn-primary w-md waves-effect waves-light" type="submit">{{ __('Register') }}</button>
            </div>
        </div>
    </form>
</div>


@endsection
