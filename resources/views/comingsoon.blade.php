<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ env('APP_NAME') }}</title>

        @vite('resources/css/app.css')
        @livewireStyles
    </head>
    <body>
        <video class="object-cover w-full h-screen sm:hidden" src="{{ url('/videos/ENPULSION_100inspace_Mobile_170622.mp4'); }}" autoplay="true" loop="true" muted="false" preload="auto"></video>
        <video class="hidden object-cover w-full h-screen md:block" src="{{ url('/videos/ENPULSION_100inspace_Web_170622.mp4'); }}" autoplay="true" loop="true" muted="false" preload="auto"></video>
    </body>
</html>
