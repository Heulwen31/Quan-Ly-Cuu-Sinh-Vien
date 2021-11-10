<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Study_Detail extends Model
{
    use HasFactory;
    protected $fillable = [
        'student_id',
        'consultant',
        'cpa',
        'point_training',
        'course',
        'faculty',
    ];
    public $timestamps = false;
    protected $primaryKey = 'student_id';
}
