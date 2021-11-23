<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Task\TaskController;
use App\Http\Controllers\MyController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });



// /**
//  * Display All Tasks
//  */
// Route::get('/', function () {
//     $tasks = Task::orderBy('created_at', 'asc')->get();

//     return view('tasks', [
//         'tasks' => $tasks
//     ]);
// });

// /**
//  * Add A New Task
//  */
// Route::post('/task', function (Request $request) {
//     $validator = Validator::make($request->all(), [
//         'name' => 'required|max:255',
//     ]);

//     if ($validator->fails()) {
//         return redirect('/')
//             ->withInput()
//             ->withErrors($validator);
//     }

//     // Create The Task...
//     $task = new Task;
//     $task->name = $request->name;
//     $task->save();

//     return redirect('/');
// });

// /**
//  * Delete An Existing Task
//  */
// Route::delete('/task/{id}', function ($id) {
//     Task::findOrFail($id)->delete();

//     return redirect('/');
// });


Route::get('/', [TaskController::class ,'showList']);
Route::post('/task', [TaskController::class ,'addList']);
Route::delete('/task/{id}', [TaskController::class ,'deleteList']);
Route::get('/updateinfo/{id}', [TaskController::class ,'editList']);
Route::post('/updateList/{id}', [TaskController::class ,'updateList']);
Route::get('/export', [MyController::class ,'export']);
// Route::get('importExportView', 'MyController@importExportView');
Route::get('/import', [MyController::class ,'import']);