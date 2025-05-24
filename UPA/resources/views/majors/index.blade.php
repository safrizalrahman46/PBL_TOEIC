@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h4>Majors</h4>
    <a href="{{ route('majors.create') }}" class="btn btn-success">+ Add Major</a>
</div>
<table class="table table-bordered bg-white shadow-sm">
    <thead>
        <tr>
            <th>No</th>
            <th>Major Name</th>
            <th>Major Code</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($majors as $index => $major)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $major->name }}</td>
            <td>{{ $major->code ?? '-' }}</td>
            <td>
                <a href="{{ route('majors.edit', $major) }}" class="btn btn-sm btn-light"><i class="bi bi-pencil"></i></a>
                <form action="{{ route('majors.destroy', $major) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this major?')">
                    @csrf @method('DELETE')
                    <button class="btn btn-sm btn-light"><i class="bi bi-trash"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
