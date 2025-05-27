@extends('layouts.app')

@section('content')
<h4>Edit Announcement</h4>

<form action="{{ route('admin.announcement.update', $announcement->id) }}" method="POST">
    @csrf @method('PUT')
    @include('admin.announcement.form', ['announcement' => $announcement])
    <button type="submit" class="btn btn-primary">Update</button>
    <a href="{{ route('admin.announcement.index') }}" class="btn btn-secondary">Back</a>
</form>
@endsection
