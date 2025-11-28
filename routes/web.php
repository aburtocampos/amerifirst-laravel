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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

Route::get('/dashboard', \App\Http\Livewire\Dashboard\Main::class)->name('dashboard');

    Route::get('/loans', \App\Http\Livewire\Loans\ListLoans::class)->name('loans');

    Route::get('/payments', \App\Http\Livewire\Payments\ListPayments::class)->name('payments');

    Route::get('/opportunities/short-term', \App\Http\Livewire\Opportunities\ShortTerm::class);
    Route::get('/opportunities/long-term', \App\Http\Livewire\Opportunities\LongTerm::class);

    Route::get('/documents', \App\Http\Livewire\Documents\Upload::class);
    Route::get('/referral', \App\Http\Livewire\Referral\Form::class);


});

require __DIR__.'/auth.php';
