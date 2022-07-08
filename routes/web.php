<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home', [
      'title' => 'Home',
      'active' => 'home'
    ]);
});

Route::get('/about', function() {
  return view('about', [
    'title' => 'About',
    'active' => 'about'
  ]);
});

Route::controller(PostController::class)->group(function() {

  Route::prefix('/blog')->group(function(){
    Route::get('/', 'index' );
    Route::get('/{post:slug}', 'show');
  });

  Route::get('/categories','categories');
  Route::get('/category/{category:slug}', 'category');
  Route::get('/author/{author:username}', 'author');
});

Route::redirect('/author', '/blog');
