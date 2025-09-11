<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display the portfolio homepage
     */
    public function index()
    {
        $data = [
            'name' => 'Ngonidzashe Hunzvi',
            'title' => 'Full Stack Developer',
            'bio' => 'Passionate developer with expertise in modern web technologies. Building innovative solutions that make a difference.',
            'skills' => [
                'PHP/Laravel',
                'JavaScript/TypeScript',
                'React/Vue.js',
                'Node.js',
                'MySQL/PostgreSQL',
                'Git/GitHub',
                'Docker',
                'AWS/Cloud Services'
            ],
            'projects' => [
                [
                    'title' => 'E-commerce Platform',
                    'description' => 'Full-stack e-commerce solution with Laravel backend and React frontend',
                    'technologies' => ['Laravel', 'React', 'MySQL', 'Stripe API'],
                    'github_url' => '#',
                    'live_url' => '#'
                ],
                [
                    'title' => 'Task Management App',
                    'description' => 'Collaborative task management application with real-time updates',
                    'technologies' => ['Laravel', 'Vue.js', 'WebSockets', 'MySQL'],
                    'github_url' => '#',
                    'live_url' => '#'
                ],
                [
                    'title' => 'API Integration Service',
                    'description' => 'RESTful API service for third-party integrations',
                    'technologies' => ['Laravel', 'PostgreSQL', 'Redis', 'Docker'],
                    'github_url' => '#',
                    'live_url' => '#'
                ]
            ],
            'experience' => [
                [
                    'company' => 'Tech Company',
                    'position' => 'Senior Full Stack Developer',
                    'duration' => '2022 - Present',
                    'description' => 'Led development of multiple web applications and mentored junior developers.'
                ],
                [
                    'company' => 'Startup Inc',
                    'position' => 'Full Stack Developer',
                    'duration' => '2020 - 2022',
                    'description' => 'Developed and maintained web applications using modern technologies.'
                ]
            ],
            'education' => [
                [
                    'institution' => 'University of Technology',
                    'degree' => 'Bachelor of Science in Computer Science',
                    'year' => '2019'
                ]
            ],
            'contact' => [
                'email' => 'ngonidzashe.hunzvi@example.com',
                'phone' => '+263 XX XXX XXXX',
                'location' => 'Harare, Zimbabwe',
                'linkedin' => 'https://linkedin.com/in/ngonidzashe-hunzvi',
                'github' => 'https://github.com/ngonidzashe-hunzvi'
            ]
        ];

        return view('portfolio.index', compact('data'));
    }

    /**
     * Display the about page
     */
    public function about()
    {
        return view('portfolio.about');
    }

    /**
     * Display the projects page
     */
    public function projects()
    {
        return view('portfolio.projects');
    }

    /**
     * Display the contact page
     */
    public function contact()
    {
        return view('portfolio.contact');
    }

    /**
     * Handle contact form submission
     */
    public function sendMessage(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:1000'
        ]);

        // Here you would typically send an email or save to database
        // For now, we'll just return a success message
        
        return redirect()->route('portfolio.contact')
            ->with('success', 'Thank you for your message! I\'ll get back to you soon.');
    }
}
