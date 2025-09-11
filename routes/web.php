<?php

use App\Http\Controllers\FundController;
use App\Http\Controllers\GraphController;
use App\Http\Controllers\InvestmentController;
use App\Http\Controllers\InvestorController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/instructions', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::group(['prefix' => 'investors'], function () {
    Route::get("", [InvestorController::class, 'index'])->name('investors.index');
    Route::get('/create', [InvestorController::class, 'create'])->name('investors.create');
    Route::post('/store', [InvestorController::class, 'store'])->name('investors.store');
    Route::get('/edit/{id}', [InvestorController::class, 'edit'])->name('investors.edit');
    Route::patch('/update/{id}', [InvestorController::class, 'update'])->name('investors.update');
});

Route::get("funds", [FundController::class, 'index'])->name('funds.index');;
Route::get("investments", [InvestmentController::class, 'index'])->name('investments.index');
Route::get("graph", [GraphController::class, 'index'])->name('graph.index');
Route::get('/exam', function () {
    return view('exam.index');
})->name('exam.index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
