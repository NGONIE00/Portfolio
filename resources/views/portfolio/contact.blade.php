@extends('layouts.app')

@section('title', 'Contact - Ngonidzashe Hunzvi')
@section('description', 'Get in touch with Ngonidzashe Hunzvi for your next web development project.')

@section('content')

<!-- Hero Section -->
<section class="pt-32 pb-16 bg-gradient-to-br from-gray-50 via-white to-gray-100 dark:from-gray-900 dark:via-gray-800 dark:to-gray-900 border-t-2 border-b-2 border-gray-300 dark:border-gray-600">
    <div class="max-w-4xl mx-auto px-6 text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-gray-100 mb-4 transition-colors duration-300">
            Let's Work <span class="text-blue-600 dark:text-blue-400">Together</span>
        </h1>
        <p class="text-lg text-gray-600 dark:text-gray-400 transition-colors duration-300">
            Have a project in mind? I'd love to hear about it.
        </p>
    </div>
</section>
<!-- Contact Form -->
<section class="py-16 bg-white dark:bg-gray-900 transition-colors duration-300">
    <div class="max-w-2xl mx-auto px-6">
        
        @if(session('success'))
            <div class="mb-8 p-4 bg-green-100 dark:bg-green-900/30 border border-green-300 dark:border-green-700 rounded-xl text-center animate-fade-in">
                <div class="flex items-center justify-center mb-2">
                    <svg class="w-6 h-6 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                </div>
                <p class="text-green-700 dark:text-green-300 font-medium">{{ session('success') }}</p>
            </div>
        @endif

        <form action="{{ route('portfolio.contact.send') }}" method="POST" class="space-y-6" id="contact-form">
            @csrf
            
            <!-- Honeypot field for spam protection (hidden from users) -->
            <div style="position: absolute; left: -9999px; opacity: 0; pointer-events: none;" aria-hidden="true">
                <label for="website">Website (leave blank)</label>
                <input type="text" name="website" id="website" tabindex="-1" autocomplete="off">
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Name -->
                <div class="form-group">
                    <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        Name *
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
                        class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-gray-100 focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300"
                        placeholder="Your name"
                    >
                    @error('name')
                        <p class="text-sm text-red-600 dark:text-red-400 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Email -->
                <div class="form-group">
                    <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        Email *
                    </label>
                    <input
                        type="email"
                        name="email"
                        id="email"
                        value="{{ old('email') }}"
                        required
                        maxlength="255"
                        pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$"
                        title="Please enter a valid email address (e.g., yourname@example.com)"
                        class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-gray-100 focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300"
                        placeholder="your@email.com"
                        autocomplete="email"
                    >
                    @error('email')
                        <p class="text-sm text-red-600 dark:text-red-400 mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- Subject -->
            <div class="form-group">
                <label for="subject" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                    Subject *
                </label>
                <input
                    type="text"
                    name="subject"
                    id="subject"
                    value="{{ old('subject') }}"
                    required
                    minlength="3"
                    maxlength="150"
                    class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-gray-100 focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300"
                    placeholder="What's this about?"
                >
                @error('subject')
                    <p class="text-sm text-red-600 dark:text-red-400 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Message -->
            <div class="form-group">
                <label for="message" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                    Message *
                </label>
                <textarea
                    name="message"
                    id="message"
                    rows="6"
                    required
                    minlength="10"
                    maxlength="1000"
                    class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-gray-100 focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300 resize-none"
                    placeholder="Tell me about your project..."
                >{{ old('message') }}</textarea>
                <div class="flex justify-between items-center mt-1">
                    @error('message')
                        <p class="text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                    @else
                        <span></span>
                    @enderror
                    <span class="text-sm text-gray-500 dark:text-gray-400" id="char-count">0 / 1000</span>
                </div>
            </div>

            <!-- Submit Button -->
            <button type="submit"
                    class="w-full inline-flex items-center justify-center px-8 py-4 bg-blue-600 hover:bg-blue-700 dark:bg-blue-500 dark:hover:bg-blue-600 text-white font-semibold rounded-full transition-all duration-300 hover:scale-105 hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2"
                    id="submit-btn">
                <span class="btn-text flex items-center">
                    <span>Send Message</span>
                    <svg class="ml-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
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
        </form>

       
    </div>
</section>


@endsection