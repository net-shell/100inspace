<div class="h-screen main-wrapper">
    <div class="fixed w-full p-8">
        <div class="w-full flex items-center justify-between">
            <div class="flex text-2xl">
                {{ $screen->title }}
            </div>
            <div class="flex w-1/2 justify-end content-right">
                <a class="menu-toggle" href="#">
                    <i class="fa-solid fa-bars"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="fixed top-1/4 left-1/3 right-1/4 max-h-20">
        @foreach ($screen->pages as $page)
        <div class="page">
            <h2 class="heading">
                {{ $page->title }}
            </h2>
            <div class="content-block">
                {!! $page->text !!}
            </div>
        </div>
        @endforeach
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
