<nav class="navbar bg-white px-4 shadow-sm">
    <div class="container-fluid justify-content-between">
        {{-- <input type="text" class="form-control w-50" placeholder="Search"> --}}

        <div class="d-flex align-items-center gap-3 ms-auto"> <!-- Menambahkan ms-auto untuk memindahkan elemen ke kanan -->
            <button class="btn btn-outline-secondary"><i class="bi bi-chat-left"></i></button>
            <button class="btn btn-outline-secondary"><i class="bi bi-bell"></i></button>
            
            <div class="d-flex align-items-center">
                @if (auth()->check())
                    <img src="{{ Storage::url(auth()->user()->photo_path ?? 'public/default-avatar.jpg') }}"
                        class="rounded-circle me-2" alt="foto" width="30" height="30">
                    <span>Hi, {{ auth()->user()->name }}</span>
                @else
                    <img src="https://via.placeholder.com/30" class="rounded-circle me-2" alt="foto" width="30" height="30">
                    <span>Hi, Guest</span>
                @endif
            </div>
        </div>
    </div>
</nav>
