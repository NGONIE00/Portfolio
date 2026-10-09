@extends('layouts.app')

@section('title', 'Admin Login')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-50 dark:bg-gray-900 px-4 py-12">
    <div class="max-w-md w-full">
        
        {{-- Login Card --}}
        <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-xl p-8">
            
            {{-- Header --}}
            <div class="text-center mb-8">
                <div class="w-16 h-16 bg-blue-100 dark:bg-blue-900 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                    </svg>
                </div>
                <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Admin Login</h1>
                <p class="text-gray-600 dark:text-gray-400 mt-2">Enter your password to continue</p>
            </div>

            {{-- Error Message --}}
            @error('password')
                <div class="mb-6 p-4 bg-red-50 dark:bg-red-900/20 border border-red-200 dark:border-red-800 rounded-lg">
                    <p class="text-red-600 dark:text-red-400 text-sm">{{ $message }}</p>
                </div>
            @enderror

            {{-- Login Form --}}
            <form action="{{ route('admin.login.post') }}" method="POST" class="space-y-6">
                @csrf
                
                <div>
                    <label for="password" class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">
                        Password
                    </label>
                    <input 
                        type="password" 
                        name="password" 
                        id="password"
                        required
                        autofocus
                        class="w-full px-4 py-3 rounded-lg border-2 border-gray-300 dark:border-gray-600 
                               bg-white dark:bg-gray-700 text-gray-900 dark:text-white
                               focus:ring-2 focus:ring-blue-500 focus:border-blue-500
                               transition-all duration-300"
                        placeholder="Enter admin password">
                </div>

                <button 
                    type="submit"
                    class="w-full px-6 py-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg
                           transition-all duration-300 hover:scale-[1.02] focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                    Login
                </button>
            </form>

            {{-- Back to Home --}}
            <div class="mt-6 text-center">
                <a href="{{ route('portfolio.index') }}" 
                   class="text-sm text-blue-600 dark:text-blue-400 hover:underline">
                    ← Back to Home
                </a>
            </div>

        </div>

    </div>
</div>
@endsection