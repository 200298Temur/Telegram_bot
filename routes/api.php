<?php

use App\Http\Controllers\TelegramBotController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Telegram\Bot\Laravel\Facades\Telegram;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('telegram/webhook',[TelegramBotController::class,'handle']);

// $response = Telegram::setWebhook(['url' => 'https://example.com/<token>/webhook']);