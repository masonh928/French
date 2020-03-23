<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>EGHS French - @yield('title')</title>

        <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
        <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">

        <script src="{{ asset('js/app.js') }}"></script>
    </head>

    <body id="app" class="bg-gray-200 min-h-screen">
        <div id="container" class="flex min-h-screen h-full">
            <div id="sidebar" class="w-1/6 bg-gray-800 text-center text-gray-300 py-8">
                <ul>
                    <li><a class="inline-block rounded px-4 py-2 hover:bg-gray-700 hover:text-white mb-4" href="#">Dashboard</a></li>
                    <li><a class="inline-block rounded px-4 py-2 hover:bg-gray-700 hover:text-white mb-4" href="#">Create Quiz</a></li>
                    <li><a class="inline-block rounded px-4 py-2 hover:bg-gray-700 hover:text-white mb-4" href="#">Add Lesson</a></li>
                    <li><a class="inline-block rounded px-4 py-2 hover:bg-gray-700 hover:text-white mb-4" href="#">View Grades</a></li>
                    <li><a class="inline-block rounded px-4 py-2 hover:bg-gray-700 hover:text-white mb-4" href="#">View Rosters</a></li>
                    <li><a class="inline-block rounded px-4 py-2 hover:bg-gray-700 hover:text-white mb-4" href="#">View Messages</a></li>
                    <li><a class="inline-block rounded px-4 py-2 hover:bg-gray-700 hover:text-white mb-4" href="#">View Forum</a></li>
                </ul>
            </div>

            <div id="content" class="py-8 px-12">
                @yield('content')
            </div>
        </div>
    </body>
</html>