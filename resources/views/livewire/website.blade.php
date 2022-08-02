<div
    class="h-screen text-white main-wrapper"
    x-data="{ showMenu: false, isMuted: false }"
>
    <!-- Main Background -->
    <div class="fixed z-0 w-full h-full bg-gradient" style="background-image: url();"></div>

    <!-- Stars -->
    <div class="absolute w-full h-full overflow-hidden bg-stars anim-fade-in-up" x-data>
        <template x-for="s in 100">
            <i x-bind:style="{ top: Math.floor(Math.random() * window.innerHeight) + 'px', left: Math.floor(Math.random() * window.innerWidth) + 'px', 'font-size': Math.floor(Math.random() * 12) + 24 + 'px' }">.</i>
        </template>
    </div>

    <!-- Header -->
    <div class="fixed z-10 w-full p-8">
        <div class="flex items-center justify-between w-full">
            <div class="flex text-2xl">
                {{ $currentScreen->title }}
            </div>
            <div class="flex justify-end w-1/2 content-right">
                <a class="menu-toggle" href="javascript:void(0);" x-on:click="showMenu = true">
                    <i class="fa-solid fa-bars"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Menu overlay -->
    <div class="fixed z-50 w-full h-full bg-gradient" :class="{ 'hidden': !showMenu }">
        <div class="flex justify-end p-8 content-right">
            <a class="menu-toggle" x-on:click="showMenu = false" href="javascript:void(0);">
                <i class="fa-solid fa-xmark"></i>
            </a>
        </div>
        <div class="w-1/2 pt-20 m-auto main-menu">
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
    <main class="fixed z-20 w-full max-h-screen overflow-y-scroll snap snap-y snap-mandatory">
        <!-- Splash -->
        <section class="w-full h-screen snap-start anim-splash">
            <div class="flex items-center justify-center h-full">
                <a href="javascript:void(0);">
                    <img class="w-60 h-60" src="{{ url('/images/100inSpace_Identity.png') }}">
                </a>
            </div>
        </section>

        @foreach ($currentScreen->pages as $page)
        <section class="w-full h-screen py-20 pl-1/2 snap-start">
            <h2 class="heading outlined">
                {{ $page->title }}
            </h2>
            <div class="content-block">
                {!! $page->text !!}
            </div>
        </section>
        @endforeach
    </main>

    <!-- Footer -->
    <div class="fixed bottom-0 z-10 w-full p-8">
        <div class="flex items-center justify-between w-full">
            <div class="flex items-center text-2xl">
                {{ env('APP_NAME') }}
            </div>
            <div class="flex justify-end w-1/2 content-right">
                <a x-on:click="isMuted = !isMuted" href="javascript:void(0);">
                    <i class="fa-solid" :class="{ 'fa-volume-xmark': isMuted, 'fa-volume-up': !isMuted }"></i>
                </a>
            </div>
        </div>
    </div>
</div>
