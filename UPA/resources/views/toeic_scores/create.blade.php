@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Unggah PDF TOEIC</h2>
    <form action="{{ route('toeic-scores.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        {{-- Input File PDF --}}
        <div class="mb-3">
            <label for="pdf" class="form-label">Pilih File PDF</label>
            <input type="file" class="form-control" name="pdf" id="pdf" required>
            @error('pdf') 
                <small class="text-danger">{{ $message }}</small> 
            @enderror
        </div>

        {{-- Input Score --}}
        {{-- <div class="mb-3">
            <label for="score" class="form-label">Skor TOEIC</label>
            <input type="number" class="form-control" name="score" id="score" required min="0" max="990">
            @error('score') 
                <small class="text-danger">{{ $message }}</small> 
            @enderror
        </div> --}}

        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection
