<?php

use App\Http\Controllers\Activities;
use App\Http\Controllers\Bookings;
use App\Http\Controllers\Messages;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Rooms;
use App\Models\Message;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;

//Home
Route::get('/', function () {
    return view('index');
})->name('home');
//About Us
Route::get('/about', function () {
    return view('app.about');
})->name('about');
//Contact
Route::get('/contact', function () {
    return view('app.contact');
})->name('contact');
//Register
Route::get('/register', function () {
    return view('auth.register');
})->name('register');
//Login
Route::get('/login', function () {
    return view('auth.login');
})->name('login');
//Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');





Route::get('activities', [Activities::class,'index'])->name('activities.index');
Route::resource('activities',Activities::class)->except(['index'])->middleware('auth');

Route::get('rooms', [Rooms::class, 'index'])->name('rooms.index');
Route::get('rooms/offers', [Rooms::class, 'indexoffers'])->name('rooms.offers');
Route::get('rooms/availability', [Rooms::class, 'availabilityrooms'])->name('rooms.availability');
Route::resource('rooms',Rooms::class)->except(['index','indexoffers','availabilityrooms'])->middleware('auth');

Route::get('bookings', [Bookings::class, 'index'])->name('bookings.index');
Route::resource('bookings',Bookings::class)->except(['index'])->middleware('auth');
Route::post('/bookings', [Bookings::class, 'store'])->name('bookings.store');


Route::get('messages', [Messages::class, 'index'])->name('messages.index');
Route::resource('messages',Messages::class)->except(['index'])->middleware('auth');


Route::post('/messages', [MessageController::class, 'store'])->name('messages.store');

Route::post('/messages', [Messages::class, 'store'])->name('messages.store');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';