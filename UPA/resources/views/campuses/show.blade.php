@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Kampus</h1>
    <p><strong>Nama:</strong> {{ $campus->name }}</p>
    <a href="{{ route('campuses.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection
