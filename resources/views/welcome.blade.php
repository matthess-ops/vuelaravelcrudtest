<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    <body>
        <h1>lefuck</h1>
        <div id="app" class="flex items-center bg-gray-100 min-h-screen">
            <home/>
        </div>
        <script src="{{ asset('js/app.js') }}" defer></script>

    </body>
</html>
