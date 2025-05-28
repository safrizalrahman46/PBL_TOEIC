@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detail TOEIC PDF</h2>
    <p><strong>ID:</strong> {{ $toeicScore->id }}</p>
    <p><strong>Dibuat pada:</strong> {{ $toeicScore->created_at }}</p>
    <embed src="{{ asset('storage/' . $toeicScore->picture) }}" type="application/pdf" width="100%" height="600px"/>
    <br><a href="{{ route('toeic-scores.index') }}" class="btn btn-secondary mt-3">Kembali</a>
</div>
@endsection
