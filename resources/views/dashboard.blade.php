
@extends('layouts.app')

@section('title')
Dashboard 
@endsection

@section('content')

<div class="min-h-screen flex items-center justify-center bg-gray-100 px-4">
    <div class="max-w-md w-full bg-white rounded-xl shadow-md p-8 text-center">
        <!-- User Initials Avatar -->
        <div class="mx-auto mb-4 flex h-14 w-14 items-center justify-center rounded-full bg-indigo-100 text-indigo-600 text-xl font-bold uppercase">
            {{ substr(Auth::user()->name, 0, 1) }}
        </div>

        <h1 class="text-2xl font-bold text-gray-800">
            Welcome, <span class="text-indigo-600">{{ Auth::user()->name }}</span>!
        </h1>
        
        <p class="text-sm text-gray-500 mt-1 mb-6">
            {{ Auth::user()->email }}
        </p>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" 
                    class="w-full py-2.5 px-4 bg-red-600 hover:bg-red-700 text-white font-medium rounded-lg shadow-sm transition duration-150 ease-in-out focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 cursor-pointer">
                Logout
            </button>
        </form>
    </div>
</div>


@endsection