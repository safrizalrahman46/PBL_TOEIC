@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <div class="container mx-auto p-4">
        @if (session('message'))
            <div class="bg-yellow-100 text-yellow-700 p-4 rounded">
                {{ session('message') }}
            </div>
        @endif

        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-2xl font-semibold text-center mb-6">Pendaftaran TOEIC</h2>

            <!-- Display NIM -->
            <h3 class="font-semibold text-lg mb-4">Your Registration Details</h3>
            <p><strong>NIM:</strong> {{ $nim }}</p>
            <p><strong>Status:</strong> {{ $registration->status }}</p>
            <p><strong>Registration Date:</strong> {{ $registration->registration_date->format('d-m-Y') }}</p>

            <!-- Optionally display other fields like KTP or Certificate -->
            <p><strong>Certificate:</strong> <a href="{{ Storage::url($registration->certificate_path) }}" target="_blank">View Certificate</a></p>
            <p><strong>KTP:</strong> <a href="{{ Storage::url($registration->ktp_path) }}" target="_blank">View KTP</a></p>

            <div class="mt-4">
                <a href="{{ route('freeRegist.edit', $registration->id) }}" class="bg-blue-500 text-white py-2 px-4 rounded">Edit Registration</a>
            </div>
        </div>
    </div>
@endsection
