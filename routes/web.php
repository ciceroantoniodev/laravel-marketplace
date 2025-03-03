<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::resource('stores', \App\Http\Controllers\Admin\StoreController::class);
});

/*
Route::get('/admin/stores', [\App\Http\Controllers\Admin\StoreController::class, 'index'])
    ->name('admin.stores.index');

Route::get('/admin/stores/create', [\App\Http\Controllers\Admin\StoreController::class, 'create'])
    ->name('admin.stores.create');

Route::get('/admin/stores/{store}/edit', [\App\Http\Controllers\Admin\StoreController::class, 'edit'])
    ->name('admin.stores.edit');

Route::post('/admin/stores/store', [\App\Http\Controllers\Admin\StoreController::class, 'store'])
    ->name('admin.stores.store');

Route::post('/admin/stores/{store}/update', [\App\Http\Controllers\Admin\StoreController::class, 'update'])
    ->name('admin.stores.update');

Route::get('/admin/stores/{store}/destroy', [\App\Http\Controllers\Admin\StoreController::class, 'destroy'])
    ->name('admin.stores.destroy');
*/
