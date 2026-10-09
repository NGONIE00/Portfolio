@extends('layouts.app')

@section('title', 'Admin - Messages')

@section('content')
<div class="min-h-screen bg-gray-50 dark:bg-gray-900 py-8 px-4">
    <div class="max-w-4xl mx-auto">
        
        {{-- Header --}}
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6 mb-6">
            <h1 class="text-2xl font-bold text-gray-900 dark:text-white">
                📬 Contact Messages
            </h1>
            <p class="text-gray-600 dark:text-gray-400 mt-1">
                {{ $unreadCount }} unread • {{ $messages->total() }} total
            </p>
        </div>

        {{-- Messages List --}}
        @forelse($messages as $message)
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-4 mb-4 {{ !$message->is_read ? 'border-l-4 border-blue-500' : '' }}">
                
                {{-- Header --}}
                <div class="flex items-start justify-between mb-2">
                    <div class="flex-1">
                        @if(!$message->is_read)
                            <span class="inline-block px-2 py-1 text-xs bg-blue-500 text-white rounded mb-2">NEW</span>
                        @endif
                        <h3 class="font-bold text-gray-900 dark:text-white">
                            {{ $message->subject }}
                        </h3>
                        <p class="text-sm text-gray-600 dark:text-gray-400">
                            From: {{ $message->name }} • {{ $message->email }}
                        </p>
                        <p class="text-xs text-gray-500 dark:text-gray-500 mt-1">
                            {{ $message->created_at->diffForHumans() }}
                        </p>
                    </div>
                </div>

                {{-- Message Preview --}}
                <p class="text-gray-700 dark:text-gray-300 text-sm mb-3 line-clamp-2">
                    {{ Str::limit($message->message, 100) }}
                </p>

                {{-- Actions --}}
                <div class="flex gap-2">
                    <a href="{{ route('admin.message.view', $message->id) }}" 
                       class="px-4 py-2 bg-blue-500 text-white rounded text-sm hover:bg-blue-600">
                        View
                    </a>
                    <form action="{{ route('admin.message.delete', $message->id) }}" method="POST" 
                          onsubmit="return confirm('Delete this message?')">
                        @csrf
                        @method('DELETE')
                        <button class="px-4 py-2 bg-red-500 text-white rounded text-sm hover:bg-red-600">
                            Delete
                        </button>
                    </form>
                </div>
            </div>
        @empty
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-8 text-center">
                <p class="text-gray-500 dark:text-gray-400">No messages yet</p>
            </div>
        @endforelse

        {{-- Pagination --}}
        <div class="mt-6">
            {{ $messages->links() }}
        </div>

    </div>
</div>
@endsection