<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ColocationController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvitationController;

Route::get('/', function () {
    return view('welcome');
});

require __DIR__.'/auth.php';


// ===============================
// AUTH + NOT BANNED USERS
// ===============================
Route::middleware(['auth', 'banned'])->group(function () {

    // Dashboard
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Colocations
    Route::resource('colocations', ColocationController::class);

    Route::patch('/colocations/{id}/cancel', [ColocationController::class, 'cancel'])
        ->name('colocations.cancel');

    // Expenses
    Route::prefix('colocations/{colocation}')->group(function () {
        Route::get('/expenses', [ExpenseController::class, 'index'])->name('expenses.index');
        Route::get('/expenses/create', [ExpenseController::class, 'create'])->name('expenses.create');
        Route::post('/expenses', [ExpenseController::class, 'store'])->name('expenses.store');
    });

    // Balances & settlements
    Route::get('/colocations/{colocation}/balances', [ColocationController::class, 'balances'])
        ->name('colocations.balances');

    Route::get('/colocations/{colocation}/settlements', [ColocationController::class, 'settlements'])
        ->name('colocations.settlements');

    // Invitations
    Route::post('/colocations/{colocation}/invite', [InvitationController::class, 'store'])
        ->name('invitations.store');

    Route::get('/invitations/accept/{token}', [InvitationController::class, 'accept'])
        ->name('invitations.accept');

    // Categories
    Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
    Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
    Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');

});


// ===============================
// 🛠 ADMIN ONLY
// ===============================
Route::middleware(['auth', 'admin', 'banned'])->prefix('admin')->group(function () {

    Route::get('/', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    Route::get('/users', [AdminController::class, 'users'])->name('admin.users');

    Route::post('/users/{user}/ban', [AdminController::class, 'ban'])->name('admin.ban');
    Route::post('/users/{user}/unban', [AdminController::class, 'unban'])->name('admin.unban');

});