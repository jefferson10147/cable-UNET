<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InternetServiceController;

Route::get('/',[InternetServiceController::class, 'save_internet_service'])->name('internetService.save');
