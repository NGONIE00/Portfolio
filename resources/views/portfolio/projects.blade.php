@extends('layouts.app')

@section('title', 'Projects - Ngonidzashe Hunzvi')
@section('description', 'Explore the portfolio of projects by Ngonidzashe Hunzvi, showcasing innovative web applications and solutions.')

@section('content')
<!-- Hero Section -->
<section class="pt-20 pb-20 bg-white dark:bg-gray-900 text-center">
    <div class="section-container border border-gray-200 dark:border-gray-700 rounded-2xl py-12">
        <h1 class="text-5xl md:text-6xl font-bold text-gray-900 dark:text-white mb-6">
            My <span class="text-blue-600 dark:text-blue-400">Projects</span>
        </h1>
        <p class="text-xl text-gray-600 dark:text-gray-400 max-w-3xl mx-auto">
            A collection of full-stack applications and tools I've built—from concept to deployment.
        </p>
    </div>
</section>

<!-- Projects Grid -->
<section class="section-padding bg-white dark:bg-gray-900">
    <div class="section-container">
        @if(isset($project) && count($project) > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($project as $p)
                    <x-project.card
                        :title="$p['title']"
                        :description="$p['description']"
                        :icon="$p['icon']"
                        bg="bg-gray-100 dark:bg-neutral-800"
                        :tech="$p['tech']"
                        :code="$p['code'] ?? null"
                        :demo="$p['demo'] ?? null"
                    />
                @endforeach
            </div>
        @else
           <!-- Empty State -->
            <div class="text-center py-16">
                <div class="text-6xl mb-6">🚧</div>
                <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">
                    Projects Coming Soon
                </h3>
                <p class="text-gray-600 dark:text-gray-400 max-w-md mx-auto">
                    I'm currently working on some exciting projects. Check back soon to see what I've been building!
                </p> 
            </div>
        @endif
    </div>
</section>
@endsection