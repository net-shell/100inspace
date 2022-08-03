<div
    class="h-screen overflow-hidden text-white main-wrapper"
    x-data="{ showMenu: false, hasStarted: false, isMuted: false, videoNumber: null }"
>
    <!-- Main Background -->
    <div class="fixed z-0 w-full h-full bg-cover bg-gradient" style="background-image: url('/images/scene_001.png');">
        <template x-if="videoNumber">
            <video class="object-cover w-full h-screen" :src="'/videos/sceneTransition_00' + videoNumber + '-HQ.mp4'" autoplay="true" muted="true"></video>
        </template>
    </div>

    <!-- Stars -->
    <div class="absolute w-full h-full overflow-hidden bg-stars anim-fade-in" x-data>
        <template x-for="s in 100">
            <i x-bind:style="{ top: Math.floor(Math.random() * window.innerHeight) + 'px', left: Math.floor(Math.random() * window.innerWidth) + 'px', 'font-size': Math.floor(Math.random() * 12) + 24 + 'px' }">.</i>
        </template>
    </div>

    <!-- Navigation Menu Overlay -->
    <nav class="fixed z-50 hidden w-full h-full bg-gradient" :class="{ 'anim-fade-out': !showMenu, 'anim-fade-in': showMenu, 'hidden': !showMenu }">
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
    </nav>

    <!-- Splash -->
    <section class="fixed z-20 w-full h-screen anim-splash" :class="{ 'anim-splash-fade': hasStarted }">
        <div class="flex items-center justify-center h-full">
            <a href="javascript:void(0);" x-on:click="hasStarted = true; videoNumber = 1;">
                <img class="w-60 h-60" src="{{ url('/images/100inSpace_Identity.png') }}">
            </a>
        </div>
    </section>

    <!-- Header -->
    <header class="fixed z-30 hidden w-full p-8" :class="{ 'hidden': !hasStarted }">
        <div class="flex items-center justify-between w-full">
            <div class="flex items-center text-2xl">
                <img class="w-8 h-8 mr-2" src="{{ url('/images/100inSpace_Identity.png') }}">
                <span>{{ env('APP_NAME') }}</span>
            </div>
            <div class="flex justify-end content-right">
                <a class="menu-toggle" href="javascript:void(0);" x-on:click="showMenu = true">
                    <i class="fa-solid fa-bars"></i>
                </a>
            </div>
        </div>
    </header>

    <!-- Current Screen Pages -->
    <main class="fixed z-20 hidden w-full max-h-screen overflow-y-auto no-scrollbar snap snap-y snap-mandatory" :class="{ 'hidden': !hasStarted }">
        @foreach ($currentScreen->pages as $page)
        <section class="relative w-full h-screen snap-start">
            <div class="absolute left-1/2 top-1/4 right-1/4 bottom-1/4">
                @if($page->title)
                <h1 class="heading outlined">
                    {{ $page->title }}
                </h1>
                @endif
                <div class="content-block">
                    {!! html_entity_decode($page->text) !!}
                </div>
            </div>
        </section>
        @endforeach
    </main>

    <!-- Footer -->
    <footer class="fixed bottom-0 z-20 hidden w-full p-8" :class="{ 'hidden': !hasStarted }">
        <div class="flex items-center justify-between">
            <div class="flex items-center text-2xl">
                {{ env('APP_NAME') }}
            </div>
            <div class="flex items-center justify-center">
                <span>Powered by</span>
                <img class="w-auto h-8" src="{{ url('/images/Enpulsion_Logo_Scaled.png') }}">
            </div>
            <div class="flex justify-end items-right">
                <a x-on:click="isMuted = !isMuted" href="javascript:void(0);">
                    <i class="fa-solid" :class="{ 'fa-volume-xmark': isMuted, 'fa-volume-up': !isMuted }"></i>
                </a>
            </div>
        </div>
    </footer>
</div>
