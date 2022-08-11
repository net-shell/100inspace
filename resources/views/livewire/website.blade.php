<div
    class="h-screen overflow-hidden text-white main-wrapper"
    x-data="{ showMenu: false, hasStarted: {{ +!$showSplash }}, isMuted: false, bgVideo: null }"
>
    <!-- Main Background -->
    <div class="fixed z-0 w-full h-full bg-cover" style="background-image: url('/images/scene_001.png');">
        <template x-if="bgVideo">
            <video class="object-cover w-full h-screen" :src="'/videos/' + bgVideo" autoplay="true" muted="true"></video>
        </template>
    </div>

    <!-- Stars -->
    <div class="absolute z-30 overflow-hidden bg-stars anim-fade-in" x-data>
        <template x-for="s in 100">
            <i x-bind:style="{ top: Math.floor(Math.random() * window.innerHeight) + 'px', left: Math.floor(Math.random() * window.innerWidth) + 'px', 'font-size': Math.floor(Math.random() * 12) + 24 + 'px' }">.</i>
        </template>
    </div>

    <!-- Menu Overlay -->
    <nav class="fixed z-50 w-full h-full bg-cover" x-cloak x-show="showMenu" x-transition:enter="anim-fade-in" x-transition:leave="anim-fade-out" style="background-image: url('/images/scene_001.png');">
        <div class="flex justify-end p-8 content-right">
            <a class="menu-toggle" x-on:click="showMenu = false" href="javascript:void(0);">
                <i class="fa-solid fa-xmark"></i>
            </a>
        </div>
        <div class="flex items-center justify-center main-menu">
            <div>
                @foreach ($screens as $s => $screen)
                <a class="block heading" href="{{ route('app', ['screen' => $screen->title]) }}">
                    <span class="number">{{ $s + 1 }} | </span>
                    <span class="{{ $currentScreen->id === $screen->id ? 'accent' : 'outlined white' }}">{{ $screen->title }}</span>
                </a>
                @endforeach
                <a class="block heading" href="https://www.enpulsion.com/">
                    <span class="number">{{ count($screens) + 1 }} | </span>
                    <span class="outlined white">VISIT ENPULSION</span>
                </a>
            </div>
        </div>
    </nav>

    @if($showSplash)
    <!-- Splash -->
    <section class="fixed z-40 w-full h-screen" x-transition:enter="anim-splash-fade" x-transition:leave="anim-splash-fade" x-show="!hasStarted" @click="hasStarted = true">
        <div class="flex items-center justify-center h-full">
            <img class="w-60 h-60 anim-splash-logo animate__infinite" src="{{ url('/images/100inSpace_Identity.png') }}">
        </div>
    </section>
    @endif

    <!-- Header -->
    <header class="fixed z-30 w-full p-8">
        <div class="flex items-center justify-between w-full">
            <a class="flex items-center text-2xl" href="{{ route('app') }}">
                <img class="w-8 h-8 mr-2" src="{{ url('/images/100inSpace_Identity.png') }}">
                <span>{{ env('APP_NAME') }}</span>
            </a>
            <div class="flex justify-end content-right">
                <a class="menu-toggle" href="javascript:void(0);" x-on:click="showMenu = true">
                    <i class="fa-solid fa-bars"></i>
                </a>
            </div>
        </div>
    </header>

    <!-- Current Screen Pages -->
    <main class="fixed z-20 w-full overflow-y-auto top-20 bottom-20 no-scrollbar snap snap-y snap-mandatory anim-page-in"
        x-cloak x-show="hasStarted">
        @foreach ($currentScreen->pages as $page)
        <section
            class="w-full min-h-screen snap-start"
            :class="{ 'anim-fade-in': visible }"
            x-data="{ visible: false }"
            x-transition:enter="anim-fade-in"
            x-intersect="bgVideo = '{{ $page->bg_video }}'"
            x-intersect:enter="visible = true"
            x-intersect:leave="visible = false">
            @if($page->video)
            <div class="flex justify-center">
                <div class="w-10/12 mask-video sm:w-3/4" style="-webkit-mask-image: url('{{ url('/images/videoContainer.svg') }}'); mask-image: url('{{ url('/images/videoContainer.svg') }}');">
                    <iframe class="w-full" src="{{ $page->video }}" style="aspect-ratio: 16 / 10;" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
            @else
            <div class="page-content">
                @if($page->title)
                <h1 class="heading outlined narrow-line" id="{{ Str::slug($page->title) }}">
                    {{ $page->title }}
                </h1>
                @endif
                <div class="content-block">
                    &nbsp; &nbsp; &nbsp;{!! str_replace("\n", '<br><br>&nbsp; &nbsp; &nbsp;', $page->text) !!}
                </div>
            </div>
            @endif
        </section>
        @endforeach
    </main>

    <!-- Footer -->
    <footer class="fixed bottom-0 z-20 w-full p-8">
        <div class="flex items-center justify-between">
            <div class="flex items-left">
            </div>
            <div class="flex justify-center">
                <span>Powered by &nbsp;</span>
                <img class="w-auto h-8" src="{{ url('/images/Enpulsion_Logo_Scaled.png') }}">
            </div>
            <div class="flex items-right">
                <a href="">
                    {{ $currentScreen->title }}
                    &rArr;
                </a>
            </div>
        </div>
    </footer>
</div>
