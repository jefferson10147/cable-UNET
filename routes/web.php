<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InternetServiceController;
use App\Http\Controllers\PhoneServiceController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/save/internet_service', [InternetServiceController::class, 'saveInternetService'])->name('internetService.save');
Route::get('/save/phone_service', [PhoneServiceController::class, 'savePhoneService'])->name('phoneService.save');
