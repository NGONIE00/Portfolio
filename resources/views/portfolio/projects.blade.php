@extends('layouts.app')

@section('title', 'Projects - Ngonidzashe Hunzvi')
@section('description', 'Explore the portfolio of projects by Ngonidzashe Hunzvi, showcasing innovative web applications and solutions.')

@section('content')
<!-- Hero Section -->
<section class="pt-32 pb-20 bg-gradient-to-br from-gray-50 via-white to-gray-100 dark:from-dark-900 dark:via-dark-800 dark:to-dark-900">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-5xl md:text-6xl font-bold text-gray-900 dark:text-white mb-6">
                My <span class="bg-gradient-to-r from-primary-600 via-purple-600 to-pink-600 bg-clip-text text-transparent">Projects</span>
            </h1>
            <p class="text-xl text-gray-600 dark:text-gray-400 max-w-3xl mx-auto">
                A collection of innovative projects that showcase my skills in full-stack development, 
                from concept to deployment.
            </p>
        </div>
    </div>
</section>

<!-- Projects Grid -->
<section class="py-20 bg-white dark:bg-dark-800">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Project 1 -->
            <div class="group bg-white dark:bg-dark-700 rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl hover:shadow-primary-500/10 transition-all duration-500 transform hover:-translate-y-2 border border-gray-200 dark:border-gray-600">
                <div class="h-56 bg-gradient-to-br from-blue-500 via-purple-500 to-pink-500 flex items-center justify-center relative overflow-hidden">
                    <div class="absolute inset-0 bg-black/20"></div>
                    <div class="text-white text-6xl relative z-10 group-hover:scale-110 transition-transform duration-500">🛒</div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-3 group-hover:text-primary-600 dark:group-hover:text-primary-400 transition-colors duration-300">E-commerce Platform</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-6 leading-relaxed">
                        A full-stack e-commerce solution built with Laravel backend and React frontend, featuring 
                        payment integration, inventory management, and admin dashboard.
                    </p>
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="bg-primary-100 dark:bg-primary-900/30 text-primary-700 dark:text-primary-300 text-sm px-3 py-1 rounded-full font-medium">Laravel</span>
                        <span class="bg-primary-100 dark:bg-primary-900/30 text-primary-700 dark:text-primary-300 text-sm px-3 py-1 rounded-full font-medium">React</span>
                        <span class="bg-primary-100 dark:bg-primary-900/30 text-primary-700 dark:text-primary-300 text-sm px-3 py-1 rounded-full font-medium">MySQL</span>
                        <span class="bg-primary-100 dark:bg-primary-900/30 text-primary-700 dark:text-primary-300 text-sm px-3 py-1 rounded-full font-medium">Stripe API</span>
                    </div>
                    <div class="flex gap-4">
                        <a href="#" class="flex items-center px-4 py-2 bg-gray-100 dark:bg-gray-600 text-gray-700 dark:text-gray-300 rounded-full hover:bg-gray-200 dark:hover:bg-gray-500 transition-colors duration-300">
                            <svg class="h-4 w-4 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                            </svg>
                            Code
                        </a>
                        <a href="#" class="flex items-center px-4 py-2 bg-gradient-to-r from-primary-600 to-purple-600 text-white rounded-full hover:from-primary-700 hover:to-purple-700 transition-all duration-300">
                            <svg class="h-4 w-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                            </svg>
                            Live Demo
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project 2 -->
            <div class="group bg-white dark:bg-dark-700 rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl hover:shadow-primary-500/10 transition-all duration-500 transform hover:-translate-y-2 border border-gray-200 dark:border-gray-600">
                <div class="h-56 bg-gradient-to-br from-green-500 via-blue-500 to-purple-500 flex items-center justify-center relative overflow-hidden">
                    <div class="absolute inset-0 bg-black/20"></div>
                    <div class="text-white text-6xl relative z-10 group-hover:scale-110 transition-transform duration-500">📋</div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-3 group-hover:text-primary-600 dark:group-hover:text-primary-400 transition-colors duration-300">Task Management App</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-6 leading-relaxed">
                        A collaborative task management application with real-time updates, team collaboration features, 
                        and project tracking capabilities.
                    </p>
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="bg-primary-100 dark:bg-primary-900/30 text-primary-700 dark:text-primary-300 text-sm px-3 py-1 rounded-full font-medium">Laravel</span>
                        <span class="bg-primary-100 dark:bg-primary-900/30 text-primary-700 dark:text-primary-300 text-sm px-3 py-1 rounded-full font-medium">Vue.js</span>
                        <span class="bg-primary-100 dark:bg-primary-900/30 text-primary-700 dark:text-primary-300 text-sm px-3 py-1 rounded-full font-medium">WebSockets</span>
                        <span class="bg-primary-100 dark:bg-primary-900/30 text-primary-700 dark:text-primary-300 text-sm px-3 py-1 rounded-full font-medium">MySQL</span>
                    </div>
                    <div class="flex gap-4">
                        <a href="#" class="flex items-center px-4 py-2 bg-gray-100 dark:bg-gray-600 text-gray-700 dark:text-gray-300 rounded-full hover:bg-gray-200 dark:hover:bg-gray-500 transition-colors duration-300">
                            <svg class="h-4 w-4 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                            </svg>
                            Code
                        </a>
                        <a href="#" class="flex items-center px-4 py-2 bg-gradient-to-r from-primary-600 to-purple-600 text-white rounded-full hover:from-primary-700 hover:to-purple-700 transition-all duration-300">
                            <svg class="h-4 w-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                            </svg>
                            Live Demo
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project 3 -->
            <div class="group bg-white dark:bg-dark-700 rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl hover:shadow-primary-500/10 transition-all duration-500 transform hover:-translate-y-2 border border-gray-200 dark:border-gray-600">
                <div class="h-56 bg-gradient-to-br from-orange-500 via-red-500 to-pink-500 flex items-center justify-center relative overflow-hidden">
                    <div class="absolute inset-0 bg-black/20"></div>
                    <div class="text-white text-6xl relative z-10 group-hover:scale-110 transition-transform duration-500">🔌</div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-3 group-hover:text-primary-600 dark:group-hover:text-primary-400 transition-colors duration-300">API Integration Service</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-6 leading-relaxed">
                        A RESTful API service for third-party integrations with comprehensive documentation, 
                        rate limiting, and monitoring capabilities.
                    </p>
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="bg-primary-100 dark:bg-primary-900/30 text-primary-700 dark:text-primary-300 text-sm px-3 py-1 rounded-full font-medium">Laravel</span>
                        <span class="bg-primary-100 dark:bg-primary-900/30 text-primary-700 dark:text-primary-300 text-sm px-3 py-1 rounded-full font-medium">PostgreSQL</span>
                        <span class="bg-primary-100 dark:bg-primary-900/30 text-primary-700 dark:text-primary-300 text-sm px-3 py-1 rounded-full font-medium">Redis</span>
                        <span class="bg-primary-100 dark:bg-primary-900/30 text-primary-700 dark:text-primary-300 text-sm px-3 py-1 rounded-full font-medium">Docker</span>
                    </div>
                    <div class="flex gap-4">
                        <a href="#" class="flex items-center px-4 py-2 bg-gray-100 dark:bg-gray-600 text-gray-700 dark:text-gray-300 rounded-full hover:bg-gray-200 dark:hover:bg-gray-500 transition-colors duration-300">
                            <svg class="h-4 w-4 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                            </svg>
                            Code
                        </a>
                        <a href="#" class="flex items-center px-4 py-2 bg-gradient-to-r from-primary-600 to-purple-600 text-white rounded-full hover:from-primary-700 hover:to-purple-700 transition-all duration-300">
                            <svg class="h-4 w-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                            </svg>
                            Live Demo
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project 4 -->
            <div class="group bg-white dark:bg-dark-700 rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl hover:shadow-primary-500/10 transition-all duration-500 transform hover:-translate-y-2 border border-gray-200 dark:border-gray-600">
                <div class="h-56 bg-gradient-to-br from-teal-500 via-cyan-500 to-blue-500 flex items-center justify-center relative overflow-hidden">
                    <div class="absolute inset-0 bg-black/20"></div>
                    <div class="text-white text-6xl relative z-10 group-hover:scale-110 transition-transform duration-500">📊</div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-3 group-hover:text-primary-600 dark:group-hover:text-primary-400 transition-colors duration-300">Analytics Dashboard</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-6 leading-relaxed">
                        A comprehensive analytics dashboard with real-time data visualization, 
                        custom reports, and interactive charts for business intelligence.
                    </p>
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="bg-primary-100 dark:bg-primary-900/30 text-primary-700 dark:text-primary-300 text-sm px-3 py-1 rounded-full font-medium">React</span>
                        <span class="bg-primary-100 dark:bg-primary-900/30 text-primary-700 dark:text-primary-300 text-sm px-3 py-1 rounded-full font-medium">D3.js</span>
                        <span class="bg-primary-100 dark:bg-primary-900/30 text-primary-700 dark:text-primary-300 text-sm px-3 py-1 rounded-full font-medium">Node.js</span>
                        <span class="bg-primary-100 dark:bg-primary-900/30 text-primary-700 dark:text-primary-300 text-sm px-3 py-1 rounded-full font-medium">MongoDB</span>
                    </div>
                    <div class="flex gap-4">
                        <a href="#" class="flex items-center px-4 py-2 bg-gray-100 dark:bg-gray-600 text-gray-700 dark:text-gray-300 rounded-full hover:bg-gray-200 dark:hover:bg-gray-500 transition-colors duration-300">
                            <svg class="h-4 w-4 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                            </svg>
                            Code
                        </a>
                        <a href="#" class="flex items-center px-4 py-2 bg-gradient-to-r from-primary-600 to-purple-600 text-white rounded-full hover:from-primary-700 hover:to-purple-700 transition-all duration-300">
                            <svg class="h-4 w-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                            </svg>
                            Live Demo
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project 5 -->
            <div class="group bg-white dark:bg-dark-700 rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl hover:shadow-primary-500/10 transition-all duration-500 transform hover:-translate-y-2 border border-gray-200 dark:border-gray-600">
                <div class="h-56 bg-gradient-to-br from-indigo-500 via-purple-500 to-pink-500 flex items-center justify-center relative overflow-hidden">
                    <div class="absolute inset-0 bg-black/20"></div>
                    <div class="text-white text-6xl relative z-10 group-hover:scale-110 transition-transform duration-500">🎨</div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-3 group-hover:text-primary-600 dark:group-hover:text-primary-400 transition-colors duration-300">Design System</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-6 leading-relaxed">
                        A comprehensive design system with reusable components, 
                        style guidelines, and documentation for consistent UI development.
                    </p>
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="bg-primary-100 dark:bg-primary-900/30 text-primary-700 dark:text-primary-300 text-sm px-3 py-1 rounded-full font-medium">React</span>
                        <span class="bg-primary-100 dark:bg-primary-900/30 text-primary-700 dark:text-primary-300 text-sm px-3 py-1 rounded-full font-medium">Storybook</span>
                        <span class="bg-primary-100 dark:bg-primary-900/30 text-primary-700 dark:text-primary-300 text-sm px-3 py-1 rounded-full font-medium">TypeScript</span>
                        <span class="bg-primary-100 dark:bg-primary-900/30 text-primary-700 dark:text-primary-300 text-sm px-3 py-1 rounded-full font-medium">Tailwind</span>
                    </div>
                    <div class="flex gap-4">
                        <a href="#" class="flex items-center px-4 py-2 bg-gray-100 dark:bg-gray-600 text-gray-700 dark:text-gray-300 rounded-full hover:bg-gray-200 dark:hover:bg-gray-500 transition-colors duration-300">
                            <svg class="h-4 w-4 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                            </svg>
                            Code
                        </a>
                        <a href="#" class="flex items-center px-4 py-2 bg-gradient-to-r from-primary-600 to-purple-600 text-white rounded-full hover:from-primary-700 hover:to-purple-700 transition-all duration-300">
                            <svg class="h-4 w-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                            </svg>
                            Live Demo
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project 6 -->
            <div class="group bg-white dark:bg-dark-700 rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl hover:shadow-primary-500/10 transition-all duration-500 transform hover:-translate-y-2 border border-gray-200 dark:border-gray-600">
                <div class="h-56 bg-gradient-to-br from-yellow-500 via-orange-500 to-red-500 flex items-center justify-center relative overflow-hidden">
                    <div class="absolute inset-0 bg-black/20"></div>
                    <div class="text-white text-6xl relative z-10 group-hover:scale-110 transition-transform duration-500">🚀</div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-3 group-hover:text-primary-600 dark:group-hover:text-primary-400 transition-colors duration-300">Portfolio Website</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-6 leading-relaxed">
                        This responsive portfolio website built with Laravel and Tailwind CSS, 
                        featuring dark mode, smooth animations, and modern design principles.
                    </p>
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="bg-primary-100 dark:bg-primary-900/30 text-primary-700 dark:text-primary-300 text-sm px-3 py-1 rounded-full font-medium">Laravel</span>
                        <span class="bg-primary-100 dark:bg-primary-900/30 text-primary-700 dark:text-primary-300 text-sm px-3 py-1 rounded-full font-medium">Tailwind CSS</span>
                        <span class="bg-primary-100 dark:bg-primary-900/30 text-primary-700 dark:text-primary-300 text-sm px-3 py-1 rounded-full font-medium">JavaScript</span>
                        <span class="bg-primary-100 dark:bg-primary-900/30 text-primary-700 dark:text-primary-300 text-sm px-3 py-1 rounded-full font-medium">Vite</span>
                    </div>
                    <div class="flex gap-4">
                        <a href="#" class="flex items-center px-4 py-2 bg-gray-100 dark:bg-gray-600 text-gray-700 dark:text-gray-300 rounded-full hover:bg-gray-200 dark:hover:bg-gray-500 transition-colors duration-300">
                            <svg class="h-4 w-4 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                            </svg>
                            Code
                        </a>
                        <a href="#" class="flex items-center px-4 py-2 bg-gradient-to-r from-primary-600 to-purple-600 text-white rounded-full hover:from-primary-700 hover:to-purple-700 transition-all duration-300">
                            <svg class="h-4 w-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                            </svg>
                            Live Demo
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact CTA -->
<section class="py-20 bg-gradient-to-br from-primary-600 via-purple-600 to-pink-600 text-white relative overflow-hidden">
    <div class="absolute inset-0 bg-black/20"></div>
    <div class="relative max-w-7xl mx-auto px-6 lg:px-8 text-center">
        <h2 class="text-4xl md:text-5xl font-bold mb-6">Interested in Working Together?</h2>
        <p class="text-xl mb-12 text-white/90 max-w-3xl mx-auto">
            I'm always excited to take on new challenges and create amazing digital experiences. 
            Let's discuss your next project!
        </p>
        <a href="{{ route('portfolio.contact') }}" 
           class="inline-flex items-center px-8 py-4 bg-white text-primary-600 font-semibold rounded-full hover:bg-gray-100 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
            <span>Get In Touch</span>
            <svg class="ml-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
            </svg>
        </a>
    </div>
    
    <!-- Floating elements -->
    <div class="absolute top-10 left-10 w-20 h-20 bg-white/10 rounded-full animate-float"></div>
    <div class="absolute bottom-10 right-10 w-16 h-16 bg-white/10 rounded-full animate-float" style="animation-delay: 2s;"></div>
    <div class="absolute top-1/2 left-1/4 w-12 h-12 bg-white/10 rounded-full animate-float" style="animation-delay: 4s;"></div>
</section>
@endsection
