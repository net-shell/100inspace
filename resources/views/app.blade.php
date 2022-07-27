<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ env('APP_NAME') }}</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" >
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:900,400,300' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Ubuntu:900,400,300' rel='stylesheet' type='text/css'>
        @vite('resources/css/app.css')
        @livewireStyles
    </head>
    <body>
        <div class="antialiased">
            @livewire('website')
        </div>
        @livewireScripts
        @vite('resources/js/app.js')
    </body>
</html>
