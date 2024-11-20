<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\LandingController;
//use App\Http\Controllers\ProfileController;

// Public landing page route
Route::get('/', [LandingController::class, 'index'])->name('landing');

// Login routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login');

// Logout route
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Admin dashboard route (Protected by auth middleware)
Route::get('/admin/dashboard', function () {
    return view('admin_dashboard'); // Returns the admin_dashboard view
})->name('admin.dashboard')->middleware('auth');

// Profile management (optional)
//Route::middleware('auth')->group(function () {
  //  Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    //Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    //Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//});

// Default Laravel auth routes
//require __DIR__.'/auth.php';
