@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3 class="mb-0">Daftar Pendaftaran TOEIC</h3>
        <a href="{{ route('toeic-registration.create') }}" class="btn btn-success">
            + Tambah Pendaftaran
        </a>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>NIM</th>
                <th>Status</th>
                <th>Tanggal Daftar</th>
                <th>Skor</th>
                <th>Sertifikat</th>
            </tr>
        </thead>
        <tbody>
            @foreach($registrations as $reg)
                <tr>
                    <td>{{ $reg->nim }}</td>
                    <td>{{ ucfirst($reg->status) }}</td>
                    <td>{{ $reg->registration_date }}</td>
                    <td>{{ $reg->score ?? '-' }}</td>
                    <td>
                        @if($reg->certificate_path)
                            <a href="{{ asset('storage/' . $reg->certificate_path) }}" target="_blank">Lihat</a>
                        @else
                            Belum Ada
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
