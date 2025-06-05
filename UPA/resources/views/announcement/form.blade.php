@php
    $a = $pengumuman ?? null; // Menggunakan $pengumuman sesuai controller
@endphp

<div class="mb-3">
    <label>Title</label>
    <input type="text" name="judul" class="form-control" value="{{ old('judul', $a->judul ?? '') }}" required>
</div>

<div class="mb-3">
    <label>Content</label>
    <textarea name="isi" class="form-control" rows="5" required>{{ old('isi', $a->isi ?? '') }}</textarea>
</div>

<div class="mb-3">
    <label>Event Date</label>
    <input type="date" name="tanggal" class="form-control" id="event_date"
        value="{{ old('tanggal', isset($a->tanggal) ? $a->tanggal->format('Y-m-d') : '') }}" required>
</div>

<!-- Menambahkan kolom created_by secara otomatis di controller -->
<!-- Kolom 'type', 'target_audience', dan 'pickup_certificate' telah dihapus karena tidak ada di database -->
