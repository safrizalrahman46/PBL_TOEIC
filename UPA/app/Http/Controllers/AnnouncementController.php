<?php

namespace App\Http\Controllers;

use App\Models\announcementModel;
use App\Models\ToeicRegistration;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnnouncementController extends Controller
{
    // // Konstruktor untuk menambahkan middleware 'auth'
    // public function __construct()
    // {
    //     $this->middleware('auth'); // Hanya pengguna yang terautentikasi yang bisa mengakses halaman ini
    // }

    public function index()
    {
        // if (!auth()->check()) {
        //     return redirect()->route('login'); // Pastikan untuk mengarahkan pengguna yang belum login ke halaman login
        // }

        $announcement = announcementModel::with('creator')->latest('tanggal')->get();
        return view('announcement.index', compact('announcement'));
    }


    public function create()
    {
        // Mengambil semua pengguna untuk dropdown
        $users = User::all(); // Ambil semua data pengguna dari tabel users

        // Mengirim data $users ke view
        return view('announcement.create', compact('users'));
    }

    public function store(Request $request)
    {
        // Validasi data
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
            'tanggal' => 'required|date',
            'user_id' => 'required|exists:users,id', // Validasi untuk user_id
        ]);

        // Menyimpan data pengumuman
        $pengumuman = new announcementModel();
        $pengumuman->judul = $validated['judul'];
        $pengumuman->isi = $validated['isi'];
        $pengumuman->tanggal = $validated['tanggal'];
        $pengumuman->user_id = $validated['user_id']; // Menyimpan user_id
        $pengumuman->created_by = auth()->user()->id; // Mengatur siapa yang membuat
        $pengumuman->save();

        // Redirect ke daftar pengumuman
        return redirect()->route('announcement.index')->with('success', 'Pengumuman berhasil disimpan!');
    }



    public function edit($id)
    {
        $announcement = announcementModel::findOrFail($id);
        return view('announcement.edit', compact('announcement'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|max:150',
            'isi' => 'required',
            'tanggal' => 'required|date',
        ]);

        $announcement = announcementModel::findOrFail($id);
        $announcement->update([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'tanggal' => $request->tanggal,
        ]);

        return redirect()->route('announcement.index')->with('success', 'Announcement berhasil diperbarui.');
    }

    public function destroy($id)
    {
        announcementModel::findOrFail($id)->delete();
        return back()->with('success', 'Announcement berhasil dihapus.');
    }
}
