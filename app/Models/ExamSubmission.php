<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamSubmission extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'user_id',
        'quiz_id',
        'answered_text',
        'is_correct',
        'obtained_marks',
    ];
}