@extends('layouts.app')

@section('content')



<div class="card p-4">
    <div class="d-flex flex-column align-items-center text-center">
        <img src="https://via.placeholder.com/100" alt="Avatar" class="rounded-circle mb-3 shadow-sm">
        <h5 class="mb-1">Akbar Rahman</h5>
        <p class="text-muted">Admin | akbar@example.com</p>
        <div class="d-flex gap-2 mt-3">
            <a href="#" class="btn btn-primary btn-sm"><i class="bi bi-pencil me-1"></i> Edit Profile</a>
            <a href="#" class="btn btn-outline-secondary btn-sm"><i class="bi bi-lock me-1"></i> Change Password</a>
        </div>
    </div>
</div>

<div class="card mt-4 p-4">
    <h6 class="mb-3 fw-bold">Profile Information</h6>
    <div class="row mb-2">
        <div class="col-md-6">
            <strong>Full Name:</strong>
            <p>Akbar Rahman</p>
        </div>
        <div class="col-md-6">
            <strong>Email:</strong>
            <p>akbar@example.com</p>
        </div>
        <div class="col-md-6">
            <strong>Role:</strong>
            <p>Administrator</p>
        </div>
        <div class="col-md-6">
            <strong>Joined:</strong>
            <p>January 2024</p>
        </div>
    </div>
</div>

@endsection
