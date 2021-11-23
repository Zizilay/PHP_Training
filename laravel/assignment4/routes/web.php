<?php
use App\Models\Post;
use Illuminate\Support\Facades\Route;



Route::get('/api-view/post', function () {
  return view('posts.api.list');
});

Route::get('/api-view/post/{id}/edit', function () {
  return view('posts.api.edit');
});

Route::get('/api-view/post/create', function () {
  return view('posts.api.create');
});


