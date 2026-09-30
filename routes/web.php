<?php

use App\Http\Controllers\PaginasController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PaginasController::class, 'inicio'])->name('inicio');
Route::get('/nosotros', [PaginasController::class, 'nosotros'])->name('nosotros');
Route::get('/productos', [PaginasController::class, 'productos'])->name('productos');