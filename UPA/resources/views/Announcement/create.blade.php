@extends('layouts.app')

@section('content')
<h4>Add Announcement</h4>

<form action="{{ route('admin.announcement.store') }}" method="POST">
    @csrf
    @include('admin.announcement.form')
    <button type="submit" class="btn btn-primary">Save</button>
    <a href="{{ route('admin.announcement.index') }}" class="btn btn-secondary">Back</a>
</form>
@endsection
