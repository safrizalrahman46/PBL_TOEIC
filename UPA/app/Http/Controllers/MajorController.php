<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use App\Models\Major;
use Illuminate\Http\Request;

class MajorController extends Controller
{
    public function index()
    {
        $majors = Jurusan::all();
        return view('majors.index', compact('majors'));
    }

    public function create()
    {
        return view('majors.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'nullable|string|max:50',
        ]);
        Jurusan::create($request->only('name'));
        return redirect()->route('majors.index')->with('success', 'Major created successfully.');
    }

    public function edit(Jurusan $major)
    {
        return view('majors.edit', compact('major'));
    }

    public function update(Request $request, Jurusan $major)
    {
        $request->validate(['name' => 'required|string|max:255']);
        $major->update($request->only('name'));
        return redirect()->route('majors.index')->with('success', 'Major updated successfully.');
    }

    public function destroy(Jurusan $major)
    {
        $major->delete();
        return redirect()->route('majors.index')->with('success', 'Major deleted.');
    }
}
