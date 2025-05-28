@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit TOEIC PDF</h2>
    <form action="{{ route('toeic-scores.update', $toeicScore->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>File Sekarang:</label><br>
            <a href="{{ asset('storage/' . $toeicScore->picture) }}" target="_blank">Lihat PDF</a>
        </div>
        <div class="form-group">
            <label for="picture">Ganti File (opsional):</label>
            <input type="file" name="picture" class="form-control">
        </div>
        <button class="btn btn-primary mt-2">Simpan</button>
    </form>
</div>
@endsection
