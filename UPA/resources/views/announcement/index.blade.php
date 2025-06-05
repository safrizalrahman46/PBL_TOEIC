@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h4>Data announcement</h4>
    <a href="{{ route('announcement.create') }}" class="btn btn-success">+ Tambah announcement</a>
</div>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<div class="table-responsive">
    <table class="table table-bordered bg-white shadow-sm">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Isi</th>
                <th>Tanggal</th>
                <th>Dibuat Oleh</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($announcement as $index => $item)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $item->judul }}</td>
                <td>{{ Str::limit($item->isi, 100) }}</td>
                <td>{{ \Carbon\Carbon::parse($item->tanggal)->format('Y-m-d') }}</td>
                <td>{{ $item->creator->nama ?? 'Tidak diketahui' }}</td>
                <td>
                    <a href="{{ route('admin.announcement.edit', $item->announcement_id) }}" class="btn btn-sm btn-light"><i class="bi bi-pencil"></i></a>
                    <form action="{{ route('admin.announcement.destroy', $item->announcement_id) }}" method="POST" class="d-inline" onsubmit="return confirm('Hapus announcement ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-light"><i class="bi bi-trash"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
