@extends('layouts.app')

@section('content')
<section class="min-h-screen flex items-center justify-center bg-white dark:bg-gray-900 transition-colors duration-300">
    
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">

            <!-- Left Column -->
            <div class="order-1 lg:order-1 bg-white dark:bg-gray-900 text-gray-800 dark:text-gray-300 p-8 rounded-3xl animate-fade-in">
                <div class="space-y-4">
                    <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold leading-snug md:leading-tight">
                        Hello, I'm
                       <span class="block font-mono text-blue-600 dark:text-blue-300 overflow-hidden whitespace-nowrap border-r-4 border-gray-500 animate-typewriter">
                             {{ $data['name'] }}
                        </span>
                    </h1>
                    <p class="text-xl md:text-2xl font-medium text-gray-600 dark:text-gray-400">
                        {{ $data['title'] }}
                    </p>
                </div>
                <p class="text-base md:text-lg leading-relaxed max-w-2xl text-gray-600 dark:text-gray-400 mt-6">
                    {{ $data['bio'] }}
                </p>
                <div class="flex flex-col sm:flex-row gap-4 mt-8">
                    <a href="{{ route('portfolio.contact') }}" 
                       aria-label="Contact {{ $data['name'] }}"
                       class="btn-secondary">
                        <span>Get In Touch</span>
                        <svg class="ml-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                        </svg>
                    </a>
                </div>
            </div>

           <!-- Right Column -->
            <div class="relative order-2 lg:order-2">
                <!-- Technologies Header with Typing Effect -->
                <div class="mb-6" style="margin-top: 120px;"> <!-- Align with subtitle area -->
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200 mb-2">Technologies I work with</h3>
                    <div class="flex items-start terminal-text">
                        <span class="text-blue-600 dark:text-blue-400 mr-2">></span>
                        <span id="terminal-output-text"></span>
                        <span class="terminal-cursor" aria-hidden="true">|</span>
                    </div>
                </div>
                
                <!-- Floating Tech Logos -->
                <div class="relative w-full h-96 lg:h-[450px] bg-white dark:bg-gray-900 rounded-3xl overflow-hidden shadow-inner">
                    @foreach ($tech_logo as $index => $icon)
                        <div class="floating-logo w-16 h-16 rounded-full shadow-lg flex items-center justify-center 
                                    bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-700 
                                    transition-all duration-500 opacity-0"
                             style="position: absolute;"
                             data-tech="{{ pathinfo($icon['file'], PATHINFO_FILENAME) }}">
                            <img src="{{ asset('tech_logo/' . $icon['file']) }}" 
                                 alt="{{ pathinfo($icon['file'], PATHINFO_FILENAME) }}" 
                                 class="w-12 h-12 object-contain" 
                                 loading="lazy">
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
</section>

<!-- Page-specific styles -->
<style>
/* Click feedback animation - page-specific functionality */
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
</style>

@endsection