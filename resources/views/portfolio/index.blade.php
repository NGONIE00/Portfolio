@extends('layouts.app')

@section('title', 'Ngonidzashe Hunzvi - Full Stack Developer')
@section('description', 'Professional portfolio of Ngonidzashe Hunzvi, Full Stack Developer specializing in Laravel, React, and modern web technologies.')

@section('content')
<!-- Hero Section -->
<section class="min-h-screen flex items-center justify-center bg-gradient-to-br from-gray-50 via-white to-gray-100 dark:from-dark-900 dark:via-dark-800 dark:to-dark-900">
    <div class="max-w-7xl mx-auto px-6 lg:px-8 py-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Left Column - Text Content -->
            <div class="space-y-8 animate-fade-in">
                <div class="space-y-4">
                    <h1 class="text-5xl md:text-7xl font-bold text-gray-900 dark:text-white leading-tight">
                        Hello, I'm
                        <span class="block bg-gradient-to-r from-primary-600 via-purple-600 to-pink-600 bg-clip-text text-transparent">
                            {{ $data['name'] }}
                        </span>
                    </h1>
                    <p class="text-2xl md:text-3xl text-gray-600 dark:text-gray-300 font-medium">
                        {{ $data['title'] }}
                    </p>
                </div>
                
                <p class="text-lg md:text-xl text-gray-600 dark:text-gray-400 leading-relaxed max-w-2xl">
                    {{ $data['bio'] }}
                </p>
                
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('portfolio.projects') }}" 
                       class="inline-flex items-center justify-center px-8 py-4 bg-gradient-to-r from-primary-600 to-purple-600 text-white font-semibold rounded-full hover:from-primary-700 hover:to-purple-700 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                        <span>Explore My Work</span>
                        <svg class="ml-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                    <a href="{{ route('portfolio.contact') }}" 
                       class="inline-flex items-center justify-center px-8 py-4 border-2 border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 font-semibold rounded-full hover:border-primary-600 hover:text-primary-600 dark:hover:text-primary-400 transition-all duration-300">
                        <span>Get In Touch</span>
                        <svg class="ml-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                        </svg>
                    </a>
                </div>
            </div>
            
            <!-- Right Column - Visual Element -->
            <div class="relative animate-float">
                <div class="relative w-full h-96 lg:h-[500px]">
                    <!-- Main floating card -->
                    <div class="absolute inset-0 bg-gradient-to-br from-primary-500 to-purple-600 rounded-3xl shadow-2xl transform rotate-3 hover:rotate-0 transition-transform duration-500">
                        <div class="absolute inset-4 bg-white dark:bg-dark-800 rounded-2xl p-8 flex flex-col justify-center items-center text-center">
                            <div class="w-24 h-24 bg-gradient-to-br from-primary-100 to-purple-100 dark:from-primary-900 dark:to-purple-900 rounded-full flex items-center justify-center mb-6">
                                <span class="text-4xl">💻</span>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-2">Full Stack Developer</h3>
                            <p class="text-gray-600 dark:text-gray-400">Building the future, one line of code at a time</p>
                        </div>
                    </div>
                    
                    <!-- Floating elements -->
                    <div class="absolute -top-4 -right-4 w-16 h-16 bg-yellow-400 rounded-full flex items-center justify-center shadow-lg animate-bounce">
                        <span class="text-2xl">⚡</span>
                    </div>
                    <div class="absolute -bottom-4 -left-4 w-12 h-12 bg-green-400 rounded-full flex items-center justify-center shadow-lg animate-pulse">
                        <span class="text-xl">🚀</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Skills Section -->
<section class="py-20 bg-white dark:bg-dark-800">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-white mb-6">
                Skills & <span class="bg-gradient-to-r from-primary-600 to-purple-600 bg-clip-text text-transparent">Technologies</span>
            </h2>
            <p class="text-xl text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                Technologies I work with to bring innovative ideas to life
            </p>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            @foreach($data['skills'] as $skill)
            <div class="group bg-gray-50 dark:bg-dark-700 p-8 rounded-2xl text-center hover:shadow-xl hover:shadow-primary-500/10 transition-all duration-300 transform hover:-translate-y-2 border border-gray-200 dark:border-gray-600">
                <div class="w-16 h-16 mx-auto mb-4 bg-gradient-to-br from-primary-100 to-purple-100 dark:from-primary-900 dark:to-purple-900 rounded-full flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                    <span class="text-2xl">💻</span>
                </div>
                <h3 class="font-semibold text-gray-900 dark:text-white group-hover:text-primary-600 dark:group-hover:text-primary-400 transition-colors duration-300">{{ $skill }}</h3>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Featured Projects Section -->
