<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Study_Detail extends Model
{
    use HasFactory;
    
    public $timestamps = false;
    protected $primaryKey = 'student_id';
}
