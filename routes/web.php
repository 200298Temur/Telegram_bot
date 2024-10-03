<?php

use Illuminate\Support\Facades\Route;
use Telegram\Bot\Laravel\Facades\Telegram;

Route::get('/', function () {
    return 'salom';
});

Route::get('setwebhook',function(){
    $reseponse = Telegram::setWebhook(['url' => 'https://1fea-93-188-83-205.ngrok-free.app/app/telegram/webhook']);
});