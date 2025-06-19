@php
    $role = $role ?? Auth::user()->role; // pakai variabel dari @include atau fallback Auth

    // Mapping role ke label ucapan
    $roleLabel = match ($role) {
        'admin' => 'Admin',
        'student' => 'Student',
        'tendik', 'staff', 'educationStaff' => 'Staff',
        default => 'User',
    };

    // Opsional: deskripsi tambahan
    $roleDescription = match ($role) {
        'admin' => 'You have full access to the system.',
        'student' => 'You can register for TOEIC and track your progress.',
        'tendik', 'staff', 'educationStaff' => 'Staff can manage and view data.',
        default => 'General user access.',
    };
@endphp

<div class="rounded-4 p-4 mb-4" style="background: linear-gradient(90deg, #ffecd2 0%, #fcb69f 100%);">
    <h4 class="fw-bold text-dark mb-2">
        Hello {{ $roleLabel }} 👋
    </h4>

    <p class="mb-1 text-dark">
        Welcome back! {{ $roleDescription }}
    </p>

    {{-- Optional progress --}}
    {{-- <p class="mb-2 text-dark">
        You've completed <strong>{{ $progress ?? 0 }}%</strong> of your tasks.
    </p> --}}

    <div class="bg-white border rounded-3 p-3 shadow-sm mt-3" style="max-width: 450px;">
        <div class="fw-semibold text-dark mb-1">Role: {{ $roleLabel }}</div>
        <div class="text-muted small">{{ $roleDescription }}</div>
    </div>
</div>