@props([
    'title' => 'My Laravel App'
])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
          @vite(['resources/css/app.css', 'resources/js/app.js'])
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $title }}</title>


        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
    <!-- <style>
        body {
            font-family: 'Instrument Sans', sans-serif;
            bacground-color: #f9f9f9;
            color: #333;
        }
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 2rem;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        nav a {
            color: #333;
            text-decoration: none;
            margin-left: 1rem;
        }
        nav a:hover {
            color: #007BFF;
        }</style> -->
    </head>
    <body class=" text-amber-600 ">

    <nav> 

        <a href="/" class="text-lg font-semibold text-gray-900 dark:text-white">My Laravel App</a>
            <nav class="space-x-4 text-sm">
                <a href="/about" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200">About</a>
                <a href="/contact" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200">Contact</a>
            </nav>
    </nav>

    <main> {{ $slot }} </main>

       
    </body>
</html>
