<?php

use App\Http\Controllers\Settings\CategoryController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::middleware('auth')->group(function () {

    Route::get('categories', [CategoryController::class, 'index'])->name('categories.index');

});
