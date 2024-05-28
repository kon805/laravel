<?php

use App\Http\Controllers\ElementController;
use App\Http\Controllers\moi;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

 // formulaire membre
Route::get('/formulaire', [ElementController::class, 'create'])->name('form');
Route::post('/formulaire', [ElementController::class, 'processForm']);
Route::get('/vision', [ElementController::class, 'index'])->name('vision');


Route::get('/groupe', [ElementController::class, 'groupe'])->name('groupe');

//Route::post('/formulaire', [ElementController::class, 'processForm']);


//formulaire de events


Route::get('/create', [EventController::class, 'create'])->name('create');
Route::post('/create', [EventController::class, 'store'])->name('create');



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
