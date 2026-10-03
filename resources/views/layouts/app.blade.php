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
                    <div class="text-6xl">@yield('content')</div>
            </main>

        @include("components.footer")  


    </div>
</body>
</html>