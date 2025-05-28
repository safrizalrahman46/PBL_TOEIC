@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Unggah TOEIC PDF</h2>
    <form action="{{ route('toeic-scores.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="picture">Pilih File PDF:</label>
            <input type="file" name="picture" class="form-control" required>
        </div>
        <button class="btn btn-success mt-2">Unggah</button>
    </form>
</div>
@endsection
