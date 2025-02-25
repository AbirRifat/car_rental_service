@extends('admin.layout')

@section('title', isset($customer) ? 'Edit Customer' : 'Add New Customer')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">{{ isset($customer) ? 'Edit Customer' : 'Add New Customer' }}</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.customers.index') }}">Manage Customers</a></li>
        <li class="breadcrumb-item active">{{ isset($customer) ? 'Edit Customer' : 'Add New Customer' }}</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-user-edit me-1"></i>
            Customer Details
        </div>
        <div class="card-body">
            <form action="{{ isset($customer) ? route('admin.customers.update', $customer->id) : route('admin.customers.store') }}" method="POST">
                @csrf
                @if(isset($customer)) @method('PUT') @endif

                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $customer->name ?? '') }}" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $customer->email ?? '') }}" required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" {{ isset($customer) ? '' : 'required' }}>
                    @if(isset($customer))
                        <small class="form-text text-muted">Leave blank to keep the current password.</small>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="role" class="form-label">Role</label>
                    <select class="form-select" id="role" name="role" required>
                        <option value="customer" {{ (old('role', $customer->role ?? '') == 'customer') ? 'selected' : '' }}>Customer</option>
                        <option value="admin" {{ (old('role', $customer->role ?? '') == 'admin') ? 'selected' : '' }}>Admin</option>
                    </select>
                </div>

                <div class="mt-4 mb-0">
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('admin.customers.index') }}" class="btn btn-secondary">
                            <i class="fas fa-arrow-left me-1"></i> Back to Customers
                        </a>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save me-1"></i> {{ isset($customer) ? 'Update' : 'Create' }} Customer
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
@endpush

@push('scripts')
<script>
    // Add any custom JavaScript here
</script>
@endpush