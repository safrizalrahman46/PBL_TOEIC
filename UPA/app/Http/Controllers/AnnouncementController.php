<?php

namespace App\Http\Controllers;

use App\Models\announcementModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnnouncementController extends Controller
{
    public function index()
    {
        $announcement = announcementModel::with('creator')->latest('tanggal')->get();
        return view('announcement.index', compact('announcement'));
    }

    public function create()
    {
        return view('announcement.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|max:150',
            'isi' => 'required',
            'tanggal' => 'required|date',
        ]);

        if (auth()->check()) {
            // If the user is authenticated, proceed to store the announcement
            announcementModel::create([
                'judul' => $request->judul,
                'isi' => $request->isi,
                'tanggal' => $request->tanggal,
                'created_by' => Auth::id(),
            ]);
        } else {
            // Handle the case where the user is not authenticated
            return redirect()->route('login')->with('error', 'You must be logged in to create an announcement.');
        }

        return redirect()->route('announcement.index')->with('success', 'announcement berhasil dibuat.');
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

        return redirect()->route('announcement.index')->with('success', 'announcement berhasil diperbarui.');
    }

    public function destroy($id)
    {
        announcementModel::findOrFail($id)->delete();
        return back()->with('success', 'announcement berhasil dihapus.');
    }
}
