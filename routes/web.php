<?php

use App\Http\Controllers\AnswerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\QuestionController;


Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('questions/{question}', [QuestionController::class, 'show'])->name('questions.show');

Route::post('/answers/{question}', [AnswerController::class, 'store'])->name('answers.store');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::redirect('settings', 'settings/profile');

});

require __DIR__.'/settings.php';
