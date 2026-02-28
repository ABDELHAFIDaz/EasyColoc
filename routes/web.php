<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MembershipController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function (){ // this just for testing
    return view('index');
})->name('home');


// for members
Route::get('/member/overview', [MembershipController::class, 'overview'])->name('member.overview');
Route::get('/member/balances', [MembershipController::class, 'balances'])->name('member.balances');
Route::get('/member/members', [MembershipController::class, 'members'])->name('member.members');
Route::get('/member/expenses', [MembershipController::class, 'expenses'])->name('member.expenses');

// for admin
Route::get('/admin/stats', [AdminController::class, 'stats'])->name('admin.stats');
Route::get('/admin/apartments', [AdminController::class, 'apartments'])->name('admin.apartments');
Route::get('/admin/users', [AdminController::class, 'showUsers'])->name('admin.users');
Route::get('/admin/banned', [AdminController::class, 'bannedUsers'])->name('admin.banned');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
