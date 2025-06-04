<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class m_user extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'user'; // Ensure this is correct for your table name

    protected $fillable = [
        'username',
        'nama',
        'nim',
        'nik',
        'email',
        'phone_number',
        'password',
        'role',
        'jurusan_id',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Relation with 'jurusan' (Major)
    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class);
    }
}
