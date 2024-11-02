<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Ahmad Suherman', 'title' => 'About']);
});

Route::get('/posts', function () {
    $posts = Post::latest()->get();

    return view('posts', ['title' => 'Blog', 'posts' => Post::filter(request(['search', 'category', 'author']))
        ->latest()->paginate(9)->withQueryString()]);
});

Route::get('/posts/{post:slug}', function (Post $post){
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/authors/{user:username}', function (User $user){
    return view('posts', ['title' => count($user->posts) . ' Articles by '. $user->name, 'posts' => $user->posts]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts', ['title' => ' Articles in: ' . $category->name, 'posts' => $category->posts]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
