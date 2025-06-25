<?php

use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::middleware('auth')->group(function () {  
    Route::get('items', [ItemController::class, 'index'])->name('items.index');
});
