<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Review;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('categories.index', compact('categories'));
    }

    public function show($id)
    {
        $category = Category::find($id);

        return view('categories.show', compact('category'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:3|max:255'
        ]);
        Category::create($validated);

        return redirect()->route('categories.index');
    }

    public function edit($id)
    {
        $category = Category::find($id);

        return view('categories.edit', compact('category'));
    }

    public function update($id, Request $request)
    {
        $category = Category::find($id);

        $request->validate([
            'name' => 'required|string|min:3|max:255',
        ]);

        $category->update([
            'name' => $request->name,
        ]);


        return redirect()->route('categories.show', $category->id);
    }


    public function destroy($id, Request $request)
    {
        $category = Category::find($id);

        $category->delete();

        return redirect()->route('categories.index');
    }
}
