@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Registrasi Berhasil</h3>
    <p>Terima kasih, NIM: <strong>{{ $registration->nim }}</strong>.</p>
    <p>Silakan lanjutkan ke pembayaran melalui link berikut:</p>

    <a href="https://example.com/pembayaran/{{ $registration->id }}" class="btn btn-success" target="_blank">
        Klik untuk Bayar (Dummy Link)
    </a>

    <p class="mt-3 text-muted">*Ini hanya link simulasi. Pembayaran tidak sungguhan.</p>
</div>
@endsection
