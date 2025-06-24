<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CategoryController extends Controller
{
    //Index page
    public function index()
    {
        $categories = Category::all();
        return Inertia::render('categories/Index', ['categories' => $categories]);
    }
}
