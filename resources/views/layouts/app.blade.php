<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Ngonidzashe Hunzvi') }}</title>

    {{-- Vite CSS with CDN fallback --}}
    @production
        @if(file_exists(public_path('build/manifest.json')))
            {{-- Vite built successfully - use compiled assets --}}
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            {{-- Vite build missing - use CDN Tailwind + inline JS --}}
            <script src="https://cdn.tailwindcss.com"></script>
            <script>
                tailwind.config = {
                    darkMode: 'class',
                    theme: {
                        extend: {
                            colors: {
                                primary: {
                                    50: '#eff6ff',
                                    100: '#dbeafe',
                                    200: '#bfdbfe',
                                    300: '#93c5fd',
                                    400: '#60a5fa',
                                    500: '#3b82f6',
                                    600: '#2563eb',
                                    700: '#1d4ed8',
                                    800: '#1e40af',
                                    900: '#1e3a8a',
                                },
                            },
                            fontFamily: {
                                sans: ['Inter', 'system-ui', 'sans-serif'],
                                mono: ['JetBrains Mono', 'monospace'],
                            },
                            animation: {
                                'typewriter': 'typewriter 3s steps(40, end) forwards',
                                'float': 'float 6s ease-in-out infinite',
                                'fade-in': 'fadeIn 0.5s ease-in-out',
                            },
                            keyframes: {
                                typewriter: {
                                    from: { width: '0' },
                                    to: { width: '100%' }
                                },
                                float: {
                                    '0%, 100%': { transform: 'translateY(0px)' },
                                    '50%': { transform: 'translateY(-20px)' }
                                },
                                fadeIn: {
                                    '0%': { opacity: '0' },
                                    '100%': { opacity: '1' }
                                }
                            }
                        }
                    }
                }
            </script>
            <style>
                /* Component styles for CDN fallback */
                .nav-link {
                    padding: 0.5rem 0.75rem;
                    color: #374151;
                    transition: color 0.2s;
                    font-weight: 500;
                }
                .dark .nav-link {
                    color: #d1d5db;
                }
                .nav-link:hover {
                    color: #111827;
                }
                .dark .nav-link:hover {
                    color: #f9fafb;
                }
                .section-container {
                    max-width: 80rem;
                    margin-left: auto;
                    margin-right: auto;
                    padding-left: 1rem;
                    padding-right: 1rem;
                }
                .footer-text {
                    font-size: 0.875rem;
                    color: #6b7280;
                    text-align: center;
                }
                .dark .footer-text {
                    color: #9ca3af;
                }
                .sun-icon {
                    transform: scale(1);
                    opacity: 1;
                    transition: transform 0.3s ease, opacity 0.3s ease;
                }
                .moon-icon {
                    transform: scale(0);
                    opacity: 0;
                    transition: transform 0.3s ease, opacity 0.3s ease;
                }
                html.dark .sun-icon {
                    transform: scale(0);
                    opacity: 0;
                }
                html.dark .moon-icon {
                    transform: scale(1);
                    opacity: 1;
                }
                /* Floating logos */
                .floating-logo {
                    transition: all 0.3s ease;
                    cursor: pointer;
                    user-select: none;
                }
                .floating-logo:hover {
                    transform: scale(1.1) translateY(-4px) !important;
                }
                /* Terminal text */
                .terminal-text {
                    font-family: 'JetBrains Mono', monospace;
                    font-size: 0.875rem;
                    color: #4b5563;
                }
                .dark .terminal-text {
                    color: #9ca3af;
                }
                .terminal-cursor {
                    color: #2563eb;
                    animation: blink 1s infinite;
                }
                .dark .terminal-cursor {
                    color: #60a5fa;
                }
                @keyframes blink {
                    0%, 50% { opacity: 1; }
                    51%, 100% { opacity: 0; }
                }
                .terminal-highlight {
                    color: #1f2937;
                    font-weight: 600;
                }
                .dark .terminal-highlight {
                    color: #e5e7eb;
                }
                /* Button styles */
                .btn-secondary {
                    display: inline-flex;
                    align-items: center;
                    justify-content: center;
                    padding: 0.75rem 1.5rem;
                    border: 2px solid #9ca3af;
                    color: #374151;
                    font-weight: 600;
                    border-radius: 9999px;
                    transition: all 0.3s;
                }
                .dark .btn-secondary {
                    border-color: #4b5563;
                    color: #d1d5db;
                }
                .btn-secondary:hover {
                    border-color: #2563eb;
                    color: #2563eb;
                    transform: scale(1.05);
                }
                .dark .btn-secondary:hover {
                    border-color: #60a5fa;
                    color: #60a5fa;
                }
            </style>
        @endif
    @else
        {{-- Development mode: always use Vite --}}
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endproduction

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600|jetbrains-mono:400,500" rel="stylesheet" />
    
    <!-- Dark Mode Script - Prevents Flash of Unstyled Content (FOUC) -->
    <script>
        (function() {
            const savedTheme = localStorage.getItem('theme');
            const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
            
            let isDark;
            if (savedTheme === 'dark') {
                isDark = true;
            } else if (savedTheme === 'light') {
                isDark = false;
            } else {
                isDark = prefersDark;
            }
            
            if (isDark) {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark');
            }
        })();
    </script>
