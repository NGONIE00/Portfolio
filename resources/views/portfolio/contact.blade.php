@extends('layouts.app')

@section('title', 'Contact - Ngonidzashe Hunzvi')
@section('description', 'Get in touch with Ngonidzashe Hunzvi for your next web development project.')

@section('content')

<!-- Hero Section - Enhanced for Desktop -->
<section class="pt-24 md:pt-32 lg:pt-40 pb-12 md:pb-16 lg:pb-20 bg-gradient-to-br from-gray-50 via-white to-gray-100 dark:from-gray-900 dark:via-gray-800 dark:to-gray-900 border-b border-gray-200 dark:border-gray-700">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 dark:text-gray-100 mb-4 md:mb-6 transition-colors duration-300">
            Let's Work <span class="text-blue-600 dark:text-blue-400">Together</span>
        </h1>
        <p class="text-base sm:text-lg md:text-xl text-gray-600 dark:text-gray-400 transition-colors duration-300 max-w-2xl mx-auto">
            Have a project in mind? I'd love to hear about it. Fill out the form below and I'll get back to you as soon as possible.
        </p>
    </div>
</section>

<!-- Contact Form Section - Desktop Optimized -->
<section class="py-12 md:py-16 lg:py-20 bg-white dark:bg-gray-900 transition-colors duration-300">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Success Message -->
        @if(session('success'))
            <div class="mb-8 p-6 bg-green-50 dark:bg-green-900/20 border-2 border-green-400 dark:border-green-600 rounded-2xl text-center animate-fade-in shadow-sm">
                <div class="flex items-center justify-center mb-3">
                    <div class="w-12 h-12 bg-green-100 dark:bg-green-800 rounded-full flex items-center justify-center">
                        <svg class="w-6 h-6 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>
                </div>
                <p class="text-green-700 dark:text-green-300 font-semibold text-lg">{{ session('success') }}</p>
                <p class="text-green-600 dark:text-green-400 text-sm mt-2">I'll get back to you soon!</p>
            </div>
        @endif

        <!-- Form Card -->
        <div class="bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-2xl shadow-lg p-6 md:p-8 lg:p-10">
            <form action="{{ route('portfolio.contact.send') }}" method="POST" class="space-y-6 md:space-y-8" id="contact-form">
                @csrf
                
                <!-- Honeypot field for spam protection -->
                <div style="position: absolute; left: -9999px; opacity: 0; pointer-events: none;" aria-hidden="true">
                    <label for="website">Website (leave blank)</label>
                    <input type="text" name="website" id="website" tabindex="-1" autocomplete="off">
                </div>
                
                <!-- Name & Email Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Name -->
                    <div class="form-group">
                        <label for="name" class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">
                            Name <span class="text-red-500">*</span>
                        </label>
                        <input
                            type="text"
                            name="name"
                            id="name"
                            value="{{ old('name') }}"
                            required
                            minlength="2"
                            maxlength="100"
                            pattern="[a-zA-Z\s\-\'\.]+"
                            title="Name can only contain letters, spaces, hyphens, apostrophes, and periods"
                            class="w-full px-4 py-3 md:py-4 rounded-xl border-2 border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-gray-100 
                                   focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:focus:border-blue-400
                                   transition-all duration-300 
                                   placeholder:text-gray-400 dark:placeholder:text-gray-500"
                            placeholder="John Doe"
                        >
                        @error('name')
                            <p class="text-sm text-red-600 dark:text-red-400 mt-2 flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                </svg>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div class="form-group">
                        <label for="email" class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">
                            Email <span class="text-red-500">*</span>
                        </label>
                        <input
                            type="email"
                            name="email"
                            id="email"
                            value="{{ old('email') }}"
                            required
                            maxlength="255"
                            pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$"
                            title="Please enter a valid email address"
                            class="w-full px-4 py-3 md:py-4 rounded-xl border-2 border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-gray-100 
                                   focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:focus:border-blue-400
                                   transition-all duration-300
                                   placeholder:text-gray-400 dark:placeholder:text-gray-500"
                            placeholder="john@example.com"
                            autocomplete="email"
                        >
                        @error('email')
                            <p class="text-sm text-red-600 dark:text-red-400 mt-2 flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                </svg>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                </div>

                <!-- Subject -->
                <div class="form-group">
                    <label for="subject" class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">
                        Subject <span class="text-red-500">*</span>
                    </label>
                    <input
                        type="text"
                        name="subject"
                        id="subject"
                        value="{{ old('subject') }}"
                        required
                        minlength="3"
                        maxlength="150"
                        class="w-full px-4 py-3 md:py-4 rounded-xl border-2 border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-gray-100 
                               focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:focus:border-blue-400
                               transition-all duration-300
                               placeholder:text-gray-400 dark:placeholder:text-gray-500"
                        placeholder="What's this about?"
                    >
                    @error('subject')
                        <p class="text-sm text-red-600 dark:text-red-400 mt-2 flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                            </svg>
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Message -->
                <div class="form-group">
                    <label for="message" class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">
                        Message <span class="text-red-500">*</span>
                    </label>
                    <textarea
                        name="message"
                        id="message"
                        rows="6"
                        required
                        minlength="10"
                        maxlength="1000"
                        class="w-full px-4 py-3 md:py-4 rounded-xl border-2 border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-gray-100 
                               focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:focus:border-blue-400
                               transition-all duration-300 resize-none
                               placeholder:text-gray-400 dark:placeholder:text-gray-500"
                        placeholder="Tell me about your project..."
                    >{{ old('message') }}</textarea>
                    <div class="flex justify-between items-center mt-2">
                        @error('message')
                            <p class="text-sm text-red-600 dark:text-red-400 flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                </svg>
                                {{ $message }}
                            </p>
                        @else
                            <span></span>
                        @enderror
                        <span class="text-sm font-medium text-gray-500 dark:text-gray-400" id="char-count">0 / 1000</span>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="pt-4">
                    <button type="submit"
                            class="w-full inline-flex items-center justify-center px-8 py-4 md:py-5 
                                   bg-blue-600 hover:bg-blue-700 dark:bg-blue-500 dark:hover:bg-blue-600 
                                   text-white font-semibold text-base md:text-lg rounded-xl 
                                   transition-all duration-300 hover:scale-[1.02] hover:shadow-xl 
                                   focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2
                                   disabled:opacity-50 disabled:cursor-not-allowed"
                            id="submit-btn">
                        <span class="btn-text flex items-center">
                            <span>Send Message</span>
                            <svg class="ml-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                            </svg>
                        </span>
                        <span class="btn-loading hidden flex items-center">
                            <svg class="animate-spin -ml-1 mr-3 h-5 w-5" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                            </svg>
                            Sending...
                        </span>
                    </button>
                </div>
            </form>
        </div>

        <!-- Contact Info Cards - DESKTOP ONLY (hidden on mobile/tablet) -->
        <div class="hidden lg:grid mt-12 grid-cols-3 gap-6 text-center">
            <!-- Email -->
            <div class="p-6 bg-gray-50 dark:bg-gray-800 rounded-xl border border-gray-200 dark:border-gray-700 hover:shadow-md transition-shadow duration-300">
                <div class="w-12 h-12 bg-blue-100 dark:bg-blue-900/30 rounded-full flex items-center justify-center mx-auto mb-3">
                    <svg class="w-6 h-6 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                </div>
                <h3 class="font-semibold text-gray-900 dark:text-gray-100 mb-1">Email</h3>
                <a href="mailto:ngoniehunzvie@gmail.com" class="text-sm text-blue-600 dark:text-blue-400 hover:underline">
                    ngoniehunzvie@gmail.com
                </a>
            </div>

            <!-- Location -->
            <div class="p-6 bg-gray-50 dark:bg-gray-800 rounded-xl border border-gray-200 dark:border-gray-700 hover:shadow-md transition-shadow duration-300">
                <div class="w-12 h-12 bg-green-100 dark:bg-green-900/30 rounded-full flex items-center justify-center mx-auto mb-3">
                    <svg class="w-6 h-6 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                </div>
                <h3 class="font-semibold text-gray-900 dark:text-gray-100 mb-1">Location</h3>
                <p class="text-sm text-gray-600 dark:text-gray-400">Harare, Zimbabwe</p>
            </div>

            <!-- Response Time -->
            <div class="p-6 bg-gray-50 dark:bg-gray-800 rounded-xl border border-gray-200 dark:border-gray-700 hover:shadow-md transition-shadow duration-300">
                <div class="w-12 h-12 bg-purple-100 dark:bg-purple-900/30 rounded-full flex items-center justify-center mx-auto mb-3">
                    <svg class="w-6 h-6 text-purple-600 dark:text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="font-semibold text-gray-900 dark:text-gray-100 mb-1">Response Time</h3>
                <p class="text-sm text-gray-600 dark:text-gray-400">Within 24 hours</p>
            </div>
        </div>
       
    </div>
</section>

@endsection
