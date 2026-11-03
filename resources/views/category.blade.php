@extends('layouts.app')

@section('title')
Category
@endsection


@section('content')
<div class="space-y-8 py-6 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-xl">
    @foreach ($categories as $category)
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        {{-- Category Header --}}
        <div class="bg-slate-900 px-6 py-4 flex items-center justify-between">
            <h2 class="text-xl font-bold tracking-tight text-white">
                {{ $category->name }}
            </h2>
            <span
                class="text-xs font-semibold px-2.5 py-1 bg-slate-800 text-slate-300 rounded-full border border-slate-700">
                {{ $category->products->count() }} items
            </span>
        </div>

        {{-- Products Grid --}}
        <div class="p-6">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                @foreach ($category->products as $product)
                <div
                    class="group relative bg-slate-50 hover:bg-white rounded-lg p-4 border border-gray-200 transition-all duration-200 hover:shadow-md hover:border-slate-300 flex items-center justify-between">
                    <span class="font-medium text-gray-800 group-hover:text-slate-900 transition-colors">
                        {{ $product->id }}
                    </span>
                    <span class="font-medium text-gray-800 group-hover:text-slate-900 transition-colors">
                        {{ $product->name }}
                    </span>
                    <div class="w-2 h-2 rounded-full bg-emerald-500"></div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection