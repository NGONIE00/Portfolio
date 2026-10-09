@extends('layouts.app')

@section('title', 'About - Ngonidzashe Hunzvi')
@section('description', 'Ngonidzashe Hunzvi is a Full-Stack Developer and Computing & Information Systems professional from Zimbabwe, building practical digital products.')

@section('content')

<<<<<<< HEAD
<!-- Hero -->
<section class="pt-20 pb-16 bg-white dark:bg-gray-900 text-center">
    <div class="section-container border border-gray-200 dark:border-gray-700 rounded-2xl py-12">
        <h1 class="text-5xl md:text-6xl font-bold text-gray-900 dark:text-white mb-4">
            About <span class="text-blue-600 dark:text-blue-400">Me</span>
        </h1>
        <p class="text-2xl font-semibold text-gray-800 dark:text-gray-200 mb-2">
            Ngonidzashe Hunzvi
        </p>
        <p class="text-lg text-gray-600 dark:text-gray-400 max-w-3xl mx-auto mb-6">
            Full-Stack Developer · Computing &amp; Information Systems · Digital Product Builder
        </p>
        <div class="flex flex-wrap items-center justify-center gap-x-6 gap-y-2 text-sm text-gray-500 dark:text-gray-400">
            <span class="inline-flex items-center">
                <svg class="w-4 h-4 mr-2 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                </svg>
                Harare, Zimbabwe
            </span>
            <span class="inline-flex items-center">
                <svg class="w-4 h-4 mr-2 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                Available for remote opportunities worldwide
            </span>
        </div>
    </div>
</section>

@if(session('info'))
    <div class="section-container pb-8">
        <div class="p-4 bg-blue-50 dark:bg-blue-900/20 border border-blue-200 dark:border-blue-800 rounded-xl text-center text-blue-700 dark:text-blue-300">
            {{ session('info') }}
        </div>
    </div>
@endif

<!-- My Story -->
<section class="py-16 bg-white dark:bg-gray-900 border-t border-gray-200 dark:border-gray-700">
    <div class="section-container">
        <div class="max-w-3xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-8">
                My <span class="text-blue-600 dark:text-blue-400">Story</span>
            </h2>
            <div class="space-y-5 text-lg leading-relaxed text-gray-600 dark:text-gray-400">
                <p>
                    I'm a Full-Stack Developer and Computing &amp; Information Systems professional from Zimbabwe. My journey into technology began with a simple curiosity about how websites work, and grew into a passion for building digital products and solving problems through software.
                </p>
                <p>
                    I recently completed my <span class="font-semibold text-gray-900 dark:text-gray-100">ABMA Level 6 Diploma in Professional Computing and Information Systems</span>, achieving a Merit. It strengthened my foundation in software engineering, algorithms, enterprise architecture, databases, information security, and web development.
                </p>
                <p>
                    For me, technology is more than writing code. It's understanding the problem, designing the right solution, and building systems that people can actually use.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- What I Build -->
<section class="py-16 bg-white dark:bg-gray-900 border-t border-gray-200 dark:border-gray-700">
    <div class="section-container">
        <div class="max-w-5xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-4">
                What I <span class="text-blue-600 dark:text-blue-400">Build</span>
            </h2>
            <p class="text-lg text-gray-600 dark:text-gray-400 mb-10 max-w-3xl">
                Full-stack web applications and digital platforms that pair thoughtful user experiences with reliable backend systems.
            </p>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">
                <div class="bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-xl p-6">
                    <h3 class="text-sm font-semibold uppercase tracking-wide text-blue-600 dark:text-blue-400 mb-3">Frontend</h3>
                    <p class="text-gray-700 dark:text-gray-300">JavaScript, React, Next.js, HTML, CSS</p>
                </div>
                <div class="bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-xl p-6">
                    <h3 class="text-sm font-semibold uppercase tracking-wide text-blue-600 dark:text-blue-400 mb-3">Backend</h3>
                    <p class="text-gray-700 dark:text-gray-300">PHP, Laravel, Node.js</p>
                </div>
                <div class="bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-xl p-6">
                    <h3 class="text-sm font-semibold uppercase tracking-wide text-blue-600 dark:text-blue-400 mb-3">Databases</h3>
                    <p class="text-gray-700 dark:text-gray-300">SQL, SQLite, Supabase</p>
                </div>
                <div class="bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-xl p-6">
                    <h3 class="text-sm font-semibold uppercase tracking-wide text-blue-600 dark:text-blue-400 mb-3">Tools &amp; Deployment</h3>
                    <p class="text-gray-700 dark:text-gray-300">Git, GitHub, Vercel, Render, Docker</p>
                </div>
            </div>

            <p class="text-gray-600 dark:text-gray-400">
                Recent work includes TenderReach, a digital procurement platform, and Dare – The Digital Council, a platform concept for improving access to digital services.
                <a href="{{ route('portfolio.projects') }}" class="text-blue-600 dark:text-blue-400 font-medium hover:underline">See the projects →</a>
            </p>
        </div>
    </div>
