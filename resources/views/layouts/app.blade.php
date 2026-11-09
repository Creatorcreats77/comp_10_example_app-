<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-50 text-gray-800 antialiased min-h-screen flex flex-col justify-between">

    <div class="container mx-auto px-4">
        <!-- Header / Navigation Bar -->
        <header class="flex items-center justify-between py-6 border-b border-gray-200 mb-6">
            <!-- Brand / Logo -->
            <a href="{{ route('home') }}" class="text-2xl font-bold tracking-tight text-indigo-600">
                Skill<span class="text-gray-800">Swap</span>
            </a>

            @include("components.header")

            <!-- Authentication Links / User Actions -->
            <div class="flex items-center space-x-4">
                @auth
                    <!-- Authenticated State -->
                    <div class="flex items-center space-x-3">
                        <span class="text-sm font-medium text-gray-700 hidden sm:inline">
                            Hello, <span class="text-indigo-600">{{ Auth::user()->name }}</span>
                        </span>
                        <form method="POST" action="{{ route('logout') }}" class="inline">
                            @csrf
                            <button type="submit" 
                                    class="px-3.5 py-2 text-sm font-medium text-red-600 bg-red-50 hover:bg-red-100 rounded-lg transition duration-150 cursor-pointer">
                                Logout
                            </button>
                        </form>
                    </div>
                @else
                    <!-- Guest State -->
                    <div class="flex items-center space-x-2">
                        <a href="{{ route('login') }}" 
                           class="px-4 py-2 text-sm font-medium text-gray-700 hover:text-indigo-600 transition duration-150">
                            Login
                        </a>
                        <a href="{{ route('register') }}" 
                           class="px-4 py-2 text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 rounded-lg shadow-sm transition duration-150">
                            Register
                        </a>
                    </div>
                @endauth
            </div>
        </header>

        <main class="space-y-6">
            @session('success')
                <div class="py-4 px-6 bg-green-600 text-white rounded-xl shadow-md cursor-pointer hover:bg-green-700 transition text-lg font-medium">
                    {{ session("success") }}
                </div>
            @endsession

            @session('error')
                <div class="py-4 px-6 bg-red-500 text-white rounded-xl shadow-md text-lg font-medium">
                    {{ session("error") }}
                </div>
            @endsession

            @if (Route::is('home'))
                <div class="py-6 px-8 bg-green-100 border border-green-200 text-green-800 rounded-2xl text-xl shadow-sm">
                    Bizin <span class="text-indigo-600 font-bold">SkillSwap</span> Programmamyza hos geldiniz!
                </div>
            @endif

            <div class="py-6">
                @yield('content')
            </div>

            <div class="text-lg text-gray-500 py-12 border-t border-gray-200">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero molestias accusamus provident eveniet fuga labore eius, id quia, similique recusandae quisquam quaerat, architecto officiis nesciunt a consequatur. Iusto, a omnis.
            </div>
        </main>
    </div>

    <!-- Footer -->
    <footer class="mt-auto bg-white border-t border-gray-200 py-6 text-center text-sm text-gray-500">
        @include("components.footer")
    </footer>

</body>

</html>