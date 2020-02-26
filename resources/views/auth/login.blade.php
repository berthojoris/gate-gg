@extends('layouts.login')

@section('content')
<div class="bg-primary p-4 text-white text-center position-relative">
    <h4 class="font-20 m-b-5">Welcome Back !</h4>
    <p class="text-white-50 mb-4">Sign in to continue to GATE UI.</p>
    <a href="{{ url('/') }}" class="logo logo-admin">
        <img src="{{ asset('template/images/gg_icon.png') }}" height="24" alt="logo">
    </a>
</div>
<div class="account-card-content">
    <form method="POST" action="{{ route('login') }}" class="form-horizontal m-t-30">
        @csrf

        <div class="form-group">
            <label for="email">{{ __('E-Mail Address') }}</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="off">

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

        <div class="form-group row m-t-20">
            <div class="col-sm-12 text-right">
                <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Log In</button>
            </div>
        </div>
    </form>
</div>


@endsection
