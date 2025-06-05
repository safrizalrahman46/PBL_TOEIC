<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ToeicRegistration;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class ToeicRegistrationController extends Controller
{
    public function index()
    {
        // Fetch all registrations ordered by registration date in descending order
        $registrations = ToeicRegistration::orderBy('tanggal_daftar', 'desc')->get();
        return view('toeic_registration.index', compact('registrations'));
    }

    public function create()
    {
        return view('toeic_registration.create');
    }

    public function store(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'nim' => 'required|string|max:20', // Validate nim input
        ]);

        // Create a new Toeic registration
        $registration = ToeicRegistration::create([
            'user_id' => Auth::id(), // Associate with the authenticated user
            'nim' => $request->nim, // Store the nim
            'status_verifikasi' => 'valid', // Set initial status to 'valid'
            'tanggal_daftar' => Carbon::now()->toDateString(), // Store the current date
        ]);

        // Redirect to the success page
        return redirect()->route('toeic-registration.success', $registration->pendaftaran_id);
    }

    public function success($id)
    {
        // Fetch the registration by its ID
        $registration = ToeicRegistration::findOrFail($id);
        return view('toeic_registration.success', compact('registration'));
    }
}
