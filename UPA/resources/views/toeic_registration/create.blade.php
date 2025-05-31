@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Registrasi Ulang TOEIC (Berbayar)</h3>
    <form action="{{ route('toeic-registration.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nim" class="form-label">NIM Mahasiswa</label>
            <input type="text" class="form-control" id="nim" name="nim" required>
        </div>
        <button type="submit" class="btn btn-primary">Daftar & Dapatkan Link Pembayaran</button>
    </form>
</div>
@endsection
