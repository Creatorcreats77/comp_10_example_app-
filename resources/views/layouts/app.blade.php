<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
        @vite('resources/css/app.css')
</head>
<body>

    <div class="container mx-auto">

        @include("components.header")  

            <main>
                @if (request()->is('/'))
                        <div class="py-4 px-16 bg-green-300 rounded-2xl mt-8 text-2xl"> Bizin <span class="text-indigo-400 font-bold">SkillSwap</span> Programmamyza hos geldiniz!</div>
                @endif

                <div class="text-6xl py-12">@yield('content')</div>

                <div class="text-4xl py-24">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero molestias accusamus provident eveniet fuga labore eius, id quia, similique recusandae quisquam quaerat, architecto officiis nesciunt a consequatur. Iusto, a omnis.</div>
            </main>

        @include("components.footer")  

    </div>
</body>
</html>