</section>

<!-- How I Work -->
<section class="py-16 bg-white dark:bg-gray-900 border-t border-gray-200 dark:border-gray-700">
    <div class="section-container">
        <div class="max-w-5xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-10">
                How I <span class="text-blue-600 dark:text-blue-400">Work</span>
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-xl p-8">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">My Approach</h3>
                    <p class="text-gray-600 dark:text-gray-400 leading-relaxed">
                        I think about how an application performs, scales, stays secure, and gets maintained, and I build for the people who will use it. My interests extend into system design, enterprise architecture, digital ethics, and privacy-aware technology.
                    </p>
                </div>
                <div class="bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-xl p-8">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Always Learning</h3>
                    <p class="text-gray-600 dark:text-gray-400 leading-relaxed">
                        I'm continuously strengthening my skills in algorithms and data structures, software engineering, system design, and modern development practices, with the goal of building products that create meaningful value.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-16 bg-white dark:bg-gray-900 border-t border-gray-200 dark:border-gray-700">
    <div class="section-container">
        <div class="max-w-3xl mx-auto text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-4">
                Let's Build Something <span class="text-blue-600 dark:text-blue-400">Meaningful</span>
            </h2>
            <p class="text-lg text-gray-600 dark:text-gray-400 mb-8">
                Looking for a developer, exploring a project idea, or just interested in technology? I'd love to connect.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('portfolio.contact') }}" class="btn-secondary">
                    <span>Get In Touch</span>
                    <svg class="ml-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                    </svg>
                </a>
                <a href="{{ route('portfolio.download-cv') }}" class="btn-secondary">
                    <span>Download CV</span>
                    <svg class="ml-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                    </svg>
                </a>
            </div>
        </div>
=======
<!-- About Content -->
<section class="py-12 md:py-16 lg:py-20 bg-white dark:bg-gray-900 border-b border-gray-200 dark:border-gray-700 text-gray-900 dark:text-gray-300 transition-colors duration-300">
    <div class="section-container">
        <!-- Profile Section - Mobile Optimized -->
        <div class="flex flex-col lg:flex-row items-center lg:items-start text-center lg:text-left space-y-6 lg:space-y-0 lg:space-x-12 mb-8 lg:mb-12">
            <!-- Profile Image -->
            <div class="flex flex-col items-center lg:items-start space-y-3 lg:space-y-4">
                <div class="w-48 h-48 md:w-56 md:h-56 lg:w-64 lg:h-64 bg-gray-100 dark:bg-gray-800 rounded-full flex items-center justify-center border-2 border-gray-300 dark:border-gray-700 ring-4 ring-gray-200 dark:ring-gray-800 overflow-hidden transition-colors duration-300 shadow-lg">
                    <img src="{{ asset('profile.jpg') }}" 
                         alt="Ngonidzashe Hunzvi" 
                         class="w-full h-full object-cover rounded-full">
                </div>
                <h3 class="text-2xl md:text-3xl font-bold text-gray-900 dark:text-gray-200 transition-colors duration-300">
                    Ngonidzashe Hunzvi
                </h3>
            </div>
            
            <!-- Location Card - Mobile Optimized -->
            <div class="w-full lg:flex-1 lg:mt-16">
                <div class="bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-xl p-6 shadow-sm hover:shadow-md transition-all duration-300">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0">
                            <svg class="w-6 h-6 text-gray-600 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h4 class="text-lg font-semibold text-gray-900 dark:text-gray-200 transition-colors duration-300 mb-1">
                                Location
                            </h4>
                            <p class="text-base text-gray-600 dark:text-gray-400 transition-colors duration-300">
                                Harare, Zimbabwe
                            </p>
                            <p class="text-sm text-gray-500 dark:text-gray-500 transition-colors duration-300 mt-2">
                                Available for remote work worldwide
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- My Story Section - Mobile Optimized -->
        <div class="mt-8 lg:mt-12">
            <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-gray-900 dark:text-gray-100 mb-6 text-center lg:text-left">
                My Story
            </h2>
            <div class="space-y-4 md:space-y-6 text-gray-600 dark:text-gray-400 text-base md:text-lg leading-relaxed transition-colors duration-300">
                <p>Hi there! I'm Ngonidzashe Hunzvi, a dedicated Full Stack Developer and ABMA Computing & Information Systems student based in Harare, Zimbabwe. My journey into software development began with a simple curiosity about how websites function—and has since grown into a lifelong passion for building impactful digital experiences.</p>
                <p>With a strong foundation in backend technologies like PHP and Laravel, and frontend frameworks such as React and Vue.js, I craft modern web applications that are both powerful and user-friendly. I believe in writing clean, scalable code and designing interfaces that are intuitive and accessible to all users.</p>
                <p>My development philosophy centers on performance, reliability, and maintainability. I strive to deliver solutions that not only meet business goals but also enhance the lives of those who use them. Whether it's a sleek dashboard or a dynamic e-commerce platform, I bring creativity and precision to every project.</p>
                <p>As I continue to grow in this field, I'm excited to collaborate, learn, and contribute to the ever-evolving tech landscape. Let's build something amazing together.</p>
            </div>
        </div>
    </div>
