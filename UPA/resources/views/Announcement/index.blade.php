@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h4>Announcements</h4>
    <a href="{{ route('announcement.create') }}" class="btn btn-success">+ Add Announcement</a>
</div>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<div class="table-responsive">
    <table class="table table-bordered bg-white shadow-sm">
        <thead>
            <tr>
                <th>No</th>
                <th>Title</th>
                <th>Type</th>
                <th>Target</th>
                <th>Event Date</th>
                <th>Pickup Cert.</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($announcements as $index => $a)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $a->title }}</td>
                <td>{{ ucfirst(str_replace('_', ' ', $a->type)) }}</td>
                <td>{{ ucfirst($a->target_audience) }}</td>
                <td>{{ $a->event_date ? $a->event_date->format('Y-m-d') : '-' }}</td>
                <td>{{ $a->pickup_certificate ? $a->pickup_certificate->format('Y-m-d') : '-' }}</td>
                <td>
                    <a href="{{ route('announcement.edit', $a->id) }}" class="btn btn-sm btn-light"><i class="bi bi-pencil"></i></a>
                    <form action="{{ route('announcement.destroy', $a->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this?')">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-light"><i class="bi bi-trash"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
