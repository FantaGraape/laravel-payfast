<?php

use Illuminate\Support\Facades\Route;
use EllisSystems\LaravelPayFast\Http\Controllers\WebhookController;

Route::post('/payfast/webhook', [WebhookController::class, 'handleWebhook'])->name('webhook');
