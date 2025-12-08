<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $request->validate([
            'name' => 'required|min:2',
            'email' => 'required|email',
            'message' => 'required|min:5'
        ], [
            'name.required' => 'Name is required.',
            'name.min' => 'Name must be at least 2 characters.',
            'email.required' => 'Email is required.',
            'email.email' => 'Enter a valid email address.',
            'message.required' => 'Message cannot be empty.',
            'message.min' => 'Message must be at least 5 characters.'
        ]);

        // Add email logic here if needed

        return back()->with('status', '✅ Message sent successfully!');
    }
}
