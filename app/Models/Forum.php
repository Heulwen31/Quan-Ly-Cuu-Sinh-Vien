<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    use HasFactory;

    protected $table = 'forum';

    protected $fillable = [
        'id',
        'content',
        'time',
        'id_author',
        'title',
        'username',
        'userpath'
    ];
    
    public $timestamps = false;
    protected $primaryKey = 'id';
}
