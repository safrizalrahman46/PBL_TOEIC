<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class m_user extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'user'; // gunakan nama tabel yang sesuai

    protected $fillable = [
        'username',
        'email',
        'password',
        'role_name',
        'role_description',
        'nim',
        'name',
        'nik',
        'phone',
        'origin_address',
        'current_address',
        'study_program_id',
        'major_id',
        'campus',
        'has_registered_free_toeic',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'has_registered_free_toeic' => 'boolean',
    ];

    // app/Models/m_user.php
    public function studyProgram()
    {
        return $this->belongsTo(StudyProgram::class, 'study_program_id');
    }

    public function major()
    {
        return $this->belongsTo(Major::class, 'major_id');
    }
    public function toeicScores()
    {
        return $this->hasMany(ToeicScore::class, 'user_id');
    }
}
