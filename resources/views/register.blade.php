@extends('layouts.app')

@section('content')
<div class="login-container">
    <div class="login-card">
        <div class="login-header">
            <i class="fas fa-user-circle me-2"></i>{{ __('Car Rental Register') }}
        </div>

        <div class="login-body">
            <form method="POST" action="{{ route('customer_register') }}">
                @csrf

                <div class="mb-4">
                    <label for="name" class="form-label fw-bold">{{ __('Name') }}</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Enter your full name" required autocomplete="name" autofocus>

                        @error('name')
                            <div class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="mb-4">
                    <label for="email" class="form-label fw-bold">{{ __('Email Address') }}</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter your email address" required autocomplete="email">

                        @error('email')
                            <div class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="mb-4">
                    <label for="password" class="form-label fw-bold">{{ __('Password') }}</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter your password" required autocomplete="new-password">

                        @error('password')
                            <div class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="mb-4">
                    <label for="password-confirm" class="form-label fw-bold">{{ __('Confirm Password') }}</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm your password" required autocomplete="new-password">
                    </div>
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary w-100">
                        <i class="fas fa-user-plus me-2"></i>{{ __('Register') }}
                    </button>
                </div>

                <div class="text-center">
                    <p>
                        Already registered? 
                        <a href="{{ route('login') }}">
                            {{ __('Login') }}
                        </a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
