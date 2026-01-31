<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;

class AdminController extends Controller
{
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