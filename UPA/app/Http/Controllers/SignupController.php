<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use App\Models\StudyProgram;
use App\Models\Major;
use Inertia\Inertia;


class SignupController extends Controller
{
    public function index()
    {
        return Inertia::render('Auth/Signup', [
            'studyPrograms' => StudyProgram::all(),
            'majors' => Major::all()
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:50|unique:user,username',
            'email' => 'required|string|email|max:100|unique:user,email',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'name' => 'required|string|max:100',
            'nim' => 'required|string|max:20|unique:user,nim',
            'nik' => 'required|string|max:20|unique:user,nik',
            'phone' => 'required|string|max:15',
            'origin_address' => 'required|string',
            'current_address' => 'required|string',
            'study_program_id' => 'required|integer|exists:study_programs,id',
            'major_id' => 'required|integer|exists:majors,id',
            'campus' => 'required|in:Main,PSDKU Kediri,PSDKU Lumajang,PSDKU Pamekasan',
        ]);


        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_name' => 'student',
            'role_description' => 'Regular student user',
            'nim' => $request->nim,
            'name' => $request->name,
            'nik' => $request->nik,
            'phone' => $request->phone,
            'origin_address' => $request->origin_address,
            'current_address' => $request->current_address,
            'study_program_id' => $request->study_program_id,
            'major_id' => $request->major_id,
            'campus' => $request->campus,
            'has_registered_free_toeic' => false,
        ]);

        // You might want to log the user in here
        // auth()->login($user);

        return redirect()->route('dashboard')->with('success', 'Registration successful!');
    }
}
