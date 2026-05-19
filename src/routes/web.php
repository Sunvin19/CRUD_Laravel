<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\ProductController;
use App\Models\Product;

Route::get('/', function () {
    return view('welcome');
});
/*
Route::get('/note/{id}', [NoteController::class, 'show'])->name('note.show');
Route::get('/saludo/{nombre?}', function ($nombre = 'Anonimous') {
    return "Hola, $nombre";
});
*/
Route::get('/', [NoteController::class, 'index'])->name('note.index');
Route::get('/note/create', [NoteController::class, 'create'])->name('note.create');
Route::post('/note/store', [NoteController::class, 'store'])->name('note.store');
Route::get('/note/edit/{note}', [NoteController::class, 'edit'])->name('note.edit');
Route::put('/note/update/{note}', [NoteController::class, 'update'])->name('note.update');
Route::delete('/note/destroy/{note}', [NoteController::class, 'destroy'])->name('note.destroy');
Route::get('/note/show/{note}', [NoteController::class, 'show'])->name('note.show');

Route::get('/product', [ProductController::class, 'index'])->name('product.index');
Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
Route::get('/product/edit/{product}', [ProductController::class, 'edit'])->name('product.edit');
Route::put('/product/update/{product}', [ProductController::class, 'update'])->name('product.update');
Route::delete('/product/destroy/{product}', [ProductController::class, 'destroy'])->name('product.destroy');
Route::get('/product/show/{product}', [ProductController::class, 'show'])->name('product.show');