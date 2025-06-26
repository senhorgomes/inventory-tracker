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

    // Create page
    public function create()
    {
        return Inertia::render('categories/Create');
    }

    // Create new category aka store
    public function store(Request $request)
    {
        Category::create($request->all());
        return redirect()->route('categories.index');
    }
}
