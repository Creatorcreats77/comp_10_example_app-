<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index(): View
    {
        $categories = Category::with('products')->get();

        return view('category.index', compact('categories'));
    }



    public function create()
    {
        return view("category.create");
    }


    public function store(Request $request)
    {



        $validated = $request->validate([
            'name' => 'required|string|max:255|regex:/^[a-zA-Z0-9\s\-\_äätöüňžÄÄTÖÜŇŽ]+$/u',
            'description' => 'required|string',
        ]);
        // 2. Create and store the new Category record
        Category::create($validated);

        // 3. Redirect back to a page with a success flash message
        return redirect()->back()->with('success', 'Category created successfully!');
    }


    public function edit(string $id)
    {

        // Fetch the category or throw a 404 error if not found
        $category = Category::findOrFail($id);

        // Return the edit view with the category data
        return view('category.edit', compact('category'));
    }


    public function update(Request $request, string $id)
    {
        // 1. Find the existing category or throw a 404 error
        $category = Category::findOrFail($id);

        // 2. Validate incoming request data
        $validated = $request->validate([
            // Ensures name is required and unique, ignoring the current category ID
            'name' => 'required|string|max:255|unique:categories,name,' . $id,
            'description' => 'nullable|string',
        ]);

        // 3. Update the category record
        $category->update($validated);

        // 4. Redirect back to the index view with a success message
        return redirect()->route('category')
            ->with('success', 'Category updated successfully.');
    }


    public function show(string $id)
    {
        $category = Category::with('products')->findOrFail($id);

        return view('category.show', compact('category'));
    }



    public function destroy(string|int $id)
    {
        $category = Category::find($id);


        if ($category) {

            $category->delete();

            return redirect()->route('category')->with('success', "Category #{$category->id} (\"$category->name\") and its associated products were successfully deleted.");
        }
        return redirect()->route('category')->with('error', 'Category not found.');
    }
}
