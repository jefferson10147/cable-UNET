<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\InternetServiceController;
use App\Http\Controllers\PhoneServiceController;
use App\Http\Controllers\CableServiceController;
use App\Http\Controllers\ChannelController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ChangeRequestController;

Route::get('/', function () {
    return view('app_home');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/admin_home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('adminHome');
});

Route::get('channels/show_schedules', [ChannelController::class, 'channelsSchedules'])->name('channels.schedules');
Route::get('invoices/generate', [InvoiceController::class, 'generateInvoices'])->name('invoices.generateInvoices');
Route::get('users/update_service/{id}', [UserController::class, 'changeUserService'])->name('users.changeService');
Route::get('users/{id}/change/{service_id}', [UserController::class, 'updateUserService'])->name('users.updateService');
Route::get('users/{id}/service/{service_id}', [UserController::class, 'replaceUserService'])->name('users.replaceService');

Route::resource('/programs', ProgramController::class);
Route::resource('/channels', ChannelController::class);
Route::resource('/internet_services', InternetServiceController::class);
Route::resource('/phone_services', PhoneServiceController::class);
Route::resource('/cable_services', CableServiceController::class);
Route::resource('/services', ServiceController::class);
Route::resource('/packages', PackageController::class);
Route::resource('/users', UserController::class);
Route::resource('/invoices', InvoiceController::class);
Route::resource('/change_requests', ChangeRequestController::class);

Route::get('programs/add_channel/{id}', [ProgramController::class, 'addChannel'])->name('programs.add_channel');
Route::get('program/{id}/channel/{channel_id}', [ProgramController::class, 'updateProgramChannel'])->name('programs.updateProgramChannel');
Route::get('cable_service/add/{id}', [CableServiceController::class, 'addChannels'])->name('cable_service.addChannels');
