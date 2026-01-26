@extends('layouts.app')

@section('title', 'About - Ngonidzashe Hunzvi')
@section('description', 'Learn more about Ngonidzashe Hunzvi, a passionate Full Stack Developer with expertise in modern web technologies.')

@section('content')

<!-- About Content -->
<section class="py-20 bg-white dark:bg-gray-900 border-b border-gray-200 dark:border-gray-700 text-gray-900 dark:text-gray-300 transition-colors duration-300">
    <div class="section-container">
        <div class="flex flex-col lg:flex-row items-center lg:items-start text-center lg:text-left space-y-4 lg:space-y-0 lg:space-x-12 mb-10">
            <!-- Profile Section -->
            <div class="flex flex-col items-center lg:items-start space-y-4">
                <div class="w-64 h-64 bg-gray-100 dark:bg-gray-800 rounded-full flex items-center justify-center border border-gray-300 dark:border-gray-700 ring-4 ring-gray-200 dark:ring-gray-800 overflow-hidden transition-colors duration-300">
                    {{-- Replace with actual image when ready --}}
                    <img src="{{ asset('profile.jpg') }}" alt="Ngonidzashe Hunzvi" class="w-full h-full object-cover rounded-full">
                   {{--<span class="inline-flex items-center justify-center w-20 h-20 rounded-full bg-gray-200 dark:bg-gray-800 text-gray-700 dark:text-gray-200 font-bold text-3xl shadow-sm ring-1 ring-gray-300 dark:ring-gray-700 uppercase tracking-wide transition-all duration-300 hover:-translate-y-0.5 hover:bg-gray-300 dark:hover:bg-gray-700">
                        NH
                    </span> --}}
                </div>
                <h3 class="text-3xl font-bold text-gray-900 dark:text-gray-200 transition-colors duration-300">Ngonidzashe Hunzvi</h3>
            </div>
            
            <!-- Location Section -->
            <div class="flex-1 lg:mt-16">
                <div class="card">
                    <div class="flex items-start space-x-3">
                        <div class="flex-shrink-0">
                            <svg class="w-6 h-6 text-gray-600 dark:text-gray-400 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-lg font-semibold text-gray-900 dark:text-gray-200 transition-colors duration-300">Location</h4>
                            <p class="text-gray-600 dark:text-gray-400 transition-colors duration-300">Harare, Zimbabwe</p>
                            <p class="text-sm text-gray-500 dark:text-gray-500 transition-colors duration-300 mt-1">Available for remote work worldwide</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <h2 class="section-title">My Story</h2>
        <div class="space-y-6 text-gray-600 dark:text-gray-400 text-lg transition-colors duration-300">
            <p>Hi there! I'm Ngonidzashe Hunzvi, a dedicated Full Stack Developer and ABMA Computing & Information Systems student based in Harare, Zimbabwe. My journey into software development began with a simple curiosity about how websites function—and has since grown into a lifelong passion for building impactful digital experiences.</p>
            <p>With a strong foundation in backend technologies like PHP and Laravel, and frontend frameworks such as React and Vue.js, I craft modern web applications that are both powerful and user-friendly. I believe in writing clean, scalable code and designing interfaces that are intuitive and accessible to all users.</p>
            <p>My development philosophy centers on performance, reliability, and maintainability. I strive to deliver solutions that not only meet business goals but also enhance the lives of those who use them. Whether it's a sleek dashboard or a dynamic e-commerce platform, I bring creativity and precision to every project.</p>
            <p>As I continue to grow in this field, I'm excited to collaborate, learn, and contribute to the ever-evolving tech landscape. Let's build something amazing together.</p>
        </div>
    </div>
</section>

<!-- Education & Certifications -->
<section class="section-padding bg-white dark:bg-gray-900 border-b border-gray-200 dark:border-gray-700 text-gray-900 dark:text-gray-300 transition-colors duration-300">
    <div class="section-container text-center">
        <div class="section-header">
            <h2 class="section-title">Education & Learning</h2>
            <p class="section-subtitle">My educational background and continuous learning journey</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 text-left">
            <div class="card card-interactive">
                <h3 class="text-xl font-bold text-gray-900 dark:text-gray-200 mb-4 transition-colors duration-300">Formal Education</h3>
                <div class="space-y-4 text-gray-600 dark:text-gray-400 transition-colors duration-300">
                    <div>
                        <h4 class="font-semibold text-gray-800 dark:text-gray-200 transition-colors duration-300">Diploma in Computing and Information Systems</h4>
                        <a href="https://abma.uk.com/" target="_blank" class="text-blue-600  dark:text-blue-400 hover:underline">ABMA UK</a>
                        <p class="text-gray-500 dark:text-gray-500">2024-2026</p>
                    </div>
                </div>
            </div>

            <div class="card card-interactive">
                <h3 class="text-xl font-bold text-gray-900 dark:text-gray-200 mb-4 transition-colors duration-300">Continuous Learning</h3>
                <ul class="space-y-2 text-gray-600 dark:text-gray-400 transition-colors duration-300">
                    <li>• Agile & Scrum Methodologies</li>
                    <li>• DevOps & CI/CD</li>
                    <li>• Security & Performance</li>
                    <li>• System Design & Architecture</li>
                    <li>• Technical Writing</li>
                </ul>
            </div>
        </div>
    </div>
    
