<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Method untuk menampilkan Halaman Home
    public function index()
    {
        $posts = Post::query()
            ->whereNotNull('published_at') // Hanya tampilkan post yang sudah di-publish
            ->latest('published_at') // Urutkan dari yang terbaru
            ->paginate(10); // Tampilkan 10 post per halaman

        return view('home', [
            'posts' => $posts
        ]);
    }

    // Method untuk menampilkan satu artikel
    public function show(Post $post)
    {
        // Pastikan post yang diakses sudah di-publish
        if (is_null($post->published_at)) {
            abort(404);
        }

        return view('posts.show', [
            'post' => $post
        ]);
    }

    // Method untuk menampilkan post dalam satu kategori
    public function category(Category $category)
    {
        $posts = $category->posts() // Ambil post melalui relasi
            ->whereNotNull('published_at')
            ->latest('published_at')
            ->paginate(10);

        return view('categories.show', [
            'category' => $category,
            'posts' => $posts
        ]);
    }
}