<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Models\Announcement;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
  public function index()
{
    // Total pengumuman
    $totalAnnouncements = Announcement::count();

    // Pengumuman berdasarkan tipe
    $typeCounts = Announcement::select('type', DB::raw('count(*) as total'))
        ->groupBy('type')
        ->pluck('total', 'type')
        ->toArray();

    // Pengumuman bulan ini
    $monthlyAnnouncements = Announcement::whereMonth('created_at', Carbon::now()->month)->count();

    // Kirim data ke view
    return view('dashboard.index', compact('totalAnnouncements', 'typeCounts', 'monthlyAnnouncements'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
