@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Kampus</h1>

    <form action="{{ route('campuses.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama Kampus</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <button class="btn btn-success">Simpan</button>
        <a href="{{ route('campuses.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
