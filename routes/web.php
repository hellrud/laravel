<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\GuestbookController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

//Route::get('/', [WelcomeController::class, 'welcome'])->name('welcome');

Route::get('/dashboard', function () {
    //return view('dashboard');
    return redirect('/');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('guestbook', GuestbookController::class)->except(['index']);
});

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'send'])->name('contactsend');


Route::get('/', [GuestbookController::class, 'index'])->name('guestbook.index');

Route::get('/guestbook', function() { return redirect('/'); });

require __DIR__.'/auth.php';
