<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    //index page
    public function index()
    {
        $items = Item::all();
        return Inertia::render('items/Index', ['items' => $items]);
    }
}
