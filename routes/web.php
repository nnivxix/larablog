<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home', [
      'title' => 'Home'
    ]);
});

Route::get('/about', function() {
  return view('about', [
    'title' => 'About'
  ]);
});


Route::prefix('/blog')->group(function(){

  Route::get('/', function(){
    return view('blogs', [
      'title' => 'Blogs',
      'blogs' => Post::all()
    ]);
  });

  Route::get('/{slug}', function($slug) {
    return view('blog', [
      'title' => 'single blog',
      'post' => Post::find($slug)
    ]);
  });
});
