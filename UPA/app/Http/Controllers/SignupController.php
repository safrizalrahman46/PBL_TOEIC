<?php

namespace App\Http\Controllers;

use App\Models\m_user;
use App\Models\StudyProgram;
use App\Models\Major;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class SignupController extends Controller
{
    public function index()
    {
        return view('auth.signup', [
            'studyPrograms' => StudyProgram::all(),
            'majors' => Major::all(),
        ]);
    }

    public function store(Request $request)
    {
        $request->validate(array_merge([
            'username' => 'required|string|max:50|unique:user,username',
            'email' => 'required|string|email|max:100|unique:user,email',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'role_name' => 'required|in:student,admin,educational_staff',
        ], $request->role_name !== 'admin' ? [
            'name' => 'required|string|max:100',
            'nim' => 'required|string|max:20|unique:user,nim',
            'nik' => 'required|string|max:20|unique:user,nik',
            'phone' => 'required|string|max:15',
            'origin_address' => 'required|string',
            'current_address' => 'required|string',
            'study_program_id' => 'required|integer|exists:study_programs,id',
            'major_id' => 'required|integer|exists:majors,id',
            'campus' => 'required|in:Main,PSDKU Kediri,PSDKU Lumajang,PSDKU Pamekasan',
        ] : []));




        m_user::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_name' => $request->role_name,
            'role_description' => match ($request->role_name) {
                'student' => 'Regular student user',
                'admin' => 'System administrator',
                'educational_staff' => 'Educational staff member',
            },
            'name' => $request->name ?? '-',
            'nim' => $request->nim ?? '-',
            'nik' => $request->nik ?? '-',
            'phone' => $request->phone ?? '-',
            'origin_address' => $request->origin_address ?? '-',
            'current_address' => $request->current_address ?? '-',
            'study_program_id' => $request->study_program_id ?? 1, // fallback ID 1 jika kosong
            'major_id' => $request->major_id ?? 1,
            'campus' => $request->campus ?? 'Main',
            'has_registered_free_toeic' => false,
        ]);


        // Optionally log the user in
        // auth()->login($user);

        // return redirect()->route('dashboard')->with('success', 'Registration successful!');
        return redirect()->route('login')->with('success', 'Registration successful. Please log in.');
    }
}
