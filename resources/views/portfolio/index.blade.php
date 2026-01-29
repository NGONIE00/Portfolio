@extends('layouts.app')

@section('content')
<section class="min-h-screen bg-white dark:bg-gray-900 transition-colors duration-300 px-4 py-8">
    <div class="w-full max-w-7xl mx-auto">

        <!-- ===== Page Header / Name Section ===== -->
        <div class="mb-8 md:mb-12 text-gray-800 dark:text-gray-300 animate-fade-in">
            <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold leading-tight">
                Hello, I'm
                <span class="block font-mono text-blue-600 dark:text-blue-400 mt-2 
                             overflow-hidden whitespace-nowrap border-r-4 border-blue-500 
                             animate-typewriter max-w-fit">
                    {{ $data['name'] }}
                </span>
            </h1>
            <p class="mt-2 text-lg sm:text-xl md:text-2xl font-medium text-gray-600 dark:text-gray-400">
                {{ $data['title'] }}
            </p>
        </div>

        <!-- ===== Main Grid ===== -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 md:gap-10 lg:gap-12 items-start">

            <!-- Left Column -->
            <div class="text-gray-800 dark:text-gray-300 space-y-6 md:space-y-8">

                <!-- Bio -->
                <p class="text-sm sm:text-base md:text-lg leading-relaxed text-gray-600 dark:text-gray-400 max-w-2xl">
                    {{ $data['bio'] }}
                </p>

                <!-- CTA -->
                <div>
                    <a href="{{ route('portfolio.contact') }}" 
                       aria-label="Contact {{ $data['name'] }}"
                       class="inline-flex items-center justify-center px-6 py-3 md:px-8 md:py-4 
                              border-2 border-gray-400 dark:border-gray-600 
                              text-gray-700 dark:text-gray-300 
                              font-semibold rounded-full 
                              hover:border-blue-600 hover:text-blue-600 
                              dark:hover:border-blue-400 dark:hover:text-blue-400 
                              transition-all duration-300 hover:scale-105 
                              focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2
                              w-full sm:w-auto text-center">
                        <span class="text-base md:text-lg">Get In Touch</span>
                        <svg class="ml-2 h-5 w-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                  d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Right Column -->
            <div class="w-full space-y-4 md:space-y-6">

                <!-- Tech Header -->
                <div class="mt-4">
                    <h3 class="text-base sm:text-lg md:text-xl font-semibold text-gray-800 dark:text-gray-200 mb-2">
                        Technologies I work with
                    </h3>
                    <div class="flex items-start font-mono text-sm md:text-base text-gray-600 dark:text-gray-400">
                        <span class="text-blue-600 dark:text-blue-400 mr-2">></span>
                        <div class="flex items-center min-h-[1.5rem]">
                            <span id="terminal-output-text" class="inline-block"></span>
                            <span class="terminal-cursor text-blue-600 dark:text-blue-400 ml-0.5">|</span>
                        </div>
                    </div>
                </div>

                <!-- ===== Blended Tech Logos (No Card) ===== -->
                <div class="relative w-full min-h-[16rem] sm:min-h-[20rem] md:min-h-[24rem] overflow-hidden">
                    @foreach ($tech_logo as $icon)
                        <div class="floating-logo w-12 h-12 sm:w-14 sm:h-14 md:w-16 md:h-16
                                    rounded-full shadow-md hover:shadow-lg 
                                    flex items-center justify-center 
                                    bg-white dark:bg-gray-800 
                                    hover:bg-gray-50 dark:hover:bg-gray-700 
                                    border border-gray-200 dark:border-gray-600
                                    transition-all duration-500 opacity-0 cursor-pointer
                                    active:scale-95"
                             style="position: absolute;"
                             data-tech="{{ pathinfo($icon['file'], PATHINFO_FILENAME) }}"
                             role="button"
                             tabindex="0"
                             aria-label="{{ pathinfo($icon['file'], PATHINFO_FILENAME) }} technology">
                            <img src="{{ asset('tech_logo/' . $icon['file']) }}" 
                                 alt="{{ pathinfo($icon['file'], PATHINFO_FILENAME) }}" 
                                 class="w-8 h-8 sm:w-10 sm:h-10 md:w-12 md:h-12 object-contain pointer-events-none"
                                 loading="lazy">
                        </div>
                    @endforeach
                </div>

                <!-- Mobile Hint -->
                <p class="text-xs sm:text-sm text-center text-gray-500 dark:text-gray-500 lg:hidden">
                    💡 Tap on a logo to see the technology name
                </p>
            </div>

        </div>
    </div>
</section>

<!-- ===== Page-specific styles ===== -->
<style>
@keyframes clickPulse {
    0% { transform: scale(1); box-shadow: 0 0 0 0 rgba(59,130,246,.5); }
    50% { transform: scale(1.05); box-shadow: 0 0 0 10px rgba(59,130,246,.1); }
    100% { transform: scale(1); box-shadow: 0 0 0 0 rgba(59,130,246,0); }
}
.floating-logo.clicked { animation: clickPulse .3s ease-out; }

@keyframes blink {
    0%,50% { opacity: 1; }
    51%,100% { opacity: 0; }
}
.terminal-cursor { animation: blink 1s infinite; }

@media (hover: none) and (pointer: coarse) {
    .floating-logo { min-width: 3rem; min-height: 3rem; }
}

@media (max-width: 360px) {
    .floating-logo { width: 2.5rem; height: 2.5rem; }
    .floating-logo img { width: 1.75rem; height: 1.75rem; }
}
</style>
@endsection