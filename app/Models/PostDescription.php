<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PostDescription extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['post_id', 'description'];

    // Post ile ilişki tanımlaması
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
