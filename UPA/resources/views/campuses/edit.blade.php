@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Kampus</h1>

    <form action="{{ route('campuses.update', $campus->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Nama Kampus</label>
            <input type="text" name="name" class="form-control" value="{{ $campus->name }}" required>
        </div>
        <button class="btn btn-primary">Update</button>
        <a href="{{ route('campuses.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