</head>
<body class="bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100 transition-colors duration-300 font-sans">

    <!-- Header -->
    <header class="fixed top-0 left-0 right-0 z-50 bg-white dark:bg-gray-900 shadow-sm border-b border-gray-200 dark:border-gray-700 transition-colors duration-300">
        <div class="section-container h-20 flex items-center justify-between">
            @php
                $currentRoute = request()->route()->getName();
                $pageNames = [
                    'portfolio.index' => 'Home',
                    'portfolio.about' => 'About',
                    'portfolio.projects' => 'Projects',
                    'portfolio.contact' => 'Contact'
                ];
                $currentPageName = $pageNames[$currentRoute] ?? 'Ngonidzashe Hunzvi';
            @endphp

            <span class="text-2xl font-bold text-gray-900 dark:text-gray-100 transition-colors duration-300">
                {{ $currentPageName }}
            </span>

            <!-- Desktop Navigation -->
            <nav class="hidden md:flex items-center space-x-4">
                @if($currentRoute !== 'portfolio.index')
                    <a href="{{ route('portfolio.index') }}" class="nav-link">Home</a>
                @endif
                @if($currentRoute !== 'portfolio.about')
                    <a href="{{ route('portfolio.about') }}" class="nav-link">About</a>
                @endif
                @if($currentRoute !== 'portfolio.projects')
                    <a href="{{ route('portfolio.projects') }}" class="nav-link">Projects</a>
                @endif
                @if($currentRoute !== 'portfolio.contact')
                    <a href="{{ route('portfolio.contact') }}" class="nav-link">Contact</a>
                @endif
            </nav>

            <div class="flex items-center space-x-4">
                <!-- Dark Mode Toggle Button -->
                <button id="dark-mode-toggle" 
                        aria-label="Toggle dark mode" 
                        class="relative inline-flex items-center justify-center h-10 w-10 rounded-full 
                               bg-gray-200 dark:bg-gray-700 transition-all duration-300 
                               hover:bg-gray-300 dark:hover:bg-gray-600 
                               focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 
                               hover:scale-105">
                    <!-- Sun Icon -->
                    <svg class="h-5 w-5 text-yellow-500 transition-all duration-300 transform absolute sun-icon" 
                         fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"/>
                    </svg>
                    <!-- Moon Icon -->
                    <svg class="h-5 w-5 text-blue-400 transition-all duration-300 transform absolute moon-icon" 
                         fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"/>
                    </svg>
                </button>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="pt-20">
        @yield('content')
    </main>
    
    <!-- Footer -->
    <footer class="bg-white dark:bg-gray-900 border-t border-gray-200 dark:border-gray-700 transition-colors duration-300">
        <div class="section-container py-8">
            <div class="flex flex-col items-center space-y-4">
                <!-- Social Icons -->
                <div class="flex space-x-6">
                    <!-- GitHub -->
                    <a href="https://github.com/NGONIE00" 
                       class="text-gray-400 hover:text-gray-600 dark:hover:text-gray-300 transition-all duration-300 hover:scale-110"
                       target="_blank" rel="noopener noreferrer"
                       aria-label="GitHub Profile">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                        </svg>
                    </a>

                    <!-- LinkedIn -->
                    <a href="https://www.linkedin.com/in/ngonidzashe-hunzvi" 
                       class="text-gray-400 hover:text-blue-600 dark:hover:text-blue-400 transition-all duration-300 hover:scale-110"
                       target="_blank" rel="noopener noreferrer"
                       aria-label="LinkedIn Profile">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                        </svg>
                    </a>

                    <!-- Email -->
                    <a href="mailto:ngoniehunzvie@gmail.com" 
                       class="text-gray-400 hover:text-red-500 dark:hover:text-red-400 transition-all duration-300 hover:scale-110" 
                       aria-label="Send Email">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                  d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                    </a>
                </div>

                <!-- Copyright Text -->
                <div class="text-center">
                    <p class="footer-text">
                        © {{ date('Y') }} Ngonidzashe Hunzvi. All rights reserved.
                    </p>
                    <p class="text-xs text-gray-400 dark:text-gray-500 mt-1 transition-colors duration-300">
                        Built with Laravel & Tailwind CSS
                    </p>
                </div>
            </div>
        </div>
    </footer>

    {{-- Load JavaScript from app.js inline when using CDN Tailwind --}}
    @production
        @if(!file_exists(public_path('build/manifest.json')))
            <script>
                {!! file_get_contents(resource_path('js/app.js')) !!}
            </script>
        @endif
    @endproduction

    <!-- Dark Mode Toggle Script (fallback if app.js doesn't load) -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const darkModeToggle = document.getElementById('dark-mode-toggle');
            
            if (darkModeToggle && !window.portfolioApp) {
                darkModeToggle.addEventListener('click', function() {
                    const html = document.documentElement;
                    const isDark = html.classList.contains('dark');
                    
                    if (isDark) {
                        html.classList.remove('dark');
                        localStorage.setItem('theme', 'light');
                    } else {
                        html.classList.add('dark');
                        localStorage.setItem('theme', 'dark');
                    }
                });
            }
        });
    </script>
</body>
</html>
