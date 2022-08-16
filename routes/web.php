<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/folders/{id}/tasks', 'TaskController@index')->name('tasks.index');

// Route::get('/folders/{folder}/tasks', 'TaskController@index')->name('tasks.index');
// Route::get('/folders/{folder}/tasks', 'App\Http\Controllers\TaskController@index')->name('tasks.index');

// Route::get('/folders/{id}/tasks', 'App\Http\Controllers\TaskController@index')->name('tasks.index');
// Route::get('/folders/{id}/tasks', [ 'App\Http\Controllers\TaskController', 'index'] )->name('tasks.index');
Route::get('/folders/{id}/tasks', [\App\Http\Controllers\TaskController::class, 'index'])->name('tasks.index');

//Folder作成
Route::get('/folders/create', [\App\Http\Controllers\FolderController::class, 'showCreateForm'])->name('folders.create');
Route::post('/folders/create', [\App\Http\Controllers\FolderController::class, 'create']);

Auth::routes();