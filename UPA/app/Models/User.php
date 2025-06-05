<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail // If email verification is required
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'user'; // Ensure the table name is correct
    protected $primary_Key = 'user_id';
    // Define the fields that are mass assignable
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

    // Define fields that should be hidden (e.g., for security reasons)
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Cast attributes to specific types
    protected $casts = [
        'email_verified_at' => 'datetime', // Casting email_verified_at to a DateTime
    ];

    // Define relationships
    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class, 'jurusan_id');
    }

    public function announcements()
    {
        return $this->hasMany(announcementModel::class, 'created_by');
    }
}
