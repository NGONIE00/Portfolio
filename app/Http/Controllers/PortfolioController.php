<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;

class PortfolioController extends Controller
{
    public function index()
    {
        $data = [
            'name' => 'Ngonidzashe Hunzvi',
            'title' => 'Full Stack Developer',
            'bio' => 'Passionate developer with expertise in modern web technologies. Building innovative solutions that make a difference.',
        ];

        $tech_logo = [
            ['file' => 'php.svg', 'top' => 'top-4', 'left' => 'left-4', 'delay' => 'delay-[0s]'],
            ['file' => 'laravel.svg', 'top' => 'top-10', 'right' => 'right-6', 'delay' => 'delay-[1s]'],
            ['file' => 'nodedotjs.svg', 'bottom' => 'bottom-4', 'left' => 'left-10', 'delay' => 'delay-[2s]'],
            ['file' => 'mysql.svg', 'bottom' => 'bottom-10', 'right' => 'right-10', 'delay' => 'delay-[4s]'],
            ['file' => 'postgresql.svg', 'top' => 'top-20', 'left' => 'left-1/2', 'delay' => 'delay-[5s]'],
            ['file' => 'react.svg', 'bottom' => 'bottom-20', 'right' => 'right-1/4', 'delay' => 'delay-[6s]'],
            ['file' => 'vuedotjs.svg', 'top' => 'top-32', 'left' => 'left-1/3', 'delay' => 'delay-[7s]'],
            ['file' => 'apachecassandra.svg', 'bottom' => 'bottom-1/3', 'left' => 'left-1/2', 'delay' => 'delay-[8s]'],
            ['file' => 'tailwindcss.svg', 'bottom' => 'bottom-1/4', 'right' => 'right-1/2', 'delay' => 'delay-[10s]'],
            ['file' => 'git.svg', 'bottom' => 'bottom-1/5', 'left' => 'left-1/3', 'delay' => 'delay-[12s]'],
            ['file' => 'kubernetes.svg', 'top' => 'top-1/5', 'right' => 'right-1/4', 'delay' => 'delay-[13s]'],
            ['file' => 'docker.svg', 'bottom' => 'bottom-1/2', 'right' => 'right-1/5', 'delay' => 'delay-[14s]'],
            ['file' => 'jenkins.svg', 'bottom' => 'bottom-1/6', 'right' => 'right-1/6', 'delay' => 'delay-[16s]'],
            ['file' => 'livewire.svg', 'top' => 'top-1/6', 'left' => 'left-1/6', 'delay' => 'delay-[17s]'],
        ];

        return view('portfolio.index', compact('data', 'tech_logo'));
    }

    public function about()
    {
        return view('portfolio.about');
    }

    public function projects()
    {
<<<<<<< HEAD
        $project = [
            [
                'title' => 'TenderReach',
                'description' => 'A WhatsApp-based procurement transparency and supplier support platform for Zimbabwe. Features a WhatsApp-first assistant and a Knowledge Centre with an open-tender index sourced from the PRAZ public eGP board, plus a Founding Supplier Programme.',
                'icon' => '📋',
                'image' => asset('projects/tenderreach.png'),
                'tech' => ['Node.js', 'Express', 'WhatsApp Cloud API', 'Supabase', 'Airtable', 'Vercel'],
                'code' => 'https://github.com/NGONIE00/tendereach_zw',
                'demo' => 'https://tendereachzw.vercel.app',
            ],
            [
                'title' => 'Dare — The Digital Council',
                'description' => 'A voice platform for the Global South, starting in Zimbabwe. Enables real-time voice rooms with speaking indicators, AI-powered moderation and summaries, hand-raise notifications, and a USSD (*447#) path for feature phones.',
                'icon' => '🎙️',
                'image' => asset('projects/dare.png'),
                'tech' => ['Next.js', 'TypeScript', 'Tailwind CSS', 'Supabase', 'Agora RTC', 'Gemini AI'],
                'code' => 'https://github.com/NGONIE00/dare-mini-mvp',
                'demo' => 'https://dare-mini-mvp.vercel.app',
            ],
        ];

        return view('portfolio.projects', compact('project'));
=======
        return view('portfolio.projects', ['project' => []]);
>>>>>>> c502ee5727599d585be6cee745403feb5aed10aa
    }

