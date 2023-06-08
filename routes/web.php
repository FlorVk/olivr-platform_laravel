<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
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
    Route::get('/', [Controller::class, 'index'])->name('home');


    Route::get('/settings', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/settings', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/settings', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/settings/rooster', [ProfileController::class, 'rooster'])->name('rooster.find');
    Route::get('/settings/help', [ProfileController::class, 'help'])->name('rooster.edit');
    Route::patch('/settings/image/{user}', [ProfileController::class, 'updateUserImage'])->name('profile.update.image');


    Route::get('/timeout', [SessionController::class, 'timeout'])->name('timeout');
    Route::get('/timeout/create', [SessionController::class, 'newSession'])->name('session.create');
    Route::get('/timeout/{session}', [SessionController::class, 'timeoutDetailed'])->name('timeout.session');
    
   
    Route::get('/vr', [Controller::class, 'vr'])->name('vr');
    Route::get('/rooms/{room}', [Controller::class, 'vrRooms'])->name('vr.room');


    Route::get('/admin', [AdminController::class, 'index'])->middleware('admin');

    Route::get('/admin/rooms', [AdminController::class, 'indexRooms'])->middleware('admin');
    Route::get('/admin/rooms/create', [AdminController::class, 'roomCreate'])->name('room.create')->middleware('admin');
    Route::post('/admin/rooms', [AdminController::class, 'roomStore'])->name('room.store')->middleware('admin');
    Route::get('/admin/rooms/{room}/edit', [AdminController::class, 'editRoom'])->middleware('admin');
    Route::patch('/admin/rooms/{room}', [AdminController::class, 'updateRoom'])->middleware('admin');
    Route::delete('/admin/rooms/{room}', [AdminController::class, 'destroyRoom'])->middleware('admin');
    

    Route::get('/admin/students', [AdminController::class, 'indexStudents'])->middleware('admin');
    Route::get('/admin/students/create', [AdminController::class, 'studentCreate'])->name('student.create')->middleware('admin');
    Route::post('/admin/students', [AdminController::class, 'studentStore'])->name('student.store')->middleware('admin');
    Route::get('admin/students/{student}/edit', [AdminController::class, 'editStudent'])->middleware('admin');
    Route::patch('/admin/students/{student}', [AdminController::class, 'updateStudent'])->middleware('admin');
    Route::delete('/admin/students/{student}', [AdminController::class, 'destroyStudent'])->middleware('admin');
});



require __DIR__.'/auth.php';
