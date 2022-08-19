<div
    class="h-screen overflow-hidden text-white main-wrapper"
    x-data="{
        showMenu: false,
        page: 0,
        bgVideo: null,
        bgDuration: 0,
        scrolled: 0,
        splashFade: false,
        get videoEnd() { return this.scrolled * this.bgDuration; },
        changeScroll() {
            let el = document.getElementById('page' + this.page);
            if (!el) return;

            const top = parseInt(window.getComputedStyle(el.firstElementChild).getPropertyValue('padding-top'));
            const bottom = parseInt(window.getComputedStyle(el.firstElementChild).getPropertyValue('padding-bottom'));
            this.scrolled = -(el.getBoundingClientRect().top - top) / (el.offsetHeight - bottom);

            if (!$refs.bgvideo) return;

            if ($refs.bgvideo.currentTime > this.videoEnd) {
                $refs.bgvideo.currentTime = this.videoEnd;
            } else {
                $refs.bgvideo.play();
            }
        },
        onVideoProgress() {
            if ($refs.bgvideo && $refs.bgvideo.currentTime >= this.videoEnd) {
                $refs.bgvideo.pause();
            }
        }
    }"
>
    <!-- Background -->
    <div class="fixed z-0 w-full h-full bg-cover" style="background-image: url('/images/scene_001.png');">
        <template x-if="bgVideo">
            <video
                x-ref="bgvideo"
                class="object-cover w-full h-screen bg-video"
                :src="'/videos/' + bgVideo"
                @durationchange="bgDuration = $event.target.duration"
                @timeupdate="onVideoProgress"
                muted="true">
            </video>
            <div class="hidden">
                @foreach ($currentScreen->pages as $page)
                <video src="{{ url('/videos/' . $page->bg_video) }}" preload="auto" muted="true"></video>
                @endforeach
            </div>
        </template>
    </div>

    <!-- Stars -->
    <div class="absolute z-30 overflow-hidden bg-stars anim-fade-in-slow" x-data>
        <template x-for="s in 100">
            <i x-bind:style="{ top: Math.floor(Math.random() * window.innerHeight) + 'px', left: Math.floor(Math.random() * window.innerWidth) + 'px', 'font-size': Math.floor(Math.random() * 12) + 24 + 'px' }">.</i>
        </template>
    </div>

    <!-- Menu Overlay -->
    <nav class="fixed z-50 w-full h-screen bg-cover" x-cloak x-show="showMenu" x-transition:enter="anim-fade-in" x-transition:leave="anim-fade-out" style="background-image: url('/images/scene_001.png');">
        <div class="fixed flex justify-between w-full p-8">
            <a class="flex items-center text-2xl" href="{{ route('app') }}">
                <img class="w-8 h-8 mr-2" src="{{ url('/images/100inSpace_Identity.png') }}">
                <span>{{ env('APP_NAME') }}</span>
            </a>
            <a class="menu-toggle" x-on:click="showMenu = false" href="javascript:void(0);">
                <i class="fa-solid fa-xmark"></i>
            </a>
        </div>
        <div class="flex items-center justify-center h-full main-menu">
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
        <div class="fixed bottom-0 w-full p-8">
            <div class="flex items-center justify-center">
                <span class="text-xs whitespace-nowrap">Powered by &nbsp;</span>
                <img class="w-auto h-8" src="{{ url('/images/Enpulsion_Logo_Scaled.png') }}">
            </div>
        </div>
    </nav>

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
    <main x-ref="pages" @scroll.throttle="changeScroll" class="fixed z-20 w-full overflow-y-auto top-24 bottom-24 no-scrollbar snap snap-y snap-mandatory anim-page-in">
        @if ($showSplash)
        <!-- Splash -->
        <section
            id="page0"
            class="w-full h-full mb-64 snap-start"
            :class="{ 'anim-fade-in-slow': page === 0 && scrolled }"
            x-intersect="page = 0; bgVideo = '';"
            @click="document.querySelector('#page1').scrollIntoView({ behavior: 'smooth' });"
        >
            <div class="flex items-center justify-center h-full">
                <img
                    class="w-60 h-60 anim-splash-logo animate__infinite"
                    :class="{ 'anim-splash-fade': (page === 0 && scrolled > 0.375) || splashFade }"
                    src="{{ url('/images/100inSpace_Identity.png') }}"
                >
            </div>
        </section>
        @endif
        <!-- Screen Pages -->
        @foreach ($currentScreen->pages as $p => $page)
        <section
            id="page{{ $p + 1 }}"
            class="w-full min-h-screen snap-start"
            :class="{ 'anim-fade-in-slow': visible }"
            x-data="{ visible: false, viewed: 0 }"
            x-intersect="bgVideo = '{{ $page->bg_video }}'"
            x-intersect:enter="visible = true; page = {{ $p + 1 }};"
            x-intersect:leave="visible = false"
        >
            @if($page->video)
            <div class="flex justify-center video-content">
                <div class="w-10/12 bg-no-repeat bg-contain sm:w-3/4" style="background-image: url('/images/videoContainer.svg');">
                    <div class="px-1 py-9">
                        <iframe class="w-full" src="{{ $page->video }}" style="height: 60vh;" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            @else
            <div class="page-content">
                @if($page->title)
                <h1 class="mb-4 leading-none heading outlined" id="{{ Str::slug($page->title) }}">
                    {{ $page->title }}
                </h1>
                @endif
                <div class="p-4 leading-tight rounded-md shadow-lg backdrop-blur-md content-block shadow-black/25 bg-black/20">
                    &nbsp; &nbsp; &nbsp;{!! str_replace("\n", '<br><br>&nbsp; &nbsp; &nbsp;', $page->text) !!}
                </div>
            </div>
            @endif
        </section>
        @endforeach
    </main>

    <!-- Scrollbar Navigation -->
    @if (count($currentScreen->pages))
    <aside class="fixed z-20 hidden w-40 overflow-x-visible overflow-y-auto right-8 top-24 bottom-24 sm:block anim-fade-in-slow no-scrollbar" x-show="!!page" x-cloak>
        <div class="flex items-center justify-center h-full bg-line" style="background-image: url(/images/dim_line.svg);">
            <div class="grid gap-8 pr-8">
            @foreach ($currentScreen->pages as $p => $page)
                <a href="#page{{ $p + 1 }}" x-data="{ get isActive() { return page === {{ $p + 1 }}; } }">
                    <div class="flex items-center justify-end">
                        <div class="flex-none w-32 p-1 pr-2 text-xs text-right capitalize transition-opacity duration-500 opacity-50 hover:opacity-100" :class="{ 'opacity-100': isActive }">
                            {{ $page->title }}
                        </div>
                        <div class="flex-none" :class="{ 'p-1': !isActive }">
                            <div class="w-4 h-4" :class="{ 'w-6 h-6': isActive }">
                                <img x-show="isActive" src="{{ url('/images/verticalSlider-DotActive.svg') }}" x-cloak>
                                <img x-show="!isActive" src="{{ url('/images/verticalSlider-DotInactive.svg') }}" x-cloak>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
            </div>
        </div>
    </aside>
    @endif

    <!-- Footer -->
    <footer class="fixed bottom-0 z-20 w-full p-8">
        <div class="grid grid-cols-3 justify-items-stretch">
            <div>
                @if ($prevScreen)
                <a class="transition-opacity duration-500 opacity-50 hover:opacity-100" href="{{ route('app', ['screen' => $prevScreen->title]) }}">
                    <img class="inline-block w-4 h-4 rotate-180" src="{{ url('/images/arrow.svg') }}">
                    <span class="hidden ml-2 sm:inline">
                        {{ $prevScreen->title }}
                    </span>
                </a>
                @endif
            </div>
            <div class="flex items-center justify-center">
                <span class="text-xs whitespace-nowrap">Powered by &nbsp;</span>
                <img class="w-auto h-8" src="{{ url('/images/Enpulsion_Logo_Scaled.png') }}">
            </div>
            <div class="text-right">
                <span class="hidden mr-2 sm:inline">
                    {{ $currentScreen->title }}
                </span>
                @if ($nextScreen)
                <a class="transition-opacity duration-500 opacity-50 hover:opacity-100"
                    href="{{ route('app', ['screen' => $nextScreen->title]) }}"
                    @click="splashFade = true"
                >
                    <img class="inline-block w-4 h-4" src="{{ url('/images/arrow.svg') }}">
                </a>
                @endif
            </div>
        </div>
    </footer>
</div>
