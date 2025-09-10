<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/', function() {
    
        return view('welcome');
    })-> name('welcome');
    
    Route::get('about', function () {
        return view('about');
    })-> name('about');
    
    Route::get('Service', function () {
        return view('Service');
    })-> name('Services');
    
    Route::get('Team', function () {
        return view('Team');
    })-> name('Team');
});

require __DIR__.'/auth.php';
