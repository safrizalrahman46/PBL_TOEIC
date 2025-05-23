<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudyProgram extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'code',
        // add other fields as needed
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
