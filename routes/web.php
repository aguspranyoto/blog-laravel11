<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home',['header'=>'Home']);
});

Route::get('/about', function () {
    return view('about',['header'=>'About']);
});

Route::get('/contact', function () {
    return view('contact',['header'=>'Contact']);
});

Route::get('/blog', function () {
    return view('blog',['header'=>'Blog', 'posts' => [
        [
            'id' => 1,
            'slug' => 'memahami-quarter-life-crisis:-tantangan-dan-solusi',
            'title' => 'Memahami Quarter Life Crisis: Tantangan dan Solusi',
            'author' => 'Agus Pranyoto',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos harum, culpa porro fuga laboriosam doloribus tenetur, perspiciatis qui id natus nam consectetur sapiente veritatis magnam maiores blanditiis exercitationem? Non, obcaecati?'
        ],
        [
            'id' => 2,
            'slug' => 'memahami-quarter-life-crisis:-tantangan-dan-solusi',
            'title' => 'Memahami Quarter Life Crisis: Tantangan dan Solusi',
            'author' => 'Agus Pranyoto',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos harum, culpa porro fuga laboriosam doloribus tenetur, perspiciatis qui id natus nam consectetur sapiente veritatis magnam maiores blanditiis exercitationem? Non, obcaecati?'
        ]
    ]]);
});

Route::get('/blog/{slug}', function ($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'memahami-quarter-life-crisis:-tantangan-dan-solusi',
            'title' => 'Memahami Quarter Life Crisis: Tantangan dan Solusi',
            'author' => 'Agus Pranyoto',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos harum, culpa porro fuga laboriosam doloribus tenetur, perspiciatis qui id natus nam consectetur sapiente veritatis magnam maiores blanditiis exercitationem? Non, obcaecati?'
        ],
        [
            'id' => 2,
            'slug' => 'memahami-quarter-life-crisis:-tantangan-dan-solusi',
            'title' => 'Memahami Quarter Life Crisis: Tantangan dan Solusi',
            'author' => 'Agus Pranyoto',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos harum, culpa porro fuga laboriosam doloribus tenetur, perspiciatis qui id natus nam consectetur sapiente veritatis magnam maiores blanditiis exercitationem? Non, obcaecati?'
        ]
    ];

    $post = Arr::first($posts, function($post) use ($slug){
        return $post['slug'] == $slug;
    });

    return view('post', ['header' => 'Detail Post', 'post' => $post]);

});

