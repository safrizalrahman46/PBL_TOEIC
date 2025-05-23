<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Signup</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@^2/dist/tailwind.min.css">
</head>
<body class="bg-blue-50">

<div class="min-h-screen grid grid-cols-1 md:grid-cols-2 bg-white">
    <!-- Left Image Section -->
    <div class="flex items-center justify-center bg-[#1E4CFF] p-6">
        <img src="{{ asset('images/login.png') }}" alt="Signup Visual" class="rounded-xl max-h-[90%] object-contain">
    </div>

    <!-- Right Form Section -->
    <div class="flex flex-col justify-center px-8 py-12">
        <div class="max-w-md w-full mx-auto">
            <h2 class="text-blue-700 font-bold text-lg">LOGOS</h2>
            <h1 class="text-xl font-semibold mt-2">Sign Up For Free Tho!</h1>

            <form action="{{ route('signup.store') }}" method="POST" class="mt-6 space-y-4">
                @csrf

                <!-- Step 1: Account Info -->
                <div class="space-y-4">
                    <div>
                        <label class="block text-gray-400 text-sm mb-1">Username</label>
                        <input name="username" type="text" value="{{ old('username') }}" class="w-full px-4 py-3 bg-gray-100 rounded-md focus:outline-none" required>
                        @error('username') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <label class="block text-gray-400 text-sm mb-1">Email</label>
                        <input name="email" type="email" value="{{ old('email') }}" class="w-full px-4 py-3 bg-gray-100 rounded-md focus:outline-none" required>
                        @error('email') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <label class="block text-gray-400 text-sm mb-1">Password</label>
                        <input name="password" type="password" class="w-full px-4 py-3 bg-gray-100 rounded-md focus:outline-none" required>
                        @error('password') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <label class="block text-gray-400 text-sm mb-1">Retype Password</label>
                        <input name="password_confirmation" type="password" class="w-full px-4 py-3 bg-gray-100 rounded-md focus:outline-none" required>
                    </div>
                </div>

                <!-- Step 2: Profile Info -->
                <div class="space-y-4 pt-6">
                    <div>
                        <label class="block text-gray-400 text-sm mb-1">Full Name</label>
                        <input name="name" type="text" value="{{ old('name') }}" class="w-full px-4 py-3 bg-gray-100 rounded-md focus:outline-none" required>
                        @error('name') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label class="block text-gray-400 text-sm mb-1">NIM</label>
                        <input name="nim" type="text" value="{{ old('nim') }}" class="w-full px-4 py-3 bg-gray-100 rounded-md focus:outline-none" required>
                    </div>

                    <div>
                        <label class="block text-gray-400 text-sm mb-1">NIK</label>
                        <input name="nik" type="text" value="{{ old('nik') }}" class="w-full px-4 py-3 bg-gray-100 rounded-md focus:outline-none" required>
                    </div>

                    <div>
                        <label class="block text-gray-400 text-sm mb-1">Phone Number</label>
                        <input name="phone" type="tel" value="{{ old('phone') }}" class="w-full px-4 py-3 bg-gray-100 rounded-md focus:outline-none" required>
                    </div>

                    <div>
                        <label class="block text-gray-400 text-sm mb-1">Origin Address</label>
                        <textarea name="origin_address" class="w-full px-4 py-3 bg-gray-100 rounded-md focus:outline-none" required>{{ old('origin_address') }}</textarea>
                    </div>

                    <div>
                        <label class="block text-gray-400 text-sm mb-1">Current Address</label>
                        <textarea name="current_address" class="w-full px-4 py-3 bg-gray-100 rounded-md focus:outline-none" required>{{ old('current_address') }}</textarea>
                    </div>

                    <div>
                        <label class="block text-gray-400 text-sm mb-1">Study Program</label>
                        <select name="study_program_id" class="w-full px-4 py-3 bg-gray-100 rounded-md focus:outline-none" required>
                            <option disabled selected>Select Study Program</option>
                            @foreach ($studyPrograms as $program)
                                <option value="{{ $program->id }}" {{ old('study_program_id') == $program->id ? 'selected' : '' }}>
                                    {{ $program->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label class="block text-gray-400 text-sm mb-1">Major</label>
                        <select name="major_id" class="w-full px-4 py-3 bg-gray-100 rounded-md focus:outline-none" required>
                            <option disabled selected>Select Major</option>
                            @foreach ($majors as $major)
                                <option value="{{ $major->id }}" {{ old('major_id') == $major->id ? 'selected' : '' }}>
                                    {{ $major->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label class="block text-gray-400 text-sm mb-1">Campus</label>
                        <select name="campus" class="w-full px-4 py-3 bg-gray-100 rounded-md focus:outline-none" required>
                            <option value="Main" {{ old('campus') == 'Main' ? 'selected' : '' }}>Main</option>
                            <option value="PSDKU Kediri" {{ old('campus') == 'PSDKU Kediri' ? 'selected' : '' }}>PSDKU Kediri</option>
                            <option value="PSDKU Lumajang" {{ old('campus') == 'PSDKU Lumajang' ? 'selected' : '' }}>PSDKU Lumajang</option>
                            <option value="PSDKU Pamekasan" {{ old('campus') == 'PSDKU Pamekasan' ? 'selected' : '' }}>PSDKU Pamekasan</option>
                        </select>
                    </div>
                </div>

                <!-- Submit -->
                <div class="pt-6">
                    <button type="submit" class="w-full bg-[#1E4CFF] text-white py-3 rounded-md font-semibold hover:bg-blue-800 transition">
                        Sign Up
                    </button>
                </div>
            </form>

            <div class="text-center mt-4">
                <span class="text-sm text-gray-600">Already have an account? </span>
                <a href="{{ route('login') }}" class="text-sm text-blue-600 hover:underline">Log in</a>
            </div>
        </div>
    </div>
</div>

</body>
</html>
