<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'landing']);
Route::get('/login', [PageController::class, 'login']);

//ini admin bang. kutambahin dulu biar beda apalah ini keknya butuh banyak nanti 
Route::get('/admin/dashboard', [PageController::class, 'dashboard']);
Route::get('/admin/menu', [PageController::class, 'menu']);
Route::get('/admin/inventaris', [PageController::class, 'inventaris']);