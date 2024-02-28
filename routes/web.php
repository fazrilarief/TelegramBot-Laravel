<?php

use App\Http\Controllers\TelegramBotController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TelegramBotController::class, 'index']);
Route::post('sendMessage', [TelegramBotController::class, 'sendMessage'])->name('sendMessage');
