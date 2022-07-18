<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ env('APP_NAME') }}</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" >
        @vite('resources/css/app.css')
    </head>
    <body class="text-white">
        <div class="h-screen bg-blue-900">
            <div class="fixed container mx-auto p-6">
                <div class="w-full flex items-center justify-between">
                    <div class="flex items-center text-2xl">
                        Title
                    </div>
                    <div class="flex w-1/2 justify-end content-right">
                        Menu
                    </div>
                </div>
            </div>

            <div class="fixed top-1/3 left-1/3 right-1/4 p-6 pl-24">
                <h2 class="text-4xl text-center">
                    Heading Goes To Several Lines
                </h2>
                <div>
                    @for ($a=0; $a<12; $a++)
                        <p>Lorem ipsum dolor sit amet...</p>
                    @endfor
                </div>
            </div>

            <div class="fixed bottom-0 p-6">
                {{ env('APP_NAME') }}
            </div>
        </div>
        @vite('resources/js/app.js')
    </body>
</html>
