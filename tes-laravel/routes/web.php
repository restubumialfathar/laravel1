<?php

use App\Http\Controllers\TodoController;
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

Route::get('/', [TodoController::class,'todo']);

Route::get('/edit', function () {
    return view('update.edit');
});

Route::get('/input', [TodoController::class, 'create']);

Route::post('/store', [TodoController::class, 'store']);

Route::delete('update/{id}', [TodoController::class, 'destroy']);

Route::get('/{id}/edit', [TodoController::class, 'edit']);

Route::put('update/{id}', [TodoController::class, 'update']);