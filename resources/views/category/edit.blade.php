@extends('layouts.app')

@section('title', 'Edit Category')

@section('content')
<div class="max-w-2xl mx-auto py-8 px-4">
    <div class="mb-6 flex items-center justify-between">
        <h1 class="text-2xl font-bold text-gray-900">Edit Category</h1>
        <a href="{{ route('category') }}" class="text-sm font-medium text-indigo-600 hover:text-indigo-800">
            &larr; Back
        </a>
    </div>

    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
        <form action="{{ route('category.update', $category->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Category Name</label>
                <input 
                    type="text" 
                    name="name" 
                    id="name" 
                    value="{{ old('name', $category->name) }}" 
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition"
                    required
                >
                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex justify-end gap-3">
                <a href="{{ route('category') }}" class="px-4 py-2 border border-gray-300 text-gray-700 text-sm rounded-lg hover:bg-gray-50 transition">
                    Cancel
                </a>
                <button type="submit" class="px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-medium rounded-lg transition cursor-pointer">
                    Update Category
                </button>
            </div>
        </form>
    </div>
</div>
@endsection