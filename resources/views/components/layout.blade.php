<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <h1>Products</h1>
        <hr>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <hr>
            <x-navigation />
        <hr>
        {{$slot}}
    </body>
</html>