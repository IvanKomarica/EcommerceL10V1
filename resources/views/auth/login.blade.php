@extends('layouts.app')
@section('content')
<style>
    input [type="text"]:focus,
    [type="email"]:focus,
    [type="url"]:focus,
    [type="password"]:focus,
    [type="number"]:focus,
    [type="date"]:focus,
    [type="datetime-local"]:focus,
    [type="month"]:focus,
    [type="search"]:focus,
    [type="tel"]:focus,
    [type="time"]:focus,
    [type="week"]:focus,
    [multiple]:focus,
    textarea:focus,
    select:focus {
        --tw-ring-color: transparent !important;
        border-color: transparent !important;
    }

    input [type="text"]:hover,
    [type="email"]:hover,
    [type="url"]:hover,
    [type="password"]:hover,
    [type="number"]:hover,
    [type="date"]:hover,
    [type="datetime-local"]:hover,
    [type="month"]:hover,
    [type="search"]:hover,
    [type="tel"]:hover,
    [type="time"]:hover,
    [type="week"]:hover,
    [multiple]:hover,
    textarea:hover,
    select:hover {
        --tw-ring-color: transparent !important;
        border-color: transparent !important;
    }

    input [type="text"]:active,
    [type="email"]:active,
    [type="url"]:active,
    [type="password"]:active,
    [type="number"]:active,
    [type="date"]:active,
    [type="datetime-local"]:active,
    [type="month"]:active,
    [type="search"]:active,
    [type="tel"]:active,
    [type="time"]:active,
    [type="week"]:active,
    [multiple]:active,
    textarea:active,
    select:active {
        --tw-ring-color: transparent !important;
        border-color: transparent !important;
    }
</style>
<!-- Log In Section Start -->
<div class="login-section">
    <div class="materialContainer">
        <div class="box">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="login-title">
                    <h2>{{ __('Login') }}</h2>
                </div>
                <div class="input">
                    <label for="email">{{ __('Email Address') }}</label>
                    <input type="email" id="email"  name="email" value="{{ old('email') }}" required autocomplete="name">
                    @error('email') <span class="text-danger mt-3">{{ $message }}</span>@enderror
                </div>
                <div class="input">
                    <label for="pass">Password</label>
                    <input type="password" id="pass" class="block mt-1 w-full" name="password" required autocomplete="current-password">
                    @error('password') <span class="text-danger mt-3">{{ $message }}</span>@enderror
                </div>
                <div class="row">
                    <div class="checkbox-wrapper-43 mt-3 offset-md-4">
                        <input type="checkbox" id="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label for="remember" class="check">
                            <svg width="18px" height="18px" viewBox="0 0 18 18">
                                <path d="M1,9 L1,3.5 C1,2 2,1 3.5,1 L14.5,1 C16,1 17,2 17,3.5 L17,14.5 C17,16 16,17 14.5,17 L3.5,17 C2,17 1,16 1,14.5 L1,9 Z"></path>
                                <polyline points="1 9 7 14 15 4"></polyline>
                            </svg>
                        </label>
                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
                @if (Route::has('password.request'))
                    <a class="pass-forgot" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
                <div class="button login">
                    <button type="submit">
                        <span>{{ __('Login') }}</span>
                        <i class="fa fa-check"></i>
                    </button>
                </div>

                <p>Not a member? <a href="{{ route('register') }}" class="theme-color">Sign up now</a></p>
            </form>
        </div>
    </div>
</div>
<!-- Log In Section End -->
@endsection
