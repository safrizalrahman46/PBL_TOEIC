<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        // Data kartu
        $totalRegistrations = DB::table('pendaftaran')->count();
        $paidRegistrations = DB::table('pendaftaran')->where('status_verifikasi', 1)->count(); // Menghitung pendaftaran yang terverifikasi
        // $certUploaded = DB::table('pendaftaran')->whereNotNull('certificate_path')->count(); // Jika ada kolom certificate_path

        // Data tabel
        $registrations = DB::table('pendaftaran')->get();

        // Data grafik bulanan
        $monthlyData = DB::table('pendaftaran')
            ->selectRaw('MONTH(tanggal_daftar) as month, COUNT(*) as total')
            ->groupBy('month')
            ->pluck('total', 'month')
            ->toArray();

        // Buat array 12 bulan
        $monthlyCounts = [];
        for ($i = 1; $i <= 12; $i++) {
            $monthlyCounts[] = $monthlyData[$i] ?? 0;
        }

        return view('dashboard.index', compact(
            'totalRegistrations',
            'paidRegistrations',
            // 'certUploaded', // Uncomment if needed
            'registrations',
            'monthlyCounts'
        ));
    }
}
