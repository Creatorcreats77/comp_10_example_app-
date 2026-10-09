<nav class="flex py-2 px-4 md:px-8 bg-white border-b border-slate-300 min-h-[68px] relative z-20" aria-label="Main navigation">
        <div class="max-w-7xl mx-auto flex flex-wrap items-center gap-4 w-full">
            <div class="flex-1 flex">
                <a href="#">
                    <span class="text-red text-2xl">SkillSwap</span>
                </a>
            </div>

            <div id="collapseMenu" tabindex="-1"
                class="hidden lg:block max-lg:bg-white max-lg:border-l max-lg:border-slate-300 max-lg:w-1/2 max-lg:fixed max-lg:top-0 max-lg:right-0 max-lg:h-full max-lg:shadow-md max-lg:overflow-auto max-sm:w-full z-50 outline-none">


                <ul class="flex flex-col gap-8 font-semibold text-2xl text-slate-900 lg:flex-row max-lg:p-6">
                    <li>
                    <a href="{{ route('home') }}"
                        class="text-blue-500 transition delay-150 duration-200 ease-in-out hover:-translate-y-1 hover:scale-110 hover:text-gray-500"
                        aria-current="page">Home</a>
                    </li>
                     <li>
                    <a href="{{ route('about') }}"
                        class="text-blue-500 transition delay-150 duration-200 ease-in-out hover:-translate-y-1 hover:scale-110 hover:text-gray-500"
                        aria-current="page">About</a>
                    </li>
                      <li>
                    <a href="{{ route('contact') }}"
                        class="text-blue-500 transition delay-150 duration-200 ease-in-out hover:-translate-y-1 hover:scale-110 hover:text-gray-500"
                        aria-current="page">Contact</a>
                    </li>
                </ul>
            </div>

        </div>
        </nav>