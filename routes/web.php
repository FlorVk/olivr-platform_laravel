<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SessionController;

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



Route::middleware('auth')->group(function () {
    Route::get('/settings', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/settings', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/settings', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/settings/rooster', [ProfileController::class, 'rooster'])->name('rooster.edit');
    Route::get('/settings/help', [ProfileController::class, 'help'])->name('rooster.edit');

    Route::get('/timeout', [SessionController::class, 'timeout'])->name('timeout');
    Route::get('/timeout/create', [SessionController::class, 'newSession'])->name('session.create');

    Route::get('/', [Controller::class, 'index'])->name('home');
    Route::get('/vr', [Controller::class, 'vr'])->name('vr');
    
});



require __DIR__.'/auth.php';
