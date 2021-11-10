<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'cccd', 
        'name', 
        'sex', 
        'email', 
        'birth',
        'phone', 
        'address', 
        'job',
    ];

    public $timestamps = false;

    public function study()
    {
        return $this->hasOne('App\Models\Study_Detail');
    }
}
