<?php

use App\Http\Controllers\ColocationController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvitationController;

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

Route::middleware(['auth'])->group(function () {
    Route::resource('colocations', ColocationController::class);
});

Route::patch('/colocations/{id}/cancel', [ColocationController::class, 'cancel'])
    ->name('colocations.cancel');

Route::prefix('colocations/{colocation}')->group(function () {
    Route::get('/expenses', [ExpenseController::class, 'index'])->name('expenses.index');
    Route::get('/expenses/create', [ExpenseController::class, 'create'])->name('expenses.create');
    Route::post('/expenses', [ExpenseController::class, 'store'])->name('expenses.store');
});


Route::get('/colocations/{colocation}/balances', [ColocationController::class, 'balances'])
    ->name('colocations.balances');

Route::get('/colocations/{colocation}/settlements', [ColocationController::class, 'settlements'])
    ->name('colocations.settlements');



Route::post('/colocations/{colocation}/invite', [InvitationController::class, 'store'])
    ->name('invitations.store');

Route::get('/invitations/accept/{token}', [InvitationController::class, 'accept'])
    ->name('invitations.accept');

