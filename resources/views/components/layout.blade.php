<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            a{
                font-style: italic;
                color: purple;
            }
            a:hover{
                color:darkblue;
            }
            p{
                font-family: Arial;
                font-size: 14px;
            }
            hr{
                border-style: dashed;
                border-width: 2px;
                color: black;
            }
        </style>
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