    public function contact()
    {
        return view('portfolio.contact');
    }

    public function sendMessage(Request $request)
    {
        // Honeypot spam protection - if this field is filled, it's a bot
        if ($request->filled('website')) {
            \Log::warning('Contact form honeypot triggered', [
                'ip' => $request->ip(),
                'user_agent' => $request->userAgent(),
            ]);
            return back()->with('success', 'Thanks for reaching out! I\'ll get back to you soon.');
        }

        // Enhanced validation with stricter email rules
        $validated = $request->validate([
            'name' => [
                'required',
                'string',
                'max:100',
                'min:2',
                'regex:/^[a-zA-Z\s\-\'\.]+$/u',
            ],
            'email' => [
                'required',
                'email:rfc,dns',
                'max:255',
            ],
            'subject' => [
                'required',
                'string',
                'max:150',
                'min:3',
            ],
            'message' => [
                'required',
                'string',
                'max:1000',
                'min:10',
            ],
        ], [
            'name.required' => 'Please provide your name.',
            'name.min' => 'Name must be at least 2 characters.',
            'name.max' => 'Name cannot exceed 100 characters.',
            'name.regex' => 'Name can only contain letters, spaces, hyphens, apostrophes, and periods.',
            'email.required' => 'Please provide your email address.',
            'email.email' => 'Please provide a valid email address.',
            'email.max' => 'Email address cannot exceed 255 characters.',
            'subject.required' => 'Please provide a subject.',
            'subject.min' => 'Subject must be at least 3 characters.',
            'subject.max' => 'Subject cannot exceed 150 characters.',
            'message.required' => 'Please provide a message.',
            'message.min' => 'Message must be at least 10 characters.',
            'message.max' => 'Message cannot exceed 1000 characters.',
        ]);

        // Sanitize inputs to prevent XSS
        $sanitized = [
            'name' => htmlspecialchars(strip_tags($validated['name']), ENT_QUOTES, 'UTF-8'),
            'email' => filter_var($validated['email'], FILTER_SANITIZE_EMAIL),
            'subject' => htmlspecialchars(strip_tags($validated['subject']), ENT_QUOTES, 'UTF-8'),
            'message' => htmlspecialchars(strip_tags($validated['message']), ENT_QUOTES, 'UTF-8'),
        ];

        // Save to database
        ContactMessage::create([
            'name' => $sanitized['name'],
            'email' => $sanitized['email'],
            'subject' => $sanitized['subject'],
            'message' => $sanitized['message'],
            'ip_address' => $request->ip(),
        ]);

        // Log the message
        \Log::info('Portfolio Contact Message', [
            'name' => $sanitized['name'],
            'email' => $sanitized['email'],
            'subject' => $sanitized['subject'],
            'message' => $sanitized['message'],
            'ip' => $request->ip(),
            'user_agent' => $request->userAgent(),
            'time' => now()->format('Y-m-d H:i:s'),
        ]);

        // Success message
        return back()->with('success', 'Thanks for reaching out! I\'ll get back to you soon.');
    }

    public function downloadCV()
    {
        $filePath = storage_path('app/private/Ngonidzashe_Hunzvi_CV.pdf');

        if (!file_exists($filePath)) {
            return redirect()->route('portfolio.about')
                ->with('info', 'CV is currently being updated. Please check back soon.');
        }

        return response()->download($filePath, 'Ngonidzashe_Hunzvi_CV.pdf', [
            'Content-Type' => 'application/pdf',
        ]);
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> c502ee5727599d585be6cee745403feb5aed10aa