</section>

<!-- Values & Approach -->
<section class="section-padding bg-white dark:bg-gray-900 border-b border-gray-200 dark:border-gray-700 text-gray-900 dark:text-gray-300 transition-colors duration-300">
    <div class="section-container text-center">
        <div class="section-header">
            <h2 class="section-title">My Values & Approach</h2>
            <p class="section-subtitle">What drives me as a developer</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Problem Solving -->
            <div class="text-center transition-all duration-300 hover:-translate-y-2">
                <div class="w-16 h-16 bg-gray-100 dark:bg-gray-800 rounded-full flex items-center justify-center mx-auto mb-4 transition-all duration-300 hover:bg-blue-50 dark:hover:bg-blue-900/20 hover:scale-110">
                    <svg class="w-8 h-8 text-blue-600 dark:text-blue-400 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 dark:text-gray-200 mb-2 transition-colors duration-300">Problem Solving</h3>
                <p class="text-gray-600 dark:text-gray-400 transition-colors duration-300">I love tackling complex challenges and finding elegant solutions that make a real impact.</p>
            </div>

            <!-- Continuous Learning -->
            <div class="text-center transition-all duration-300 hover:-translate-y-2">
                <div class="w-16 h-16 bg-gray-100 dark:bg-gray-800 rounded-full flex items-center justify-center mx-auto mb-4 transition-all duration-300 hover:bg-green-50 dark:hover:bg-green-900/20 hover:scale-110">
                    <svg class="w-8 h-8 text-green-600 dark:text-green-400 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 dark:text-gray-200 mb-2 transition-colors duration-300">Continuous Learning</h3>
                <p class="text-gray-600 dark:text-gray-400 transition-colors duration-300">Technology evolves rapidly, and I'm committed to staying current with the latest trends and best practices.</p>
            </div>

            <!-- Collaboration -->
            <div class="text-center transition-all duration-300 hover:-translate-y-2">
                <div class="w-16 h-16 bg-gray-100 dark:bg-gray-800 rounded-full flex items-center justify-center mx-auto mb-4 transition-all duration-300 hover:bg-purple-50 dark:hover:bg-purple-900/20 hover:scale-110">
                    <svg class="w-8 h-8 text-purple-600 dark:text-purple-400 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 dark:text-gray-200 mb-2 transition-colors duration-300">Collaboration</h3>
                <p class="text-gray-600 dark:text-gray-400 transition-colors duration-300">I believe the best solutions come from working together and sharing knowledge with the community.</p>
            </div>
        </div>
    </div>
</section>

<!-- Download CV Section -->
<section class="section-padding bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-300 transition-colors duration-300">
    <div class="max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8">
        <h2 class="section-title">Download My CV</h2>
        <p class="section-subtitle mb-8">Get a detailed overview of my skills, experience, and projects in PDF format.</p>
        
            <div class="card max-w-md mx-auto text-center">
            <div class="mb-6">
                <svg class="w-16 h-16 mx-auto text-gray-600 dark:text-gray-400 transition-colors duration-300" 
                     fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                          d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
            </div>
        
            <a href="{{ route('portfolio.download-cv') }}"
               class="btn-primary w-full group inline-flex items-center justify-center"
               aria-label="Download CV as PDF">
                <svg class="w-5 h-5 mr-3 transition-transform duration-300 group-hover:-translate-y-0.5"
                     fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10" />
                </svg>
                <span class="font-medium">Download CV</span>
                <div class="ml-3 flex-shrink-0 opacity-0 group-hover:opacity-100 transition-all duration-300 transform group-hover:translate-x-1">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M9 5l7 7-7 7" />
                    </svg>
                </div>
            </a>
        
            <div class="mt-4 text-sm text-gray-500 dark:text-gray-500">
                <p>
                    <span class="sr-only">File details:</span>
                    PDF • Updated {{ date('F Y') }} • 2 pages
                </p>
            </div>
        </div>
        
    </div>
</section>

@endsection