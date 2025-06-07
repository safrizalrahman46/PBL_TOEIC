<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ToeicRegistration;

class FreeRegistController extends Controller
{
    // Show the index page if registration exists, or redirect to create if not

    public function index()
    {
        // Ensure the user is authenticated
        if (Auth::check()) {
            $user = Auth::user(); // Get the authenticated user

            // Ensure nim exists for the user
            if (isset($user->nim)) {
                $nim = $user->nim;

                // Check if the user has a registration in the ToeicRegistration table
                $registration = ToeicRegistration::where('nim', $nim)->first();

                if ($registration) {
                    // If registration exists, show the index page with the user's registration details
                    return view('freeregist.index', compact('registration', 'nim'));
                } else {
                    // If no registration exists, redirect to the create page to fill out the form
                    return redirect()->route('freeRegist.create')->with('message', 'Please complete your registration.');
                }
            } else {
                // Handle the case where nim is not set for the authenticated user
                return redirect()->route('login')->with('error', 'User does not have a valid NIM.');
            }
        } else {
            // Redirect to login page if the user is not authenticated
            return redirect()->route('login');
        }
    }


    // Show the create registration form
    public function create()
    {
        return view('freeregist.create');
    }

    // Store the registration data
    public function store(Request $request)
    {
        $user = Auth::user();
        $nim = $user->nim;

        // Validate the input
        $validated = $request->validate([
            'status' => 'required|in:free,paid,pending,approved,rejected',
            'certificate_path' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:1024',
            'ktp_path' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:1024',
        ]);

        // Handle file uploads
        $certificate_path = $request->file('certificate_path') ? $request->file('certificate_path')->store('certificates') : null;
        $ktp_path = $request->file('ktp_path') ? $request->file('ktp_path')->store('ktps') : null;

        // Create a new registration record for the user
        ToeicRegistration::create([
            'nim' => $nim,
            'status' => $validated['status'],
            'registration_date' => now(),
            'certificate_path' => $certificate_path,
            'ktp_path' => $ktp_path,
        ]);

        // Redirect after successfully storing the registration
        return redirect()->route('freeRegist.index')->with('success', 'Registration successful!');
    }
}