<section class="py-20 bg-gray-50 dark:bg-dark-900">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-white mb-6">
                Featured <span class="bg-gradient-to-r from-primary-600 to-purple-600 bg-clip-text text-transparent">Projects</span>
            </h2>
            <p class="text-xl text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                Some of my recent work and innovative side projects
            </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($data['projects'] as $project)
            <div class="group bg-white dark:bg-dark-800 rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl hover:shadow-primary-500/10 transition-all duration-500 transform hover:-translate-y-2 border border-gray-200 dark:border-gray-700">
                <div class="h-56 bg-gradient-to-br from-primary-500 via-purple-500 to-pink-500 flex items-center justify-center relative overflow-hidden">
                    <div class="absolute inset-0 bg-black/20"></div>
                    <div class="text-white text-6xl relative z-10 group-hover:scale-110 transition-transform duration-500">🚀</div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-3 group-hover:text-primary-600 dark:group-hover:text-primary-400 transition-colors duration-300">{{ $project['title'] }}</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-6 leading-relaxed">{{ $project['description'] }}</p>
                    <div class="flex flex-wrap gap-2 mb-6">
                        @foreach($project['technologies'] as $tech)
                        <span class="bg-primary-100 dark:bg-primary-900/30 text-primary-700 dark:text-primary-300 text-sm px-3 py-1 rounded-full font-medium">{{ $tech }}</span>
                        @endforeach
                    </div>
                    <div class="flex gap-4">
                        <a href="{{ $project['github_url'] }}" 
                           class="flex items-center px-4 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-full hover:bg-gray-200 dark:hover:bg-gray-600 transition-colors duration-300">
                            <svg class="h-4 w-4 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                            </svg>
                            Code
                        </a>
                        <a href="{{ $project['live_url'] }}" 
                           class="flex items-center px-4 py-2 bg-gradient-to-r from-primary-600 to-purple-600 text-white rounded-full hover:from-primary-700 hover:to-purple-700 transition-all duration-300">
                            <svg class="h-4 w-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                            </svg>
                            Live Demo
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="text-center mt-16">
            <a href="{{ route('portfolio.projects') }}" 
               class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-primary-600 to-purple-600 text-white font-semibold rounded-full hover:from-primary-700 hover:to-purple-700 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                <span>View All Projects</span>
                <svg class="ml-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
        </div>
    </div>
</section>

<!-- Experience Section -->
<section class="py-20 bg-white dark:bg-dark-800">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-white mb-6">
                Professional <span class="bg-gradient-to-r from-primary-600 to-purple-600 bg-clip-text text-transparent">Experience</span>
            </h2>
            <p class="text-xl text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                My journey in the world of technology and innovation
            </p>
        </div>
        <div class="space-y-8">
            @foreach($data['experience'] as $exp)
            <div class="group bg-gray-50 dark:bg-dark-700 p-8 rounded-2xl hover:shadow-xl hover:shadow-primary-500/10 transition-all duration-300 border border-gray-200 dark:border-gray-600">
                <div class="flex flex-col md:flex-row md:justify-between md:items-start">
                    <div class="mb-6 md:mb-0 md:w-1/3">
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white group-hover:text-primary-600 dark:group-hover:text-primary-400 transition-colors duration-300">{{ $exp['position'] }}</h3>
                        <p class="text-xl text-primary-600 dark:text-primary-400 font-semibold mt-2">{{ $exp['company'] }}</p>
                        <p class="text-gray-600 dark:text-gray-400 mt-2 font-medium">{{ $exp['duration'] }}</p>
                    </div>
                    <div class="md:w-2/3">
                        <p class="text-gray-700 dark:text-gray-300 leading-relaxed text-lg">{{ $exp['description'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Contact CTA Section -->
<section class="py-20 bg-gradient-to-br from-primary-600 via-purple-600 to-pink-600 text-white relative overflow-hidden">
    <div class="absolute inset-0 bg-black/20"></div>
    <div class="relative max-w-7xl mx-auto px-6 lg:px-8 text-center">
        <h2 class="text-4xl md:text-6xl font-bold mb-6">Let's Work Together</h2>
        <p class="text-xl md:text-2xl mb-12 text-white/90 max-w-3xl mx-auto">
            Have a project in mind? I'd love to hear about it and help bring your ideas to life.
        </p>
        <div class="flex flex-col sm:flex-row gap-6 justify-center">
            <a href="{{ route('portfolio.contact') }}" 
               class="inline-flex items-center justify-center px-8 py-4 bg-white text-primary-600 font-semibold rounded-full hover:bg-gray-100 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                <span>Get In Touch</span>
                <svg class="ml-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                </svg>
            </a>
            <a href="{{ route('portfolio.projects') }}" 
               class="inline-flex items-center justify-center px-8 py-4 border-2 border-white text-white font-semibold rounded-full hover:bg-white hover:text-primary-600 transition-all duration-300">
                <span>View My Work</span>
                <svg class="ml-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
        </div>
    </div>
    
    <!-- Floating elements -->
    <div class="absolute top-10 left-10 w-20 h-20 bg-white/10 rounded-full animate-float"></div>
    <div class="absolute bottom-10 right-10 w-16 h-16 bg-white/10 rounded-full animate-float" style="animation-delay: 2s;"></div>
    <div class="absolute top-1/2 left-1/4 w-12 h-12 bg-white/10 rounded-full animate-float" style="animation-delay: 4s;"></div>
</section>
@endsection
