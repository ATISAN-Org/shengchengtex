<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;


class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::latest()->paginate(20);
        return view('admin.contacts.index', compact('contacts'));
    }

    public function show(Contact $contact)
    {
        return view('admin.contacts.show', compact('contact'));
    }

    public function submit(Request $request)
    {
        // Validate incoming request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string',
            'phone' => 'nullable|string|max:50',
            'whatsapp' => 'nullable|string|max:50',
            'wechat' => 'nullable|string|max:50',
        ]);

        // Save all fields in the database
        $contact = Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
            'phone' => $request->phone,
    
        ]);

        // Fixed recipients
        $recipients = [
            'sagor@yrc-tex.cn',
            'info@shengchengtex.com',
            'mhmahin.hb@gmail.com',
        ];

        // Prepare email content
        $emailBody = "
            <h2>New Contact Form Submission</h2>
            <p><strong>Name:</strong> {$request->name}</p>
            <p><strong>Email:</strong> {$request->email}</p>
            <p><strong>Phone:</strong> {$request->phone}</p>
            <p><strong>WhatsApp:</strong> {$request->whatsapp}</p>
            <p><strong>WeChat:</strong> {$request->wechat}</p>
            <p><strong>Subject:</strong> {$request->subject}</p>
            <p><strong>Message:</strong><br>{$request->message}</p>
        ";

        // Send to each recipient
        foreach ($recipients as $to) {
            Mail::html($emailBody, function ($message) use ($request, $to) {
                $message->to($to)
                    ->from(config('mail.from.address'), config('mail.from.name')) // your Gmail SMTP
                    ->replyTo($request->email, $request->name) // user's email for reply
                    ->subject($request->subject ?? 'New Contact Message');
            });
        }

        // Return back with success message
        return back()->with('success', 'Your message has been sent successfully!');
    }
}
