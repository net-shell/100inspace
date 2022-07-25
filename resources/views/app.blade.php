<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ env('APP_NAME') }}</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" >
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        @vite('resources/css/app.css')
    </head>
    <body class="text-white">
        <div class="h-screen main-wrapper">
            <div class="fixed w-full p-8">
                <div class="w-full flex items-center justify-between">
                    <div class="flex text-2xl">
                        Title
                    </div>
                    <div class="flex w-1/2 justify-end content-right">
                        <a class="menu-toggle" href="#">
                            <i class="fa-solid fa-bars"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="fixed top-1/4 left-1/3 right-1/4 max-h-20">
                <div class="page">
                    <h2 class="heading">
                        Celebrating
                        <br>
                        100 In Space
                    </h2>
                    <div class="content-block">
                        @for ($a=0; $a<12; $a++)
                            <p>Lorem ipsum dolor sit amet dsadsada dfmenfenu  bkfb mhas jdkjsabhkba sjbdk absdb k sbhdak bsakh bjn dsnasnu ndinsin owjeonif eiwnii...</p>
                        @endfor
                    </div>
                </div>
            </div>

            <div class="fixed w-full bottom-0 p-8">
                <div class="w-full flex items-center justify-between">
                    <div class="flex items-center text-2xl">
                        {{ env('APP_NAME') }}
                    </div>
                    <div class="flex w-1/2 justify-end content-right">
                        <a href="#">
                            <i class="fa-solid fa-volume-xmark"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @vite('resources/js/app.js')
    </body>
</html>
