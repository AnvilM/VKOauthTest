<?php

use App\Http\Controllers\TestController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/auth', [TestController::class, 'auth']);

Route::get('test', [TestController::class, 'test']);
