<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Show login form
    public function showLogin()
    {
        return view('admin.login');
    }

    // Handle login
    public function login(Request $request)
    {
        $password = $request->input('password');
        
        // Check password (change 'your-secret-password' to your actual password)
        if ($password === 'your-secret-password') {
            session(['admin_logged_in' => true]);
            return redirect()->route('admin.messages');
        }

        return back()->withErrors(['password' => 'Invalid password']);
    }

    // Logout
    public function logout()
    {
        session()->forget('admin_logged_in');
        return redirect()->route('portfolio.index');
    }

    // Show all messages
    public function messages()
    {
        $messages = ContactMessage::latest()->paginate(20);
        $unreadCount = ContactMessage::where('is_read', false)->count();
        
        return view('admin.messages', compact('messages', 'unreadCount'));
    }

    // Show one message
    public function viewMessage($id)
    {
        $message = ContactMessage::findOrFail($id);
        
        // Mark as read
        $message->update(['is_read' => true]);
        
        return view('admin.message-detail', compact('message'));
    }

    // Delete message
    public function deleteMessage($id)
    {
        ContactMessage::findOrFail($id)->delete();
        return redirect()->route('admin.messages')->with('success', 'Message deleted');
    }
}
