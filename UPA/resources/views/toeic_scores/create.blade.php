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

        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection
