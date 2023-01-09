<?php

use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\NoteController;
use App\Http\Controllers\client\ShowController;
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

Route::get('/', [ShowController::class, 'index']);
Route::get('/show/{id}',[ShowController::class,'show']);

Route::prefix('admin')->group(function () {
    Route::get('/note', [NoteController::class, 'index'])->name('note-index');
    Route::get('/note-create', [NoteController::class, 'create'])->name('note-create');
    Route::post('/note-store', [NoteController::class, 'store'])->name('note-store');
    Route::get('/note-edit/{id}', [NoteController::class, 'edit'])->name('note-edit');
    Route::get('/note-delete/{id}', [NoteController::class, 'delete']);

    //categories
    Route::get('/category', [CategoryController::class, 'index'])->name('category-index');
    Route::get('/category-edit/{id}', [CategoryController::class, 'edit'])->name('category-edit');
    Route::get('/category-create', [CategoryController::class, 'create'])->name('category-create');
    Route::post('/category-store', [CategoryController::class, 'store'])->name('category-store');
    Route::post('/category-update/{id}', [CategoryController::class, 'update']);
    Route::get('/category-delete/{id}', [CategoryController::class, 'delete']);
});
