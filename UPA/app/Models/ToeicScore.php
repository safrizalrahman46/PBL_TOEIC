<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ToeicScore extends Model
{
    protected $table = 'toeic_scores';

    protected $fillable = [
        'user_id', 'test_type', 'score', 'passed', 'test_date',
        'certificate_path', 'request_letter_path'
    ];

    public function user()
    {
        return $this->belongsTo(m_user::class, 'user_id');
    }
}
