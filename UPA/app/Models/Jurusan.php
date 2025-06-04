<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;

    protected $table = 'jurusan';
    // protected $primaryKey = 'jurusan_id';

    protected $fillable = [
        'nama_jurusan',
        // add other fields as needed
    ];

    public function user()
    {
        return $this->hasMany(User::class);
    }
}
