@extends('layouts.app')

@section('content')
<div class="login-container">
    <div class="login-card">
        <div class="login-header">
            <i class="fas fa-lock me-2"></i>{{ __('Reset Password') }}
        </div>

        <div class="login-body">
            <form action="{{ route('password.update') }}" method="POST">
                @csrf
                <input type="hidden" name="user_id" value="{{ $user_id }}">

                <!-- New Password Field -->
                <div class="mb-4">
                    <label for="new_password" class="form-label fw-bold">{{ __('New Password') }}</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                        <input id="new_password" type="password" class="form-control @error('new_password') is-invalid @enderror" name="new_password" placeholder="Enter new password" required autocomplete="new-password">

                        @error('new_password')
                            <div class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                </div>

                <!-- Confirm Password Field -->
                <div class="mb-4">
                    <label for="new_password_confirmation" class="form-label fw-bold">{{ __('Confirm Password') }}</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                        <input id="new_password_confirmation" type="password" class="form-control" name="new_password_confirmation" placeholder="Confirm new password" required autocomplete="new-password">
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary w-100">
                        <i class="fas fa-check-circle me-2"></i>{{ __('Update Password') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
