<?php

namespace App\Http\Controllers;
use App\Models\Item;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ItemController extends Controller
{
    //index page
    public function index()
    {
        $items = Item::all();
        return Inertia::render('items/Index', ['items' => $items]);
    }
}
