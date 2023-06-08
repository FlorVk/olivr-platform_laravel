<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'OliVR') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600&family=Rubik:wght@300;400;500&display=swap" rel="stylesheet">

        <!-- Scripts -->
        <link rel="stylesheet" href="/reset.css">
        <link rel="stylesheet" href="/style.css">
    </head>
    <body class="font-sans antialiased">
        <div class="flex">

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main class="main-block main auth-main flex align-center flex-column ">
                {{ $slot }}
            </main>

            <div class="auth-block"></div>
        </div>
    </body>
</html>
