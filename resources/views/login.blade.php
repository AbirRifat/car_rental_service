@extends('layouts.app')

@section('content')

    <div class="login-container">
        <div class="login-card">
            <div class="login-header">
                <i class="fas fa-user-circle me-2"></i>{{ __('Login') }}
            </div>

            <div class="login-body">
                <form method="POST" action="{{ route('customer_login') }}">
                    @csrf

                    <div class="mb-4">
                        <label for="email" class="form-label fw-bold">{{ __('Email Address') }}</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter your email" required autocomplete="email" autofocus>
                        </div>

                        @error('email')
                            <div class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="password" class="form-label fw-bold">{{ __('Password') }}</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter your password" required autocomplete="current-password">
                        </div>

                        @error('password')
                            <div class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>


                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary w-100">
                            <i class="fas fa-sign-in-alt me-2"></i>{{ __('Login') }}
                        </button>
                    </div>

                    <div class="text-center">
                        <a href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