</section>

<!-- Education & Learning - OPTIMIZED FOR MOBILE -->
<section class="py-12 md:py-16 lg:py-20 bg-white dark:bg-gray-900 border-b border-gray-200 dark:border-gray-700 text-gray-900 dark:text-gray-300 transition-colors duration-300">
    <div class="section-container">
        <!-- Section Header -->
        <div class="text-center mb-8 md:mb-12">
            <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-gray-900 dark:text-gray-100 mb-3 md:mb-4">
                Education & Learning
            </h2>
            <p class="text-base md:text-lg text-gray-600 dark:text-gray-400 max-w-3xl mx-auto px-4">
                My educational background and continuous learning journey
            </p>
        </div>

        <!-- Cards Grid - Responsive -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8">
            <!-- Formal Education Card -->
            <div class="bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-xl p-6 md:p-8 shadow-sm hover:shadow-md transition-all duration-300 hover:-translate-y-1">
                <div class="flex items-start space-x-3 mb-4">
                    <svg class="w-6 h-6 text-blue-600 dark:text-blue-400 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                    </svg>
                    <h3 class="text-lg md:text-xl font-bold text-gray-900 dark:text-gray-200 transition-colors duration-300">
                        Formal Education
                    </h3>
                </div>
                <div class="space-y-3 text-gray-600 dark:text-gray-400 transition-colors duration-300 ml-0 md:ml-9">
                    <div>
                        <h4 class="font-semibold text-gray-800 dark:text-gray-200 text-base md:text-lg mb-1">
                            Diploma in Computing and Information Systems
                        </h4>
                        <a href="https://abma.uk.com/" 
                           target="_blank" 
                           rel="noopener noreferrer"
                           class="text-blue-600 dark:text-blue-400 hover:underline text-sm md:text-base inline-flex items-center">
                            ABMA UK
                            <svg class="w-3 h-3 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                            </svg>
                        </a>
                        <p class="text-gray-500 dark:text-gray-500 text-sm mt-1">2024-2026</p>
                    </div>
                </div>
            </div>

            <!-- Continuous Learning Card -->
            <div class="bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-xl p-6 md:p-8 shadow-sm hover:shadow-md transition-all duration-300 hover:-translate-y-1">
                <div class="flex items-start space-x-3 mb-4">
                    <svg class="w-6 h-6 text-green-600 dark:text-green-400 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                    <h3 class="text-lg md:text-xl font-bold text-gray-900 dark:text-gray-200 transition-colors duration-300">
                        Continuous Learning
                    </h3>
                </div>
                <ul class="space-y-2 text-gray-600 dark:text-gray-400 transition-colors duration-300 text-sm md:text-base ml-0 md:ml-9">
                    <li class="flex items-start">
                        <span class="text-green-600 dark:text-green-400 mr-2 mt-1">✓</span>
                        <span>Agile & Scrum Methodologies</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-green-600 dark:text-green-400 mr-2 mt-1">✓</span>
                        <span>DevOps & CI/CD</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-green-600 dark:text-green-400 mr-2 mt-1">✓</span>
                        <span>Security & Performance</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-green-600 dark:text-green-400 mr-2 mt-1">✓</span>
                        <span>System Design & Architecture</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-green-600 dark:text-green-400 mr-2 mt-1">✓</span>
                        <span>Technical Writing</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Values & Approach - OPTIMIZED FOR MOBILE -->
