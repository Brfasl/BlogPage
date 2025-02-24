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
    public function show($id)
    {
        $post = Post::findOrFail($id); // Post'u getir
        $descriptions = PostDescription::where('post_id', $id)->get(); // Post'un açıklamalarını al

        return view('posts.show', compact('post', 'descriptions'));
    }
}
