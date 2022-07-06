<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
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

  Route::get('/', [PostController::class, 'index'] );
  Route::get('/{post:slug}', [PostController::class, 'show']);

});

Route::get('/categories', function() {
  return view('categories', [
    'title'=> 'List Category',
    'categories' => Category::all()
  ]);
});

Route::get('/category/{category:slug}', function (Category $category) {
  return view('category', [
    'title' => 'List Post by category',
    'posts' => $category->post,
    'category' => $category->name
  ]);
});
