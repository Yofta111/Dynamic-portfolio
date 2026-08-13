<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactMessage;
use App\Mail\AdminContactNotification;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Honeypot check first (fail fast)
        if ($request->filled('website')) {
            Log::warning('Honeypot triggered', ['ip' => $request->ip()]);
            return back()->with('error', 'Invalid request.');
        }

        // 1. Validate the input
        $validated = $request->validate([
            'name' => 'required|string|min:2|max:255',
            'email' => 'required|email:rfc,dns|max:255',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string|min:10|max:5000',
            // Honeypot for basic spam bot detection (add hidden 'website' field to form)
            'website' => 'nullable|string|in:',
        ]);

// Post-validation sanitization for XSS protection (Blade {{ }} handles output escaping too)
        $validated['name'] = strip_tags($validated['name']);
        $validated['subject'] = strip_tags($validated['subject'] ?? '');
        $validated['message'] = strip_tags($validated['message']);

        // 2. Save to Database
        $message = ContactMessage::create($validated);

        // 3. Send Email to Admin
        // Change 'admin@uthraplc.com' to your actual admin email
//        Mail::to('yoftaraya@gmail.com')->send(new AdminContactNotification($message));

        // 4. Redirect back with success message
        return back()->with('success', 'Your message has been sent successfully!');

    }

    public function index(): View
    {
        // Fetch messages, newest first
        $messages = ContactMessage::orderBy('created_at', 'desc')->get();
        return view('Admin.messages.index', compact('messages'));
    }

    public function show($id): View
    {
        $message = ContactMessage::findOrFail($id);

        // Mark as read when opened
        $message->update(['is_read' => true]);

        return view('Admin.messages.show', compact('message'));
    }
}
