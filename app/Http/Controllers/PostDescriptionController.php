<?php

namespace App\Http\Controllers;

use App\Models\PostDescription; // PostDescription Model
use App\Models\Post; // Post Model (Eğer gerekliyse Post modelini de dahil edin)
use Illuminate\Http\Request;

class PostDescriptionController extends Controller
{
    // Tüm açıklamaları listelemek
    public function index()
    {
        // Veritabanından tüm açıklamaları alın
        $descriptions = PostDescription::all();

        // descriptions verisini index view'ına gönder
        return view('posts.show')->with('descriptions', $descriptions);
    }

    // Açıklamayı düzenlemek için
    public function edit(PostDescription $postDescription)
    {
        // Eğer Post'lar ile ilişki varsa
        $posts = Post::all();
        return view('descriptions.edit', compact('postDescription', 'posts'));
    }

    // Açıklamayı güncellemek
    public function update(Request $request, PostDescription $postDescription)
    {
        // Validation (doğrulama)
        $request->validate([
            'post_id' => 'required|exists:posts,id',
            'descriptions' => 'required|string'
        ]);

        // Veriyi güncelle
        $postDescription->update($request->all());

        return redirect()->route('descriptions.index')->with('success', 'Açıklama başarıyla güncellendi.');
    }

    // Yeni açıklama eklemek için
    public function create()
    {
        // Post'ları al ve create view'a gönder
        $posts = Post::all();
        return view('descriptions.create', compact('posts'));
    }

    // Yeni açıklamayı veritabanına kaydetmek
    public function store(Request $request)
    {
        // Validation (doğrulama)
        $request->validate([
            'post_id' => 'required|exists:posts,id',
            'description' => 'required|string'
        ]);

        // Yeni açıklamayı veritabanına ekle
        PostDescription::create($request->all());

        return redirect()->route('descriptions.index')->with('success', 'Açıklama başarıyla eklendi.');
    }
}
