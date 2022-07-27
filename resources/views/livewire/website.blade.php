<div class="main-wrapper text-white h-screen">
    <!-- Main Background -->
    <div class="bg-gradient fixed w-full h-full z-0"></div>

    <!-- Stars -->
    <div class="bg-stars fixed w-full h-full z-40" x-data>
        <template x-for="s in 100">
            <i x-bind:style="{ top: Math.floor(Math.random() * window.innerHeight) + 'px', left: Math.floor(Math.random() * window.innerWidth) + 'px' }">.</i>
        </template>
    </div>

    <!-- Header -->
    <div class="fixed w-full p-8 z-10">
        <div class="w-full flex items-center justify-between">
            <div class="flex text-2xl">
                {{ $currentScreen->title }}
            </div>
            <div class="flex w-1/2 justify-end content-right">
                <a class="menu-toggle" href="#">
                    <i class="fa-solid fa-bars"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Menu overlay -->
    <div class="fixed w-full h-full bg-enpulsion z-50 hidden">
        <div class="flex justify-end content-right p-8">
            <a class="menu-toggle" href="#">
                <i class="fa-solid fa-xmark"></i>
            </a>
        </div>
        <div class="w-1/2 m-auto pt-20 main-menu">
            @foreach ($screens as $s => $screen)
            <a class="block heading" href="#">
                {{ $s + 1 }}
                |
                <span class="outlined">{{ $screen->title }}</span>
            </a>
            @endforeach
        </div>
    </div>

    <!-- Current Screen Pages -->
    <div class="fixed top-1/4 left-1/3 right-1/4 z-10 max-h-20">
        @foreach ($currentScreen->pages as $page)
        <div class="page">
            <h2 class="heading outlined">
                {{ $page->title }}
            </h2>
            <div class="content-block">
                {!! $page->text !!}
            </div>
        </div>
        @endforeach
    </div>

    <!-- Footer -->
    <div class="fixed w-full bottom-0 p-8 z-10">
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
