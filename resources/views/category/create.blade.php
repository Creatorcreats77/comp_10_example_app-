@extends('layouts.app')

@section('title', isset($category) ? 'Edit Category' : 'Add Category')

@section('content')
<form action="{{ isset($category) ? route('category.update', $category->id) : route('category.store') }}" 
      method="POST" 
      class="max-w-md mx-auto p-6 bg-white rounded-lg shadow-md space-y-4 my-6">
    @csrf
    @if(isset($category))
        @method('PUT')
    @endif

    <h2 class="text-xl font-semibold text-gray-800">
        {{ isset($category) ? 'Edit Category' : 'Add Category' }}
    </h2>

    <div>
        <label for="name" class="block text-sm font-medium text-gray-700">Category Name</label>
        <input type="text" id="name" name="name" 
            value="{{ old('name', $category->name ?? '') }}"
            placeholder="e.g., Electronics"
            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-sm" />
    </div>

    @error('name')
    <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
    @enderror

    <div>
        <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
        <textarea id="description" name="description" rows="3" placeholder="Brief description..."
            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-sm">{{ old('description', $category->description ?? '') }}</textarea>
    </div>

    @error('description')
    <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
    @enderror

    <div class="flex items-center gap-3">
        <button type="submit"
            class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-md transition-colors">
            {{ isset($category) ? 'Update Category' : 'Save Category' }}
        </button>

        @if(isset($category))
        <a href="{{ route('category') }}"
            class="w-full text-center bg-gray-200 hover:bg-gray-300 text-gray-700 font-medium py-2 px-4 rounded-md transition-colors">
            Cancel
        </a>
        @endif
    </div>
</form>
@endsection