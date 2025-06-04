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
        <div class="flex items-center justify-center bg-[#1E4CFF] p-8">
            <div class="bg-white rounded-xl p-4">
                <img src="{{ asset('images/login.png') }}" alt="Signup Visual"
                    class="rounded-xl max-h-[90vh] object-contain">
            </div>
        </div>

        <!-- Right Form Section -->
        <div class="flex flex-col justify-center px-8 py-12">
            <div class="max-w-md w-full mx-auto">
                <h2 class="text-blue-700 font-bold text-lg">LOGOS</h2>
                <h1 class="text-xl font-semibold mt-2">Sign Up For Free!</h1>

                <form action="{{ route('signup.store') }}" method="POST" class="mt-6 space-y-4">
                    @csrf

                    <!-- Role Selection -->
                    <div>
                        <label class="block text-gray-400 text-sm mb-1">Role</label>
                        <select id="roleSelect" name="role"
                            class="w-full px-4 py-3 bg-gray-100 rounded-md focus:outline-none" required>
                            <option disabled selected>Select Role</option>
                            <option value="student" {{ old('role') == 'student' ? 'selected' : '' }}>Student</option>
                            <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin</option>
                            <option value="educational_staff"
                                {{ old('role') == 'educational_staff' ? 'selected' : '' }}>
                                Educational Staff</option>
                        </select>
                        @error('role')
                            <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Account Info -->
                    <div class="space-y-4">
                        <div>
                            <label class="block text-gray-400 text-sm mb-1">Username</label>
                            <input name="username" type="text" value="{{ old('username') }}"
                                class="w-full px-4 py-3 bg-gray-100 rounded-md focus:outline-none" required>
                            @error('username')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label class="block text-gray-400 text-sm mb-1">Email</label>
                            <input name="email" type="email" value="{{ old('email') }}"
                                class="w-full px-4 py-3 bg-gray-100 rounded-md focus:outline-none" required>
                            @error('email')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label class="block text-gray-400 text-sm mb-1">Password</label>
                            <input name="password" type="password"
                                class="w-full px-4 py-3 bg-gray-100 rounded-md focus:outline-none" required>
                            @error('password')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label class="block text-gray-400 text-sm mb-1">Retype Password</label>
                            <input name="password_confirmation" type="password"
                                class="w-full px-4 py-3 bg-gray-100 rounded-md focus:outline-none" required>
                        </div>
                    </div>

                    <!-- Profile Info Section -->
                    <div id="profileSection" class="space-y-4 pt-6 transition-opacity duration-300">
                        <div>
                            <label class="block text-gray-400 text-sm mb-1">Full Name</label>
                            <input name="name" type="text" value="{{ old('name') }}"
                                class="w-full px-4 py-3 bg-gray-100 rounded-md focus:outline-none">
                            @error('name')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label class="block text-gray-400 text-sm mb-1">NIM</label>
                            <input name="nim" type="text" value="{{ old('nim') }}"
                                class="w-full px-4 py-3 bg-gray-100 rounded-md focus:outline-none">
                        </div>
                        <div>
                            <label class="block text-gray-400 text-sm mb-1">NIK</label>
                            <input name="nik" type="text" value="{{ old('nik') }}"
                                class="w-full px-4 py-3 bg-gray-100 rounded-md focus:outline-none">
                        </div>
                        <div>
                            <label class="block text-gray-400 text-sm mb-1">Phone Number</label>
                            <input name="phone_number" type="tel" value="{{ old('phone_number') }}"
                                class="w-full px-4 py-3 bg-gray-100 rounded-md focus:outline-none">
                        </div>
                        <div>
                            <label class="block text-gray-400 text-sm mb-1">Major</label>
                            <select name="jurusan_id"
                                class="w-full px-4 py-3 bg-gray-100 rounded-md focus:outline-none">
                                <option disabled selected value="">Select Major</option>
                                @foreach ($majors as $major)
                                    <option value="{{ $major->jurusan_id }}"
                                        {{ old('jurusan_id') == $major->jurusan_id ? 'selected' : '' }}>
                                        {{ $major->nama_jurusan }}
                                    </option>
                                @endforeach
                            </select>
                            @error('jurusan_id')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                    </div>

                    <!-- Submit -->
                    <div class="pt-6">
                        <button type="submit" class="w-full bg-blue-500 text-white py-3 rounded-md">
                            Sign Up
                        </button>
                    </div>
                </form>

                <div class="text-center mt-4">
                    <span class="text-sm text-blue-400">Already have an account? </span>
                    <a href="{{ route('login') }}" class="text-sm text-blue-600 hover:underline">Log in</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        const roleSelect = document.getElementById('roleSelect');
        const profileSection = document.getElementById('profileSection');

        function toggleProfileInputs() {
            const selectedRole = roleSelect.value;
            const allInputs = profileSection.querySelectorAll('input, select');

            allInputs.forEach(el => {
                el.disabled = false;
                el.classList.remove('cursor-not-allowed', 'opacity-50');
            });

            profileSection.style.opacity = '1';

            if (selectedRole === 'admin') {
                profileSection.style.opacity = '0.4';
                allInputs.forEach(el => {
                    el.disabled = true;
                    el.classList.add('cursor-not-allowed');
                });
            }

            if (selectedRole === 'educational_staff') {
                const toDisable = ['input[name="nim"]', 'select[name="jurusan_id"]'];
                toDisable.forEach(selector => {
                    const el = document.querySelector(selector);
                    if (el) {
                        el.disabled = true;
                        el.classList.add('cursor-not-allowed', 'opacity-50');
                    }
                });
            }
        }

        roleSelect.addEventListener('change', toggleProfileInputs);
        window.addEventListener('DOMContentLoaded', toggleProfileInputs);
    </script>

</body>

</html>
