<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BbsController;

Route::get( '/', [BbsController::class, 'index'] )->name( 'index' );
Route::get( '/{item}', [BbsController::class, 'detail'] )->name( 'detail' );
