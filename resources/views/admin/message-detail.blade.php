@extends('layouts.app')

@section('title', 'View Message')

@section('content')
<div class="min-h-screen bg-gray-50 dark:bg-gray-900 py-8 px-4">
    <div class="max-w-3xl mx-auto">
        
        {{-- Back Button --}}
        <a href="{{ route('admin.messages') }}" 
           class="inline-flex items-center text-blue-500 hover:text-blue-600 mb-4">
            ← Back to Messages
        </a>

        {{-- Message Card --}}
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow overflow-hidden">
            
            {{-- Header --}}
            <div class="bg-blue-500 text-white p-6">
                <h1 class="text-2xl font-bold mb-2">{{ $message->subject }}</h1>
                <p class="text-blue-100">{{ $message->created_at->format('M d, Y \a\t g:i A') }}</p>
            </div>

            {{-- Body --}}
            <div class="p-6">
                
                {{-- From --}}
                <div class="mb-6 p-4 bg-gray-50 dark:bg-gray-700 rounded">
                    <p class="text-sm text-gray-600 dark:text-gray-400">From:</p>
                    <p class="font-bold text-gray-900 dark:text-white">{{ $message->name }}</p>
                    <a href="mailto:{{ $message->email }}" 
                       class="text-blue-500 hover:underline">
                        {{ $message->email }}
                    </a>
                </div>

                {{-- Message --}}
                <div class="mb-6">
                    <p class="text-sm text-gray-600 dark:text-gray-400 mb-2">Message:</p>
                    <div class="p-4 bg-gray-50 dark:bg-gray-700 rounded">
                        <p class="text-gray-900 dark:text-white whitespace-pre-wrap">{{ $message->message }}</p>
                    </div>
                </div>

                {{-- Info --}}
                <div class="text-sm text-gray-500 dark:text-gray-400 mb-6">
                    <p>IP: {{ $message->ip_address }}</p>
                    <p>Received: {{ $message->created_at->diffForHumans() }}</p>
                </div>

                {{-- Actions --}}
                <div class="flex gap-3">
                    <a href="mailto:{{ $message->email }}?subject=Re: {{ $message->subject }}" 
                       class="flex-1 px-6 py-3 bg-blue-500 text-white rounded text-center hover:bg-blue-600">
                        Reply via Email
                    </a>
                    <form action="{{ route('admin.message.delete', $message->id) }}" method="POST" 
                          class="flex-1" onsubmit="return confirm('Delete this message?')">
                        @csrf
                        @method('DELETE')
                        <button class="w-full px-6 py-3 bg-red-500 text-white rounded hover:bg-red-600">
                            Delete
                        </button>
                    </form>
                </div>

            </div>
        </div>

    </div>
</div>
@endsection