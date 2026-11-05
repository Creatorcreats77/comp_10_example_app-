<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
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
        return redirect()->route('category.index')
            ->with('success', 'Category updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
