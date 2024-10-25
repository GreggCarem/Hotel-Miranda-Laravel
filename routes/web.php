<?php
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// General pages
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/offers', [PageController::class, 'offers'])->name('offers');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/rooms', [PageController::class, 'rooms'])->name('rooms');
Route::get('/search', [SearchController::class, 'search'])->name('search');

// Contact form
Route::get('/contact', [ContactController::class, 'create'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.submit');

// Resources
Route::resource('contacts', ContactController::class)->except(['create', 'store']); // Since these are already handled above
Route::resource('bookings', BookingController::class);
Route::resource('rooms', RoomController::class);
Route::resource('activities', ActivityController::class);

// Dashboard and Profile
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Authentication routes
require __DIR__.'/auth.php';