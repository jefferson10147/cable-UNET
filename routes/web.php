<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InternetServiceController;
use App\Http\Controllers\PhoneServiceController;
use App\Http\Controllers\CableServiceController;
use App\Http\Controllers\ChannelController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/save/internet_service', [InternetServiceController::class, 'saveInternetService'])->name('internetService.save');
Route::get('/save/phone_service', [PhoneServiceController::class, 'savePhoneService'])->name('phoneService.save');
Route::get('/save/cable_service', [CableServiceController::class, 'saveCableService'])->name('cableService.save');
Route::get('/save/channel', [ChannelController::class, 'saveChannel'])->name('channel.save');
