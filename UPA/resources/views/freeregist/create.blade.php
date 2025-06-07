@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <div class="container mx-auto p-4">
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-2xl font-semibold text-center mb-6">Pendaftaran TOEIC</h2>
            <form action="{{ route('freeRegist.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- Status Selection -->
                <div class="mb-4">
                    <label class="block text-gray-700 font-semibold mb-2" for="status">Status Pendaftaran</label>
                    <select name="status" id="status" class="block w-full p-2 border border-gray-300 rounded" required>
                        <option value="free">Free</option>
                        <option value="paid">Paid</option>
                        <option value="pending">Pending</option>
                        <option value="approved">Approved</option>
                        <option value="rejected">Rejected</option>
                    </select>
                    @error('status')
                        <div class="text-red-500 text-sm">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Certificate Upload -->
                <div class="mb-4">
                    <label class="block text-gray-700 font-semibold mb-2" for="certificate_path">Upload Certificate</label>
                    <input type="file" name="certificate_path" id="certificate_path" class="block w-full p-2 border border-gray-300 rounded">
                    @error('certificate_path')
                        <div class="text-red-500 text-sm">{{ $message }}</div>
                    @enderror
                </div>

                <!-- KTP Upload -->
                <div class="mb-4">
                    <label class="block text-gray-700 font-semibold mb-2" for="ktp_path">Upload KTP</label>
                    <input type="file" name="ktp_path" id="ktp_path" class="block w-full p-2 border border-gray-300 rounded">
                    @error('ktp_path')
                        <div class="text-red-500 text-sm">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Button to Submit -->
                <div class="flex justify-between mt-4">
                    <button type="submit" class="bg-green-500 text-white py-2 px-4 rounded">Lanjutkan</button>
                    <button type="button" class="bg-gray-300 text-black py-2 px-4 rounded">Batal</button>
                </div>
            </form>
        </div>
    </div>
@endsection
