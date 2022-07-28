<div
    class="h-screen text-white main-wrapper"
    x-data="{ scroll: 0, hasStarted: false, showMenu: false, isMuted: false }"
    @wheel.window="scroll += $event.wheelDelta < 0 ? 1 : (scroll > 1 ? -1 : 0); hasStarted = !hasStarted ? $event.wheelDelta < 0 : true;"
>
    <!-- Main Background -->
    <div class="fixed z-0 w-full h-full bg-gradient"></div>

    <!-- Stars -->
    <div class="absolute w-full h-full overflow-hidden bg-stars anim-fade-in-up" x-data>
        <template x-for="s in 100">
            <i x-bind:style="{ top: Math.floor(Math.random() * window.innerHeight) + 'px', left: Math.floor(Math.random() * window.innerWidth) + 'px', 'font-size': Math.floor(Math.random() * 12) + 24 + 'px' }">.</i>
        </template>
    </div>

    <!-- Splash -->
    <div class="fixed z-10 w-full h-full anim-splash" :class="{ 'anim-splash-fade': hasStarted }">
        <div class="flex items-center justify-center h-full">
            <a href="javascript:void(0);" x-on:click="scroll = 1; hasStarted = true;">
                <img class="w-60 h-60" src="{{ url('/images/100inSpace_Identity.png') }}">
            </a>
        </div>
    </div>

    <!-- Main Content -->
    <div class="z-10 hidden" :class="{ 'hidden': !hasStarted }">
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
        <div class="fixed z-20 top-20">
            <!-- Page 1 -->
            <div class="fixed z-20 hidden" :class="{ 'hidden': scroll != 1, 'anim-fade-in-up': scroll == 1 }">
                <div class="flex items-center justify-center h-full">
                    <img src="https://via.placeholder.com/1900x600">
                </div>
            </div>

            @foreach ($currentScreen->pages as $page)
            <div class="page top-1/4 left-1/3 right-1/4 max-h-20" :class="{ 'hidden': scroll != 2, 'anim-fade-in-up': scroll == 2 }">
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
</div>
