<?php

use App\Http\Controllers\MailController;
use App\Http\Controllers\MailtestController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [MailtestController::class, 'create'])->name('FormEmail.create');

Route::post('/', [MailtestController::class, 'store'])->name('FormEmail.store');
