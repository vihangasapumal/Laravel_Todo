<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/todo', [HomeController::class, 'todo'])->name('todo');
Route::post('/todo/store', [HomeController::class, 'store'])->name('todo.store');
Route::get('/{task_id}/check', [HomeController::class, 'taskcheck'])->name('task-check');
Route::get('/{task_id}/delete', [HomeController::class, 'taskdelete'])->name('del-task');
