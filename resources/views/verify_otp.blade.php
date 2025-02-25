@extends('layouts.app')

@section('content')
<div class="login-container">
    <div class="login-card">
        <div class="login-header">
            <i class="fas fa-key me-2"></i>{{ __('Verify OTP') }}
        </div>

        <div class="login-body">
            <form method="POST" action="{{ route('verify_otp') }}">
                @csrf
                <input type="hidden" name="email" value="{{ $email }}">
                <div class="mb-4">
                    <label for="otp" class="form-label fw-bold">{{ __('Enter OTP') }}</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                        <input id="otp" type="text" class="form-control @error('otp') is-invalid @enderror" name="otp" value="{{ old('otp') }}" placeholder="Enter OTP" required autofocus>

                        @error('otp')
                            <div class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary w-100">
                        <i class="fas fa-check-circle me-2"></i>{{ __('Verify OTP') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
