@extends('layouts.app')

@section('title', 'About - Ngonidzashe Hunzvi')
@section('description', 'Learn more about Ngonidzashe Hunzvi, a passionate Full Stack Developer with expertise in modern web technologies.')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-blue-600 to-purple-700 text-white py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">About Me</h1>
            <p class="text-xl text-blue-100 max-w-3xl mx-auto">
                Get to know the person behind the code
            </p>
        </div>
    </div>
</section>

<!-- About Content -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-3xl font-bold text-gray-900 mb-6">My Story</h2>
                <div class="space-y-4 text-gray-700">
                    <p>
                        Hello! I'm Ngonidzashe Hunzvi, a passionate Full Stack Developer based in Harare, Zimbabwe. 
                        My journey in software development began with a curiosity about how websites work and has 
                        evolved into a deep passion for creating innovative digital solutions.
                    </p>
                    <p>
                        I specialize in building modern web applications using PHP/Laravel for the backend and 
                        JavaScript frameworks like React and Vue.js for the frontend. My approach to development 
                        is centered around writing clean, maintainable code and creating user experiences that 
                        make a real difference.
                    </p>
                    <p>
                        When I'm not coding, you can find me exploring new technologies, contributing to open-source 
                        projects, or sharing knowledge with the developer community. I believe in continuous learning 
                        and staying up-to-date with the latest trends in web development.
                    </p>
                </div>
            </div>
            <div class="text-center">
                <div class="w-64 h-64 mx-auto bg-gradient-to-br from-blue-400 to-purple-500 rounded-full flex items-center justify-center mb-6">
                    <div class="text-white text-6xl">👨‍💻</div>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-2">Ngonidzashe Hunzvi</h3>
                <p class="text-lg text-gray-600">Full Stack Developer</p>
            </div>
        </div>
    </div>
</section>

<!-- Skills & Technologies -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Skills & Expertise</h2>
            <p class="text-lg text-gray-600">Technologies and tools I work with</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Backend Development -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <div class="text-3xl mb-4">⚙️</div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Backend Development</h3>
                <ul class="space-y-2 text-gray-700">
                    <li>• PHP & Laravel Framework</li>
                    <li>• Node.js & Express</li>
                    <li>• RESTful API Development</li>
                    <li>• Database Design (MySQL, PostgreSQL)</li>
                    <li>• Authentication & Security</li>
                </ul>
            </div>

            <!-- Frontend Development -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <div class="text-3xl mb-4">🎨</div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Frontend Development</h3>
                <ul class="space-y-2 text-gray-700">
                    <li>• React & Vue.js</li>
                    <li>• JavaScript & TypeScript</li>
                    <li>• HTML5 & CSS3</li>
                    <li>• Tailwind CSS & Bootstrap</li>
                    <li>• Responsive Design</li>
                </ul>
            </div>

            <!-- DevOps & Tools -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <div class="text-3xl mb-4">🚀</div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">DevOps & Tools</h3>
                <ul class="space-y-2 text-gray-700">
                    <li>• Git & GitHub</li>
                    <li>• Docker & Containerization</li>
                    <li>• AWS & Cloud Services</li>
                    <li>• CI/CD Pipelines</li>
                    <li>• Testing & Quality Assurance</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Education & Certifications -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Education & Learning</h2>
            <p class="text-lg text-gray-600">My educational background and continuous learning journey</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-gray-50 p-6 rounded-lg">
                <h3 class="text-xl font-bold text-gray-900 mb-4">Formal Education</h3>
                <div class="space-y-4">
                    <div>
                        <h4 class="font-semibold text-gray-900">Bachelor of Science in Computer Science</h4>
                        <p class="text-blue-600">University of Technology</p>
                        <p class="text-gray-600">2019</p>
                    </div>
                </div>
            </div>
            
            <div class="bg-gray-50 p-6 rounded-lg">
                <h3 class="text-xl font-bold text-gray-900 mb-4">Continuous Learning</h3>
                <div class="space-y-2 text-gray-700">
                    <p>• Laravel Certification</p>
                    <p>• AWS Cloud Practitioner</p>
                    <p>• React Developer Certification</p>
                    <p>• Agile & Scrum Methodologies</p>
                    <p>• Modern JavaScript ES6+</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Values & Approach -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">My Values & Approach</h2>
            <p class="text-lg text-gray-600">What drives me as a developer</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="text-center">
                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <div class="text-2xl">🎯</div>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Problem Solving</h3>
                <p class="text-gray-700">I love tackling complex challenges and finding elegant solutions that make a real impact.</p>
            </div>
            
            <div class="text-center">
                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <div class="text-2xl">📚</div>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Continuous Learning</h3>
                <p class="text-gray-700">Technology evolves rapidly, and I'm committed to staying current with the latest trends and best practices.</p>
            </div>
            
            <div class="text-center">
                <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <div class="text-2xl">🤝</div>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Collaboration</h3>
                <p class="text-gray-700">I believe the best solutions come from working together and sharing knowledge with the community.</p>
            </div>
        </div>
    </div>
</section>

<!-- Contact CTA -->
<section class="py-16 bg-blue-600 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Let's Connect</h2>
        <p class="text-xl mb-8 text-blue-100">I'm always interested in new opportunities and interesting projects.</p>
        <a href="{{ route('portfolio.contact') }}" 
           class="bg-yellow-400 text-gray-900 px-8 py-3 rounded-lg font-semibold hover:bg-yellow-300 transition-colors">
            Get In Touch
        </a>
    </div>
</section>
@endsection
