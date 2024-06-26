<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
});
Route::prefix('user')->group(function () {
    Route::get('dashboard', function () {
        return view('user.dashboard');
    })->name("user.dashboard");
    Route::get('academic', function () {
        return view('user.academic');
    })->name("user.academic");
    Route::get('payment', function () {
        return view('user.payment');
    })->name("user.payment");
    Route::get('profile', function () {
        return view('user.profile');
    })->name("user.profile");
    Route::get('change-password', function () {
        return view('user.change-password');
    })->name("user.change-password");
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
