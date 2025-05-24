<?php

namespace App\Http\Controllers;

use App\Models\StudyProgram;
use Illuminate\Http\Request;

class StudyProgramController extends Controller
{
    public function index()
    {
        $programs = StudyProgram::all();
        return view('study-programs.index', compact('programs'));
    }

    public function create()
    {
        return view('study-programs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'code' => 'nullable|string|max:20',
        ]);

        StudyProgram::create($request->all());

        return redirect()->route('study-programs.index')->with('success', 'Study program created successfully.');
    }

    public function edit(StudyProgram $studyProgram)
    {
        return view('study-programs.edit', compact('studyProgram'));
    }

    public function update(Request $request, StudyProgram $studyProgram)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'code' => 'nullable|string|max:20',
        ]);

        $studyProgram->update($request->all());

        return redirect()->route('study-programs.index')->with('success', 'Study program updated.');
    }

    public function destroy(StudyProgram $studyProgram)
    {
        $studyProgram->delete();
        return redirect()->route('study-programs.index')->with('success', 'Study program deleted.');
    }
}
