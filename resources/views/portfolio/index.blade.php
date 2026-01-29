@extends('layouts.app')

@section('content')
<section class="min-h-screen flex items-center justify-center bg-white dark:bg-gray-900 transition-colors duration-300 px-4 py-8 md:py-12 lg:py-0">
    <div class="w-full max-w-7xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 md:gap-10 lg:gap-12 items-center lg:items-start">

            <!-- Left Column - Hero Content -->
            <div class="order-2 lg:order-1 text-gray-800 dark:text-gray-300 space-y-6 md:space-y-8 animate-fade-in">
                <!-- Greeting & Name -->
                <div class="space-y-3 md:space-y-4">
                    <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold leading-tight">
                        Hello, I'm
                        <span class="block font-mono text-blue-600 dark:text-blue-400 mt-2 overflow-hidden whitespace-nowrap border-r-4 border-blue-500 animate-typewriter max-w-fit">
                            {{ $data['name'] }}
                        </span>
                    </h1>
                    <p class="text-lg sm:text-xl md:text-2xl font-medium text-gray-600 dark:text-gray-400">
                        {{ $data['title'] }}
                    </p>
                </div>

                <!-- Bio Text -->
                <p class="text-sm sm:text-base md:text-lg leading-relaxed text-gray-600 dark:text-gray-400 max-w-2xl">
                    {{ $data['bio'] }}
                </p>

                <!-- CTA Button -->
                <div class="pt-2">
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

            <!-- Right Column - Tech Logos -->
            <div class="order-1 lg:order-2 w-full space-y-4 md:space-y-6">
                <!-- Technologies Header with Typing Effect -->
                <div class="lg:mt-8 xl:mt-16">
                    <h3 class="text-base sm:text-lg md:text-xl font-semibold text-gray-800 dark:text-gray-200 mb-2 md:mb-3">
                        Technologies I work with
                    </h3>
                    <div class="flex items-start font-mono text-sm md:text-base text-gray-600 dark:text-gray-400">
                        <span class="text-blue-600 dark:text-blue-400 mr-2 flex-shrink-0">></span>
                        <div class="flex items-center min-h-[1.5rem]">
                            <span id="terminal-output-text" class="inline-block"></span>
                            <span class="terminal-cursor text-blue-600 dark:text-blue-400 inline-block ml-0.5" aria-hidden="true">|</span>
                        </div>
                    </div>
                </div>
                
                <!-- Floating Tech Logos Container - Responsive -->
                <div class="relative w-full h-64 sm:h-80 md:h-96 lg:h-[400px] xl:h-[450px] 
                            bg-gradient-to-br from-gray-50 to-gray-100 dark:from-gray-800 dark:to-gray-900 
                            rounded-2xl md:rounded-3xl overflow-hidden shadow-inner 
                            border border-gray-200 dark:border-gray-700">
                    @foreach ($tech_logo as $index => $icon)
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

                <!-- Mobile Hint Text -->
                <p class="text-xs sm:text-sm text-center text-gray-500 dark:text-gray-500 lg:hidden">
                    💡 Tap on a logo to see the technology name
                </p>
            </div>

        </div>
    </div>
</section>

<!-- Page-specific styles -->
<style>
/* Click feedback animation */
@keyframes clickPulse {
    0% { 
        transform: scale(1); 
        box-shadow: 0 0 0 0 rgba(59, 130, 246, 0.5);
    }
    50% { 
        transform: scale(1.05); 
        box-shadow: 0 0 0 10px rgba(59, 130, 246, 0.1);
    }
    100% { 
        transform: scale(1); 
        box-shadow: 0 0 0 0 rgba(59, 130, 246, 0);
    }
}

.floating-logo.clicked {
    animation: clickPulse 0.3s ease-out;
}

/* Terminal cursor blink animation */
@keyframes blink {
    0%, 50% { opacity: 1; }
    51%, 100% { opacity: 0; }
}

.terminal-cursor {
    animation: blink 1s infinite;
}

/* Typewriter animation - Responsive border */
@media (max-width: 640px) {
    .animate-typewriter {
        border-right-width: 3px;
    }
}

/* Touch device optimizations */
@media (hover: none) and (pointer: coarse) {
    .floating-logo {
        /* Larger touch targets on mobile */
        min-width: 3rem;
        min-height: 3rem;
    }
}

/* Ensure content doesn't overflow on very small screens */
@media (max-width: 360px) {
    .floating-logo {
        width: 2.5rem;
        height: 2.5rem;
    }
    
    .floating-logo img {
        width: 1.75rem;
        height: 1.75rem;
    }
}
</style>

@endsection
