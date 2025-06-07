@php
    // Menggunakan data $pengumuman jika ada, jika tidak maka null
    $a = $announcement ?? null;
@endphp

<div class="mb-3">
    <label for="judul">Title</label>
    <input type="text" id="judul" name="judul" class="form-control" value="{{ old('judul', $a->judul ?? '') }}" required>
</div>

<div class="mb-3">
    <label for="isi">Content</label>
    <textarea name="isi" id="isi" class="form-control" rows="5" required>{{ old('isi', $a->isi ?? '') }}</textarea>
</div>

<div class="mb-3">
    <label for="event_date">Event Date</label>
    <input type="date" name="tanggal" id="event_date" class="form-control"
        value="{{ old('tanggal', isset($a->tanggal) ? $a->tanggal->format('Y-m-d') : '') }}" required>
</div>

<!-- Dropdown untuk memilih User -->
<div class="mb-3">
    <label for="user_id">User</label>
    <select name="user_id" id="user_id" class="form-control" required>
        <option value="" disabled selected>Select User</option>
        @foreach($users as $user)
            <option value="{{ $user->id }}" {{ old('user_id', $a->user_id ?? '') == $user->id ? 'selected' : '' }}>
                {{ $user->name }} {{ $user->username }}
            </option>
        @endforeach
    </select>
</div>

<input type="hidden" name="created_by" value="{{ auth()->check() ? auth()->user()->id : 2 }}">

<!-- Hanya menampilkan kolom pengumuman_id jika ada -->
@if ($a)
    <input type="hidden" name="pengumuman_id" value="{{ old('pengumuman_id', $a->pengumuman_id ?? '') }}">
@endif

{{-- <div class="mb-3">
    <label for="pickup_certificate">Pickup Certificate</label>
    <input type="checkbox" name="pickup_certificate" id="pickup_certificate" value="1"
        {{ old('pickup_certificate', $a->pickup_certificate ?? false) ? 'checked' : '' }}>
</div> --}}
