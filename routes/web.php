<?php

use App\Http\Controllers\FundController;
use App\Http\Controllers\GraphController;
use App\Http\Controllers\InvestmentController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get("investors", [\App\Http\Controllers\InvestorController::class, 'index'])->name('investors.index');
Route::get("funds", [FundController::class, 'index'])->name('funds.index');;
Route::get("investments", [InvestmentController::class, 'index'])->name('investments.index');
Route::get("graph", [GraphController::class, 'index'])->name('graph.index');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
