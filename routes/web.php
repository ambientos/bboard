<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BbsController;
use App\Http\Controllers\HomeController;

Auth::routes();

Route::get( '/', [BbsController::class, 'index'] )->name( 'index' );
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::post('/home', [HomeController::class, 'store'])->name('bb.store');
Route::get('/home/create', [HomeController::class, 'create'])->name('bb.create');
Route::get('/home/{bb}/edit', [HomeController::class, 'edit'])->name('bb.edit');
Route::patch('/home/{bb}', [HomeController::class, 'update'])->name('bb.update');
Route::get('/home/{bb}/delete', [HomeController::class, 'delete'])->name('bb.delete');
Route::delete('/home/{bb}', [HomeController::class, 'destroy'])->name('bb.destroy');
Route::get( '/{item}', [BbsController::class, 'detail'] )->name( 'detail' );
