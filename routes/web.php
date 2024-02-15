<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/new_project', [App\Http\Controllers\ProjectController::class, 'new_project'])->name('new.project');
Route::post('/new_project', [App\Http\Controllers\ProjectController::class, 'store_project'])->name('store.project');
Route::get('/list-project', [App\Http\Controllers\ProjectController::class, 'list_project'])->name('list.project');