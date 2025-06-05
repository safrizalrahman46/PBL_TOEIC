<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\StudyProgram;
use App\Models\Major;
use Illuminate\Support\Facades\Storage;

class StudentUserController extends Controller
{
    public function index()
    {
        $students = User::where('role', 'student')->with(['jurusan'])->get();
        return view('students.index', compact('students'));
    }

    public function create()
    {
        $studyPrograms = StudyProgram::all();
        $majors = Jurusan::all();
        return view('students.create', compact('studyPrograms', 'majors'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|unique:user',
            'password' => 'required|min:6',
            'email' => 'required|email|unique:user',
            'nim' => 'required',
            'name' => 'required',
            'nik' => 'required',
            'phone' => 'required',
            'origin_address' => 'required',
            'study_program_id' => 'nullable|integer|exists:study_programs,id',
            'major_id' => 'nullable|integer|exists:majors,id',
            'campus' => 'nullable|in:Main,PSDKU Kediri,PSDKU Lumajang,PSDKU Pamekasan',
            'photo_path' => 'nullable|file|mimes:jpg,jpeg,png|max:2048',
            'id_card_path' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
            'student_card_path' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
            'status' => 'nullable|in:pending,approved,rejected',
            'rejection_reason' => 'nullable|string|max:255',
        ]);


        // Cek apakah sudah pernah daftar dengan NIM yang sama
        if (User::where('nim', $request->nim)->where('has_registered_free_toeic', true)->exists()) {
            return back()->withErrors(['nim' => 'NIM ini sudah pernah didaftarkan untuk Free TOEIC.'])->withInput();
        }

        if ($request->hasFile('photo_path')) {
            $validated['photo_path'] = $request->file('photo_path')->store('photos');
        }

        if ($request->hasFile('id_card_path')) {
            $validated['id_card_path'] = $request->file('id_card_path')->store('id_cards');
        }

        if ($request->hasFile('student_card_path')) {
            $validated['student_card_path'] = $request->file('student_card_path')->store('student_cards');
        }

        $validated['password'] = bcrypt($request->password);
        $validated['role_name'] = 'student';
        $validated['status'] = $validated['status'] ?? 'pending';

        User::create($validated);

        return redirect()->route('students.index')->with('success', 'Student created successfully.');
    }

    public function show($id)
    {
        $student = User::where('role_name', 'student')->with(['studyProgram', 'major'])->findOrFail($id);
        return view('students.show', compact('student'));
    }

    public function edit($id)
    {
        $student = User::where('role_name', 'student')->findOrFail($id);
        $studyPrograms = StudyProgram::all();
        $majors = Major::all();
        return view('students.edit', compact('student', 'studyPrograms', 'majors'));
    }

    public function update(Request $request, $id)
    {
        $student = User::where('role_name', 'student')->findOrFail($id);

        $validated = $request->validate([
            'username' => 'required|unique:user,username,' . $student->id,
            'email' => 'required|email|unique:user,email,' . $student->id,
            'nim' => 'required',
            'name' => 'required',
            'nik' => 'required',
            'phone' => 'required',
            'origin_address' => 'required',
            'study_program_id' => 'nullable|integer|exists:study_programs,id',
            'major_id' => 'nullable|integer|exists:majors,id',
            'campus' => 'nullable|in:Main,PSDKU Kediri,PSDKU Lumajang,PSDKU Pamekasan',
            'photo_path' => 'nullable|file|mimes:jpg,jpeg,png|max:2048',
            'id_card_path' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
            'student_card_path' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
            'status' => 'nullable|in:pending,approved,rejected',
            'rejection_reason' => 'nullable|string|max:255',
        ]);


        // Cek apakah sudah pernah daftar dengan NIM yang sama
        if (User::where('nim', $request->nim)->where('has_registered_free_toeic', true)->exists()) {
            return back()->withErrors(['nim' => 'NIM ini sudah pernah didaftarkan untuk Free TOEIC.'])->withInput();
        }

        if ($request->hasFile('photo_path')) {
            Storage::delete($student->photo_path);
            $validated['photo_path'] = $request->file('photo_path')->store('photos');
        }

        if ($request->hasFile('id_card_path')) {
            Storage::delete($student->id_card_path);
            $validated['id_card_path'] = $request->file('id_card_path')->store('id_cards');
        }

        if ($request->hasFile('student_card_path')) {
            Storage::delete($student->student_card_path);
            $validated['student_card_path'] = $request->file('student_card_path')->store('student_cards');
        }

        // Jika status = approved, pastikan rejection_reason kosong
        if ($request->status === 'approved') {
            $validated['rejection_reason'] = null;
        }

        // Jika status = rejected, pastikan ada alasan
        if ($request->status === 'rejected' && empty($request->rejection_reason)) {
            return back()->withErrors(['rejection_reason' => 'Rejection reason is required when status is rejected.'])->withInput();
        }

        $student->update($validated);

        return redirect()->route('students.index')->with('success', 'Student updated successfully.');
    }

    public function destroy($id)
    {
        $student = User::where('role_name', 'student')->findOrFail($id);
        Storage::delete([
            $student->photo_path,
            $student->id_card_path,
            $student->student_card_path
        ]);
        $student->delete();

        return redirect()->route('students.index')->with('success', 'Student deleted successfully.');
    }
}
