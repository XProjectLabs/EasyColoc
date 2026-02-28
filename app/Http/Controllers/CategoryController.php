<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::latest()->get();
        return view('categories.index', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:categories,name'
        ]);

        Category::create([
            'name' => $request->name
        ]);

        return back()->with('success', 'Category added');
    }

    public function destroy(Category $category)
    {
        // prevent delete if used
        if ($category->expenses()->exists()) {
            return back()->with('error', 'Category used in expenses');
        }

        $category->delete();

        return back()->with('success', 'Category deleted');
    }
}