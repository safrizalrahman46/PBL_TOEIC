<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use App\Models\m_user;
use App\Models\User; // changed model name to User for consistency
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class SignupController extends Controller
{
    public function index()
    {
        return view('auth.signup', [
            'majors' => Jurusan::all(),
        ]);
    }

public function store(Request $request)
{
    // Base validation rules
    $baseRules = [
        'username' => 'required|string|max:50|unique:user,username',
        'email' => 'required|string|email|max:100|unique:user,email',
        'password' => ['required', 'confirmed', Rules\Password::defaults()],
        'role' => 'required|in:student,admin,educational_staff',
    ];

    $additionalRules = [];

    // Add additional rules based on the selected role
    if ($request->role === 'student') {
        $additionalRules = [
            'name' => 'required|string|max:100',
            'nim' => 'required|string|max:20|unique:user,nim',
            'nik' => 'required|string|max:20|unique:user,nik',
            'phone_number' => 'required|string|max:15',
            'jurusan_id' => 'required|integer|exists:jurusan,jurusan_id',
        ];
    } elseif ($request->role === 'educational_staff') {
        $additionalRules = [
            'name' => 'required|string|max:100',
            'nik' => 'required|string|max:20|unique:user,nik',
            'phone_number' => 'required|string|max:15',
        ];
    }

    // Validate the request
    $request->validate(array_merge($baseRules, $additionalRules));

    // Save the new user to the database
    User::create([
        'username' => $request->username,
        'nama' => $request->name ?? '-',
        'nim' => $request->nim ?? '-',
        'nik' => $request->nik ?? '-',
        'email' => $request->email,
        'phone_number' => $request->phone_number ?? '-',
        'password' => Hash::make($request->password),
        'role' => $request->role,
        'jurusan_id' => $request->role === 'student' ? $request->jurusan_id : null,
    ]);

    return redirect()->route('login')->with('success', 'Registration successful. Please log in.');
}

}
