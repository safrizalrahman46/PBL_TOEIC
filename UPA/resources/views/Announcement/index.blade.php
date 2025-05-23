@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h4>Announcements</h4>
    <a href="{{ route('announcements.create') }}" class="btn btn-success">+ Create New</a>
</div>

<div class="input-group mb-3">
    <input type="text" class="form-control" placeholder="Search">
    <button class="btn btn-outline-secondary">Filter</button>
    <button class="btn btn-outline-secondary">Sort By</button>
</div>

<table class="table table-bordered bg-white shadow-sm">
    <thead>
        <tr>
            <th>No</th>
            <th>Title</th>
            <th>Type</th>
            <th>Audience</th>
            <th>Event Date</th>
            <th>Pickup Certificate</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($announcements as $index => $announcement)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $announcement->title }}</td>
            <td><span class="badge bg-primary">{{ ucfirst(str_replace('_', ' ', $announcement->type)) }}</span></td>
            <td><span class="badge bg-secondary">{{ ucfirst($announcement->target_audience) }}</span></td>
            <td>{{ $announcement->event_date ? $announcement->event_date->format('d/m/Y') : '-' }}</td>
            <td>{{ $announcement->pickup_certificate ? $announcement->pickup_certificate->format('d/m/Y') : '-' }}</td>
            <td>
                <a href="{{ route('announcements.show', $announcement->id) }}" class="btn btn-sm btn-light"><i class="bi bi-eye"></i></a>
                <a href="{{ route('announcements.edit', $announcement->id) }}" class="btn btn-sm btn-light"><i class="bi bi-pencil"></i></a>
                <form action="{{ route('announcements.destroy', $announcement->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-light" onclick="return confirm('Are you sure?')"><i class="bi bi-trash"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
