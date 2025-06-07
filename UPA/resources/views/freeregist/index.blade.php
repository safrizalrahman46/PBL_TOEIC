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
            <!-- Progress Step Indicator -->
            <div class="flex items-center mb-6">
                <div class="flex space-x-2">
                    <div class="flex items-center">
                        <div class="w-8 h-8 rounded-full bg-green-500 text-white flex items-center justify-center">✔</div>
                        <span class="ml-2 text-sm"></span>
                    </div>
                    <div class="w-16 h-1 bg-gray-300"></div>
                    <div class="flex items-center">
                        <div class="w-8 h-8 rounded-full bg-blue-500 text-white flex items-center justify-center">2</div>
                        <span class="ml-2 text-sm">Step 2</span>
                    </div>
                    <div class="w-16 h-1 bg-gray-300"></div>
                    <div class="flex items-center">
                        <div class="w-8 h-8 rounded-full bg-gray-300 text-white flex items-center justify-center">3</div>
                        <span class="ml-2 text-sm">Step 3</span>
                    </div>
                    <div class="w-16 h-1 bg-gray-300"></div>
                    <div class="flex items-center">
                        <div class="w-8 h-8 rounded-full bg-gray-300 text-white flex items-center justify-center">4</div>
                        <span class="ml-2 text-sm">Step 4</span>
                    </div>
                    <div class="w-16 h-1 bg-gray-300"></div>
                    <div class="flex items-center">
                        <div class="w-8 h-8 rounded-full bg-gray-300 text-white flex items-center justify-center">5</div>
                        <span class="ml-2 text-sm">Step 5</span>
                    </div>
                </div>
            </div>    

            <!-- Display NIM -->
            <h3 class="font-semibold text-lg mb-4">Your Registration Details</h3>
            <p><strong>NIM:</strong> {{ $nim }}</p>
            <p><strong>Status:</strong> {{ $registration->status }}</p>
            <p><strong>Registration Date:</strong> {{ $registration->registration_date->format('d-m-Y') }}</p>

            <!-- Display if the user has a second registration -->
            @if ($registration->is_second_registration)
                <p><strong>Status of Second Registration:</strong> Registered</p>
            @else
                <p><strong>Status of Second Registration:</strong> Not yet registered</p>
            @endif

            <!-- Optionally display other fields like KTP or Certificate -->
            @if($registration->certificate_path)
                <p><strong>Certificate:</strong> <a href="{{ Storage::url($registration->certificate_path) }}" target="_blank">View Certificate</a></p>
            @endif
            @if($registration->ktp_path)
                <p><strong>KTP:</strong> <a href="{{ Storage::url($registration->ktp_path) }}" target="_blank">View KTP</a></p>
            @endif

            <div class="mt-4">
                <a href="{{ route('freeRegist.edit', $registration->id) }}" class="bg-blue-500 text-white py-2 px-4 rounded">Edit Registration</a>
            </div>
        </div>
    </div>
@endsection
