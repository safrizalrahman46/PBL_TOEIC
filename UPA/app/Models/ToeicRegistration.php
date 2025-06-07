<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ToeicRegistration extends Model
{
    use HasFactory;

    protected $table = 'toeic_registration'; // Pastikan nama tabel sesuai

    // Kolom yang dapat diisi
    protected $fillable = [
        'nim',
        'status',
        'registration_date',
        'score',
        'certificate_path', // Kolom yang diizinkan diisi
    ];

    // Menyembunyikan kolom tertentu
    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    // Add this to cast 'registration_date' to a Carbon instance
    protected $casts = [
        'registration_date' => 'date',  // Automatically cast registration_date to a Carbon instance
    ];
    // Menambahkan enum secara manual untuk status
    const STATUS_FREE = 'free';
    const STATUS_PAID = 'paid';

    // Menggunakan accessor untuk mendapatkan status dalam format lebih friendly
    public function getStatusLabelAttribute()
    {
        switch ($this->status) {
            case self::STATUS_FREE:
                return 'Free Registration';
            case self::STATUS_PAID:
                return 'Paid Registration';
            default:
                return 'Unknown';
        }
    }
}
