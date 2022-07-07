<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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

  Route::get('/', [PostController::class, 'index'] );
  Route::get('/{post:slug}', [PostController::class, 'show']);

});

Route::get('/categories', [PostController::class, 'categories']);

Route::get('/category/{category:slug}', [PostController::class, 'category']);

Route::get('/author/{author:username}', [PostController::class, 'author']);
Route::redirect('/author', '/blog');
