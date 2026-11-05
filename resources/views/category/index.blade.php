@extends('layouts.app')

@section('title', 'Categories')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    {{-- Header --}}
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-bold text-gray-900">Categories</h1>
        {{-- Optional: Add Category Button --}}
        {{-- <a href="{{ route('category.create') }}"
            class="px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white font-medium text-sm rounded-lg transition">Add
            Category</a> --}}
    </div>

    {{-- Category Grid --}}
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @forelse ($categories as $category)
        <div
            class="bg-white rounded-xl shadow-sm border border-gray-100 flex flex-col justify-between hover:shadow-md transition-shadow duration-200 overflow-hidden">
            {{-- Category Details --}}
            <div class="p-6">
                <div class="flex items-start justify-between">
                    <h2 class="text-lg font-semibold text-gray-900 tracking-tight">
                        {{ $category->name }}
                    </h2>
                    <span
                        class="inline-flex items-center text-xs font-semibold px-2.5 py-1 bg-slate-100 text-slate-700 rounded-full border border-slate-200">
                        {{ $category->products_count ?? $category->products->count() }} items
                    </span>
                </div>
            </div>

            {{-- Action Footer --}}
            <div class="bg-gray-50 px-6 py-3 border-t border-gray-100 flex items-center justify-between">
                {{-- Show / View Button --}}
                <a href="{{ route('category.show', $category->id) }}"
                    class="text-sm font-medium text-indigo-600 hover:text-indigo-800 transition">
                    Show &rarr;
                </a>

                <div class="flex items-center space-x-4">
                    {{-- Edit Button --}}
                    <a href="{{ route('category.edit', $category->id) }}"
                        class="text-sm font-medium text-amber-600 hover:text-amber-700 transition">
                        Edit
                    </a>

                    {{-- Delete Form --}}
                    <form action="{{ route('category.destroy', $category->id) }}" method="POST"
                        onsubmit="return confirm('Are you sure you want to delete this category?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="text-sm font-medium text-red-600 hover:text-red-700 transition cursor-pointer">
                            Delete
                        </button>
                    </form>
                </div>
            </div>
        </div>
        @empty
        <div class="col-span-full bg-white rounded-xl border border-dashed border-gray-300 p-12 text-center">
            <p class="text-gray-500 font-medium">No categories found.</p>
        </div>
        @endforelse
    </div>
</div>
@endsection