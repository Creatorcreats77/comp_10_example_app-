@extends('layouts.app')

@section('title', $category->name)

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <div class="mb-6 flex items-center justify-between">
        <h1 class="text-2xl font-bold text-gray-900">{{ $category->name }}</h1>
        <span class="text-sm bg-gray-100 text-gray-700 px-3 py-1 rounded-full">
            {{ $category->products->count() }} Products
        </span>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        @forelse ($category->products as $product)
            <div class="bg-white p-4 rounded-lg border border-gray-200 shadow-sm">
                <h3 class="font-semibold text-gray-800">{{ $product->name }}</h3>
                <p class="text-sm text-gray-600 mt-1">${{ number_format($product->price ?? 0, 2) }}</p>
            </div>
        @empty
            <p class="col-span-full text-gray-500">Bu kategoriýada önüm ýok.</p>
        @endforelse
    </div>
</div>

@endsection