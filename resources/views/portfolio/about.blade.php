@extends('layouts.app')

@section('title', 'About - Ngonidzashe Hunzvi')
@section('description', 'Ngonidzashe Hunzvi is a Full-Stack Developer and Computing & Information Systems professional from Zimbabwe, building practical digital products.')

@section('content')

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
    </div>
</section>

@endsection