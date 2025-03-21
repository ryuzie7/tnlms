<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AssetController;
use App\Http\Controllers\CustodianController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UsageHistoryController;

Route::get('/', function () {
    return redirect()->route('assets.index');
});

Route::resource('assets', AssetController::class);
Route::resource('custodians', CustodianController::class);
Route::resource('admins', AdminController::class);
Route::resource('usage-history', UsageHistoryController::class);
