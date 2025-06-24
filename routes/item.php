<?php

use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::get('items', [ItemController::class, 'index'])->name('items.index');

