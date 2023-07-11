<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController; //<---- Import del controller precedentemente creato!
use App\Http\Controllers\Admin\PostController;

/* ... */

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {

	Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

	// Admin Post CRUD
	Route::resource('posts', PostController::class);
});

require __DIR__.'/auth.php';
