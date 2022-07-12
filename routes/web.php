<?php

use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
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
});

Route::controller(UserController::class)->group(function() {
  Route::get('/login', 'login')->name('login')->middleware('guest');
  Route::post('/login', 'postLogin');
  Route::get('/register', 'register')->middleware('guest');
  Route::post('/register', 'postRegister');
  Route::get('/dashboard', 'dashboard')->middleware('auth');
  Route::get('/logout', 'logout')->middleware('auth');
});

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::prefix('/coba')->group(function() {
  Route::get('/1', function() {
    return request(['title', 'name']);
  });
  Route::get('/2', function(){
    return request();
  });

});
