<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::get('categories', [CategoryController::class, 'index'])->name('categories.index');

