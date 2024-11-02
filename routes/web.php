<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Ahmad Suherman', 'title' => 'About']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
        [
            'id' => 1,
            'slug' => 'artikel-1',
            'title' => 'Artikel 1',
            'author' => 'Ahmad Suherman',
            'body' => ' Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel optio, neque harum tempora quia ad,
            enim alias unde exercitationem doloribus magni ab explicabo reprehenderit repellendus dolore ipsam nesciunt obcaecati quisquam.'
        ],
        [
            'id' => 2,
            'slug' => 'artikel-2',
            'title' => 'Artikel 2',
            'author' => 'Ahmad Suherman',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed assumenda amet dolorem quos nisi, provident
            laudantium itaque odio delectus quisquam esse fuga natus quibusdam voluptate harum neque voluptatem. Ipsum, quos.'
        ]
    ]]);
});

Route::get('/posts/{slug}', function ($slug){
    $posts = [
        [
            'id' => 1,
            'slug' => 'artikel-1',
            'title' => 'Artikel 1',
            'author' => 'Ahmad Suherman',
            'body' => ' Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel optio, neque harum tempora quia ad,
            enim alias unde exercitationem doloribus magni ab explicabo reprehenderit repellendus dolore ipsam nesciunt obcaecati quisquam.'
        ],
        [
            'id' => 2,
            'slug' => 'artikel-2',
            'title' => 'Artikel 2',
            'author' => 'Ahmad Suherman',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed assumenda amet dolorem quos nisi, provident
            laudantium itaque odio delectus quisquam esse fuga natus quibusdam voluptate harum neque voluptatem. Ipsum, quos.'
        ]
    ];
    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
