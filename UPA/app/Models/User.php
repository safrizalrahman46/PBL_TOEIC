<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'user'; // <- sudah benar

    protected $fillable = [
        'username',
        'email',
        'password',
        'role_name',
        'role_description', // <== TAMBAHKAN INI
        'nim',
        'name',
        'nik',
        'phone',
        'origin_address',
        'current_address',
        'study_program_id',
        'major_id',
        'campus',
        'photo_path',
        'id_card_path',
        'student_card_path',
        'has_registered_free_toeic'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'has_registered_free_toeic' => 'boolean',
    ];

    public function studyProgram()
    {
        return $this->belongsTo(StudyProgram::class);
    }

    public function major()
    {
        return $this->belongsTo(Major::class);
    }
}
