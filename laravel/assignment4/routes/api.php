<?php

use Illuminate\Http\Request;
use App\Http\Controllers\PostAPIController;
use Illuminate\Support\Facades\Route;
 

Route::group([], function () {
    Route::get('/post/list', 'API\Post\PostAPIController@getPostList');
  });
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('/post/{postId}', 'API\Post\PostAPIController@getPostById');
Route::post('/post/create', 'API\Post\PostAPIController@createPost');
Route::post('/post/edit/{postId}', 'API\Post\PostAPIController@updatePost');
Route::delete('/post/delete/{postId}', 'API\Post\PostAPIController@deletePostById');

