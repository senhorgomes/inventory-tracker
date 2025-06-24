<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Models\Item;

Route::get('/', function () {
    // Retrieve all items
    $items = Item::all();
    // Render the welcome page with the items
    return Inertia::render('Welcome', ['items' => Item::all()]);
})->name('home');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
require __DIR__.'/category.php';
require __DIR__.'/item.php';