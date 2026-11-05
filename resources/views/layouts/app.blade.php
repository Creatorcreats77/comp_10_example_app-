<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SkillSwap')</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-slate-50 text-slate-800 font-sans antialiased min-h-screen flex flex-col justify-between">

    <div class="w-full">
        @include("components.header")

        <main class="w-full">
            @session('success')
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-6">
                <div class="p-4 rounded-2xl bg-emerald-50 border border-emerald-200 text-emerald-900 text-sm sm:text-base flex items-center justify-between shadow-xs">
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-lg bg-emerald-500 text-white flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                        </div>
                        <span class="font-medium">{{ session("success") }}</span>
                    </div>
                </div>
            </div>
            @endsession

            @session('error')
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-6">
                <div class="p-4 rounded-2xl bg-rose-50 border border-rose-200 text-rose-900 text-sm sm:text-base flex items-center justify-between shadow-xs">
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-lg bg-rose-500 text-white flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                        </div>
                        <span class="font-medium">{{ session("error") }}</span>
                    </div>
                </div>
            </div>
            @endsession

            @if (Route::is('home'))
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-6">
                <div class="py-4 px-6 bg-gradient-to-r from-emerald-500/10 to-indigo-500/10 border border-emerald-500/20 rounded-2xl text-slate-800 text-lg font-medium">
                    Bizin <span class="text-indigo-600 font-bold">SkillSwap</span> Programmamyza hos geldiniz!
                </div>
            </div>
            @endif

            <div class="w-full">
                @yield('content')
            </div>
        </main>
    </div>

    @include("components.footer")

</body>

</html>
