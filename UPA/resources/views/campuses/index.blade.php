@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Kampus</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('campuses.create') }}" class="btn btn-primary mb-3">+ Tambah Kampus</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama Kampus</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($campuses as $campus)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $campus->name }}</td>
                <td>
                    <a href="{{ route('campuses.edit', $campus->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('campuses.destroy', $campus->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Yakin ingin hapus?')" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
