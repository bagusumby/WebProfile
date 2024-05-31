<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FooterController;

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

Route::get('/', function () {
    return view('welcome');
})->name('Home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('abouts', AboutController::class);
 
    Route::resource('resume', ResumeController::class); 

    Route::resource('portofolio', PortofolioController::class); 

    Route::resource('contact', ContactController::class); 
    
    Route::resource('footer', FooterController::class); 
});

require __DIR__.'/auth.php';
