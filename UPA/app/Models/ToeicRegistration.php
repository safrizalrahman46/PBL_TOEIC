<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ToeicRegistration extends Model
{
    protected $table = 'pendaftaran';

    protected $fillable = [
        'user_id',
        'tanggal_daftar',
        'status_verifikasi',
        // 'score',
        // 'certificate_path'
    ];

    public $timestamps = false;
}
