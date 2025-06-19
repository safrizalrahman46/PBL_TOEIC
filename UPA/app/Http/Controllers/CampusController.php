<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Campus;

class CampusController extends Controller
{
    public function index()
    {
        $campuses = Campus::all();
        return view('campuses.index', compact('campuses'));
    }

    public function create()
    {
        return view('campuses.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255'
        ]);

        Campus::create($request->all());

        return redirect()->route('campuses.index')->with('success', 'Kampus berhasil ditambahkan.');
    }

    public function show($id)
    {
        $campus = Campus::findOrFail($id);
        return view('campuses.show', compact('campus'));
    }

    public function edit($id)
    {
        $campus = Campus::findOrFail($id);
        return view('campuses.edit', compact('campus'));
    }

    public function update(Request $request, $id)
    {
        $campus = Campus::findOrFail($id);
        $campus->update($request->all());

        return redirect()->route('campuses.index')->with('success', 'Kampus berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $campus = Campus::findOrFail($id);
        $campus->delete();

        return redirect()->route('campuses.index')->with('success', 'Kampus berhasil dihapus.');
    }
}
