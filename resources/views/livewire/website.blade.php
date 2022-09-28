<div class="h-screen overflow-hidden text-white main-wrapper" x-data="{
        showMenu: false,
        page: 0,
        bgImage: null,
        bgVideo: null,
        bgPoster: null,
        scrolled: 0,
        splashFade: false,
        changeScroll() {
            const el = document.getElementById('page' + this.page);
            if (!el) return;
            const top = parseInt(window.getComputedStyle(el.firstElementChild).getPropertyValue('padding-top'));
            const bottom = parseInt(window.getComputedStyle(el.firstElementChild).getPropertyValue('padding-bottom'));
            this.scrolled = -(el.getBoundingClientRect().top - top) / (el.offsetHeight - bottom);
        },
        stopEmbedded() {
            const els = document.getElementsByClassName('youtube-embed');
            if (!els || !els.length) return;
            for (var f = 0; f < els.length; f++) {
                els[f].src = els[f].src;
            }
        },
    }">
    <!-- Background -->
    <div class="fixed z-0 w-full h-full bg-black bg-cover" style="background-image: url('/images/{{ $currentScreen->bg_image ?? 'scene_001.png' }}');">
        <template x-if="bgImage">
            <div :style="{ 'background-image': 'url(/images/content/' + bgImage + ')' }" class="w-full h-full bg-left-bottom bg-no-repeat bg-contain"></div>
        </template>
        <template x-if="bgVideo">
            <video x-ref="bgvideo" class="object-cover w-full h-screen bg-video" :src="'/videos/' + bgVideo" :poster="bgPoster" autoplay muted="true">
            </video>
        </template>
    </div>

    <!-- Stars -->
    <div class="absolute w-full h-full overflow-hidden bg-stars anim-fade-in-slow" x-data>
        <template x-for="s in 100">
            <i x-bind:style="{ top: Math.floor(Math.random() * window.innerHeight) + 'px', left: Math.floor(Math.random() * window.innerWidth) + 'px', 'font-size': Math.floor(Math.random() * 12) + 24 + 'px' }">.</i>
        </template>
    </div>

    <!-- Menu Overlay -->
    <nav class="fixed z-50 w-full h-screen bg-cover" x-cloak x-show="showMenu" x-transition:enter="anim-fade-in" x-transition:leave="anim-fade-out" style="background-image: url('/images/{{ $currentScreen->bg_image ?? 'scene_001.png' }}');">
        <div class="fixed flex justify-between w-full p-8">
            <a class="flex items-center text-xl" href="{{ route('app') }}">
                <img class="w-8 h-8 mr-2" src="{{ url('/images/100inSpace_Identity.png') }}">
                <img class="h-8" src="{{ url('/images/100inSpace_Logotype.svg') }}">
            </a>
            <div class="flex items-center">
                @if (env('SUBSCRIBE_URL'))
                <a href="{{ env('SUBSCRIBE_URL') }}" class="px-4 py-2 mr-4 text-orange-400 transition-colors border border-orange-400 hover:text-orange-300 hover:border-orange-300">
                    SUBSCRIBE
                </a>
                @endif
                <a class="menu-toggles" x-on:click="showMenu = false" href="javascript:void(0);">
                    <i class="fa-solid fa-xmark fa-fw"></i>
                </a>
            </div>
        </div>
        <div class="flex items-center justify-center h-full main-menu">
            <div>
                @foreach ($screens as $s => $screen)
                <a class="block heading" href="{{ route('app', ['screen' => $screen->slug]) }}">
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
        <div class="fixed bottom-0 w-full p-8 pb-4">
            <a href="https://www.enpulsion.com/" class="flex items-center justify-center">
                <span class="text-xs whitespace-nowrap">Powered by &nbsp;</span>
                <img class="w-auto h-8" src="{{ url('/images/Enpulsion_Logo_Scaled.png') }}">
            </a>
            <div class="flex justify-between items-top">
                <div>
                    <small class="inline leading-none opacity-50 sm:block">
                        © 2022 ENPULSION GmbH. All rights reserved.
                    </small>
                </div>
                <div class="text-right">
                    <a class="opacity-50 hover:opacity-100" href="{{ route('app', ['screen' => 'imprint']) }}">
                        <small>Imprint</small>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <header class="fixed z-30 w-full p-8">
        <div class="flex items-center justify-between w-full">
            <div class="flex items-center">
                <a class="flex items-center" href="{{ route('app') }}">
                    <img class="w-8 h-8 mr-2" src="{{ url('/images/100inSpace_Identity.png') }}">
                    <img class="h-8" src="{{ url('/images/100inSpace_Logotype.svg') }}">
                </a>
                @if (!$isLanding)
                <span class="pl-2 ml-2 border-l border-white opacity-50">
                    {{ $currentScreen->title }}
                </span>
                @endif
            </div>
            <div class="flex justify-end content-right">
                @if (env('SUBSCRIBE_URL'))
                <a href="{{ env('SUBSCRIBE_URL') }}" class="hidden px-4 py-2 mr-4 text-orange-400 transition-colors border border-orange-400 sm:block hover:text-orange-300 hover:border-orange-300">
                    SUBSCRIBE
                </a>
                @endif
                <a class="menu-toggle" href="javascript:void(0);" x-on:click="showMenu = true">
                    <i class="fa-solid fa-bars"></i>
                </a>
            </div>
        </div>
    </header>

    <!-- Current Screen Pages -->
    <main x-ref="pages" @scroll.throttle="changeScroll" class="fixed z-20 w-full overflow-y-auto top-24 bottom-24 no-scrollbar snap snap-y snap-mandatory anim-page-in" :class="{ 'pages-static': {{ +$isHidden }} }">
        @if ($isLanding)
        <!-- Splash -->
        <section id="page0" class="w-full h-full mb-64" :class="{ 'anim-fade-in-slow': page === 0 && scrolled }" x-intersect="page = 0; bgVideo = '';" x-on:click="document.querySelector('#page1').scrollIntoView({ behavior: 'smooth' });">
            <div class="flex flex-col items-center justify-center h-full gap-16">
                <img class="w-60 h-60 anim-splash-logo animate__infinite" :class="{ 'anim-splash-fade': (page === 0 && scrolled > 0.375) || splashFade }" src="{{ url('/images/100inSpace_Identity.png') }}">
                <img class="w-12 h-12 animate-bounce" src="{{ url('/images/arrow-Swipe.svg') }}">
            </div>
        </section>
        @endif

        <!-- Screen Pages -->
        @foreach ($currentScreen->pages as $p => $page)
        <section id="page{{ $p + 1 }}" class="w-full min-h-screen" :class="{ 'anim-fade-in-slow': visible }" x-data="{ visible: false, viewed: 0 }" x-intersect="bgVideo = '{{ $page->bg_video }}'; bgPoster = '{{ $page->bg_poster }}'; bgImage = '{{ $page->bg_image }}';" x-intersect:leave="stopEmbedded(); visible = false;">
            <div class="page-content" x-intersect="visible = true; page = {{ $p + 1 }};">
                @if ($page->title)
                <h1 class="mb-4 leading-none heading {{ $isHidden ? 'text-center' : 'outlined' }}" id="{{ Str::slug($page->title) }}">
                    {{ $page->title }}
                </h1>
                @endif

                @if ($page->image || $page->getMedia('gallery'))
                <div class="p-8 sm:fixed sm:top-1/3 sm:left-8 page-gallery" x-show="page == {{ $p + 1 }}" x-transition.opacity x-cloak>
                    @if ($page->image)
                    <img src="{{ url('/images/content/' . $page->image) }}">
                    @endif

                    @if ($page->getMedia('gallery'))
                    <div class="gallery" x-data="{ current: 0 }">
                        <div x-on:click="current++; if(current === {{ $page->getMedia('gallery')->count() }}) current = 0;">
                            @foreach ($page->getMedia('gallery') as $i => $image)
                            <div x-show="current === {{ $i }}" x-cloak>
                                {{ $image }}
                            </div>
                            @endforeach
                        </div>

                        <div class="flex justify-center gap-2 py-2">
                            @foreach ($page->getMedia('gallery') as $i => $image)
                            <div class="w-3 h-3 transition-colors rounded-full bg-white/50 hover:bg-white" :class="{ 'bg-white': current === {{ $i }} }" x-on:click="current = {{ $i }}">&nbsp;</div>
                            @endforeach
                        </div>
                    </div>
                    @endif
                </div>
                @endif

                <div class="leading-tight shadow-sm content-block">
                    &nbsp; &nbsp; &nbsp;{!! str_replace("\n", '<br><br>' . ($isHidden ? '' : '&nbsp; &nbsp; &nbsp;'), $page->text) !!}
                </div>

                @if ($page->video)
                <!-- YouTube Embed -->
                <div class="py-8 video-content">
                    <iframe class="w-full aspect-video youtube-embed" src="{{ $page->video }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                @endif

                @if ($page->learn_more)
                <!-- Learn More -->
                <nav class="flex justify-center py-8" x-data="{ open: false }">
                    <a x-on:click="open = true" class="block p-4 text-sm button whitespace-nowrap sm:text-base" href="javascript: void(0);">
                        Learn More
                    </a>
                    <div x-show="open" x-transition x-cloak class="fixed top-0 left-0 z-50 flex items-center justify-center w-full h-full backdrop-blur-sm">
                        <div class="w-1/2 p-4 overflow-y-auto rounded-md h-1/2 bg-black/80" x-on:click.outside="open = false">
                            {!! str_replace("\n", '<br>', $page->learn_more) !!}
                        </div>
                    </div>
                </nav>
                @endif

                @if ($isLanding && $p === $currentScreen->pages->count() - 1)
                <!-- Landing Navigation Buttons -->
                <nav class="grid items-center grid-cols-3 gap-2 py-8 justify-items-stretch">
                    @foreach ($screens->slice(1, $screens->count()) as $screen)
                    <a class="block py-4 text-sm button whitespace-nowrap sm:text-base" href="{{ route('app', ['screen' => $screen->slug]) }}">
                        {{ $screen->title }}
                    </a>
                    @endforeach
                </nav>
                @endif
            </div>
        </section>
        @endforeach
    </main>

    <!-- Scrollbar Navigation -->
    @if ($currentScreen->id != $screens->first()->id && ! $currentScreen->hidden && count($currentScreen->pages) > 1)
    <aside class="fixed z-20 hidden overflow-x-visible overflow-y-auto w-50 right-8 top-24 bottom-24 sm:block anim-fade-in-slow no-scrollbar" x-show="!!page" x-cloak>
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

    @if (env('MODAL_REASON'))
    <nav class="flex justify-center py-8" x-data="{ open: true }">
        <div x-show="open" x-transition class="fixed top-0 left-0 z-50 flex items-center justify-center w-full h-full backdrop-blur-lg">
            <div class="flex items-center justify-center w-1/4 py-12 text-center rounded-full h-1/2 bg-black/80" x-on:click.outside="open = false">
                <span>{{ env('MODAL_REASON') }}</span>
            </div>
        </div>
    </nav>
    @endif

    <!-- Footer -->
    <footer class="fixed bottom-0 z-20 w-full p-8 pb-4">
        <div class="grid items-center grid-cols-3 justify-items-stretch">
            <div>
                @if ($prevScreen)
                <a class="inline sm:block" href="{{ route('app', ['screen' => $prevScreen->slug]) }}">
                    <img class="inline-block w-4 h-4 rotate-180" src="{{ url('/images/arrow.svg') }}">
                    <span class="hidden ml-2 sm:inline">
                        {{ $prevScreen->title }}
                    </span>
                </a>
                @endif
            </div>
            <a href="https://www.enpulsion.com/" class="flex items-center justify-center">
                <span class="text-xs whitespace-nowrap">Powered by &nbsp;</span>
                <img class="w-auto h-8" src="{{ url('/images/Enpulsion_Logo_Scaled.png') }}">
            </a>
            <div class="text-right">
                @if (!$isLanding && $nextScreen)
                <a href="{{ route('app', ['screen' => $nextScreen->slug]) }}" x-on:click="splashFade = true">
                    <span class="hidden mr-2 sm:inline">
                        {{ $nextScreen->title }}
                    </span>
                    <img class="inline-block w-4 h-4" src="{{ url('/images/arrow.svg') }}">
                </a>
                @endif
            </div>
        </div>
        <div class="flex justify-between items-top">
            <div>
                <small class="inline leading-none opacity-50 sm:block">
                    © 2022 ENPULSION GmbH. All rights reserved.
                </small>
            </div>
            <div class="text-right">
                <a class="opacity-50 hover:opacity-100" href="{{ route('app', ['screen' => 'imprint']) }}">
                    <small>Imprint</small>
                </a>
            </div>
        </div>
    </footer>
</div>
