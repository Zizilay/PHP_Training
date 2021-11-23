<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Task\TaskController;
use App\Http\Controllers\PostController;





// Route::get('/', [TaskController::class ,'showList']);
// Route::post('/task', [TaskController::class ,'addList']);
// Route::delete('/task/{id}', [TaskController::class ,'deleteList']);
// Route::get('/updateinfo/{id}', [TaskController::class ,'editList']);
// Route::post('/updateList/{id}', [TaskController::class ,'updateList']);


Route::get('posts', [PostController::class, 'index']);

Route::post('post', [PostController::class, 'store']);

Route::put('post', [PostController::class, 'update']);

Route::delete('post/{post_id}', [PostController::class, 'destroy']);