<section class="py-12 md:py-16 lg:py-20 bg-white dark:bg-gray-900 border-b border-gray-200 dark:border-gray-700 text-gray-900 dark:text-gray-300 transition-colors duration-300">
    <div class="section-container">
        <!-- Section Header -->
        <div class="text-center mb-8 md:mb-12">
            <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-gray-900 dark:text-gray-100 mb-3 md:mb-4">
                My Values & Approach
            </h2>
            <p class="text-base md:text-lg text-gray-600 dark:text-gray-400 max-w-3xl mx-auto px-4">
                What drives me as a developer
            </p>
        </div>

        <!-- Values Grid - Fully Responsive -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
            <!-- Problem Solving -->
            <div class="text-center p-6 md:p-8 bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-xl transition-all duration-300 hover:-translate-y-2 hover:shadow-lg">
                <div class="w-14 h-14 md:w-16 md:h-16 bg-blue-100 dark:bg-blue-900/20 rounded-full flex items-center justify-center mx-auto mb-4 transition-all duration-300 hover:scale-110">
                    <svg class="w-7 h-7 md:w-8 md:h-8 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                    </svg>
                </div>
                <h3 class="text-lg md:text-xl font-bold text-gray-900 dark:text-gray-200 mb-3 transition-colors duration-300">
                    Problem Solving
                </h3>
                <p class="text-sm md:text-base text-gray-600 dark:text-gray-400 transition-colors duration-300 leading-relaxed">
                    I love tackling complex challenges and finding elegant solutions that make a real impact.
                </p>
            </div>

            <!-- Continuous Learning -->
            <div class="text-center p-6 md:p-8 bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-xl transition-all duration-300 hover:-translate-y-2 hover:shadow-lg">
                <div class="w-14 h-14 md:w-16 md:h-16 bg-green-100 dark:bg-green-900/20 rounded-full flex items-center justify-center mx-auto mb-4 transition-all duration-300 hover:scale-110">
                    <svg class="w-7 h-7 md:w-8 md:h-8 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                    </svg>
                </div>
                <h3 class="text-lg md:text-xl font-bold text-gray-900 dark:text-gray-200 mb-3 transition-colors duration-300">
                    Continuous Learning
                </h3>
                <p class="text-sm md:text-base text-gray-600 dark:text-gray-400 transition-colors duration-300 leading-relaxed">
                    Technology evolves rapidly, and I'm committed to staying current with the latest trends and best practices.
                </p>
            </div>

            <!-- Collaboration -->
            <div class="text-center p-6 md:p-8 bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-xl transition-all duration-300 hover:-translate-y-2 hover:shadow-lg sm:col-span-2 lg:col-span-1">
                <div class="w-14 h-14 md:w-16 md:h-16 bg-purple-100 dark:bg-purple-900/20 rounded-full flex items-center justify-center mx-auto mb-4 transition-all duration-300 hover:scale-110">
                    <svg class="w-7 h-7 md:w-8 md:h-8 text-purple-600 dark:text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                </div>
                <h3 class="text-lg md:text-xl font-bold text-gray-900 dark:text-gray-200 mb-3 transition-colors duration-300">
                    Collaboration
                </h3>
                <p class="text-sm md:text-base text-gray-600 dark:text-gray-400 transition-colors duration-300 leading-relaxed">
                    I believe the best solutions come from working together and sharing knowledge with the community.
                </p>
            </div>
        </div>
>>>>>>> c502ee5727599d585be6cee745403feb5aed10aa
    </div>
</section>

<!-- Download CV Section - OPTIMIZED FOR MOBILE -->
<section class="py-12 md:py-16 lg:py-20 bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-300 transition-colors duration-300">
    <div class="section-container">
        <div class="max-w-2xl mx-auto">
            <!-- Section Header -->
            <div class="text-center mb-8">
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-gray-900 dark:text-gray-100 mb-3 md:mb-4">
                    Download My CV
                </h2>
                <p class="text-base md:text-lg text-gray-600 dark:text-gray-400 px-4">
                    Get a detailed overview of my skills, experience, and projects in PDF format.
                </p>
            </div>
            
            <!-- Download Card -->
            <div class="bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-xl p-8 md:p-10 shadow-sm hover:shadow-md transition-all duration-300 text-center">
                <div class="mb-6">
                    <svg class="w-16 h-16 md:w-20 md:h-20 mx-auto text-blue-600 dark:text-blue-400 transition-colors duration-300" 
                         fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                              d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                </div>
            
                <a href="{{ route('portfolio.download-cv') }}"
                   class="inline-flex items-center justify-center w-full px-6 py-3 md:py-4 bg-blue-600 hover:bg-blue-700 dark:bg-blue-500 dark:hover:bg-blue-600 text-white font-semibold rounded-full transition-all duration-300 hover:scale-105 hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 group"
                   aria-label="Download CV as PDF">
                    <svg class="w-5 h-5 mr-3 transition-transform duration-300 group-hover:-translate-y-0.5"
                         fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10" />
                    </svg>
                    <span class="text-base md:text-lg">Download CV</span>
                    <svg class="w-4 h-4 ml-3 opacity-0 group-hover:opacity-100 transition-all duration-300 transform group-hover:translate-x-1"
                         fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            
                <div class="mt-6 text-sm text-gray-500 dark:text-gray-500">
                    <p>PDF • Updated {{ date('F Y') }} • 2 pages</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
