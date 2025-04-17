<?php

use \Pirsch\Facades\Pirsch;
use Illuminate\Support\Facades\Route;
use Sstottelaar\Pirsch\Http\Controllers\PirschController;

Route::name('pirsch.')->prefix('pirsch')->group(function () {
    Route::get('/', [PirschController::class, 'index'])->name('index');
});
