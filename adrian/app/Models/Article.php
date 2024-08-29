<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    // Corrected $fillable property
    protected $fillable = ['id', 'title', 'body', 'created_at', 'updated_at'];
}
