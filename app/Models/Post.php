<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $fillable = ['text','user_id'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

