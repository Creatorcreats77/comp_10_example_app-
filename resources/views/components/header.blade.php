<nav class="flex py-3 px-4 md:px-8 bg-white border-b border-slate-200 min-h-[68px] relative z-20 shadow-xs" aria-label="Main navigation">
    <div class="max-w-7xl mx-auto flex flex-wrap items-center justify-between gap-4 w-full">
        <div class="flex items-center gap-3">
            <a href="{{ route('home') }}" class="flex items-center gap-2 group">
                <div class="w-10 h-10 rounded-xl bg-gradient-to-tr from-indigo-600 to-indigo-400 flex items-center justify-center text-white font-black text-xl shadow-md group-hover:scale-105 transition-transform">
                    S
                </div>
                <div class="flex flex-col">
                    <span class="text-xl font-bold tracking-tight text-slate-900 group-hover:text-indigo-600 transition-colors">SkillSwap</span>
                    <span class="text-[10px] uppercase font-semibold text-slate-400 tracking-wider">Catalog & Inventory</span>
                </div>
            </a>
        </div>

        <div id="collapseMenu" tabindex="-1"
            class="hidden lg:block max-lg:bg-white max-lg:border-l max-lg:border-slate-300 max-lg:w-1/2 max-lg:fixed max-lg:top-0 max-lg:right-0 max-lg:h-full max-lg:shadow-md max-lg:overflow-auto max-sm:w-full z-50 outline-none">
            <ul class="flex flex-col gap-6 font-medium text-base text-slate-700 lg:flex-row items-center max-lg:p-6">
                <li>
                    <a href="{{ route('home') }}"
                        class="transition-colors hover:text-indigo-600 px-3 py-1.5 rounded-lg {{ Route::is('home') ? 'text-indigo-600 font-semibold bg-indigo-50' : 'text-slate-600' }}">
                        Home
                    </a>
                </li>
                <li>
                    <a href="{{ route('category') }}"
                        class="transition-colors hover:text-indigo-600 px-3 py-1.5 rounded-lg flex items-center gap-1.5 {{ Route::is('category*') ? 'text-indigo-600 font-semibold bg-indigo-50' : 'text-slate-600' }}">
                        <span>Categories</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('car') }}"
                        class="transition-colors hover:text-indigo-600 px-3 py-1.5 rounded-lg {{ Route::is('car*') ? 'text-indigo-600 font-semibold bg-indigo-50' : 'text-slate-600' }}">
                        Cars
                    </a>
                </li>
                <li>
                    <a href="{{ route('about') }}"
                        class="transition-colors hover:text-indigo-600 px-3 py-1.5 rounded-lg {{ Route::is('about') ? 'text-indigo-600 font-semibold bg-indigo-50' : 'text-slate-600' }}">
                        About
                    </a>
                </li>
                <li>
                    <a href="{{ route('contact') }}"
                        class="transition-colors hover:text-indigo-600 px-3 py-1.5 rounded-lg {{ Route::is('contact') ? 'text-indigo-600 font-semibold bg-indigo-50' : 'text-slate-600' }}">
                        Contact
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
