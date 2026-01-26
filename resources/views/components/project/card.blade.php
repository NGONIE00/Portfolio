@props([
    'title',
    'description',
    'icon' => '💡',
    'bg' => 'bg-gray-100 dark:bg-gray-800',
    'tech' => [],
    'code' => null,
    'demo' => null,
])

<div class="group rounded-2xl shadow-md overflow-hidden transition-all duration-300 border border-gray-200 dark:border-gray-700 {{ $bg }}">
    <div class="h-56 flex items-center justify-center text-6xl text-gray-700 dark:text-gray-300">
        {{ $icon }}
    </div>

    <div class="p-6">
        <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-3">
            {{ $title }}
        </h3>

        <p class="text-gray-600 dark:text-gray-400 mb-6 leading-relaxed">
            {{ $description }}
        </p>

        @if(!empty($tech))
            <div class="flex flex-wrap gap-2 mb-6">
                @foreach ($tech as $tag)
                    <span class="bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-gray-300 text-sm px-3 py-1 rounded-full font-medium">
                        {{ $tag }}
                    </span>
                @endforeach
            </div>
        @endif

        <div class="flex flex-wrap gap-4">
            @if ($code)
                <a href="{{ $code }}" aria-label="View source code for {{ $title }}"
                   class="flex items-center px-4 py-2 bg-gray-300 dark:bg-gray-700 text-gray-900 dark:text-white rounded-full hover:bg-gray-400 dark:hover:bg-gray-600 transition">
                    <svg class="h-4 w-4 mr-2" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.18 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.65.24 2.88.12 3.18.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0024 12c0-6.63-5.37-12-12-12z"/>
                    </svg>
                    Code
                </a>
            @endif

            @if ($demo)
                <a href="{{ $demo }}" aria-label="View live demo of {{ $title }}"
                   class="flex items-center px-4 py-2 bg-gray-900 dark:bg-white text-white dark:text-gray-900 rounded-full hover:opacity-90 transition">
                    <svg class="h-4 w-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-3m-1 1l-4-4 4-4m-5 4h10" />
                    </svg>
                    Live Demo
                </a>
            @endif
        </div>
    </div>
</div>