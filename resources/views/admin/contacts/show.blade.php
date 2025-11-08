@extends('admin.layout')

@section('title', 'Contact Query Details - Admin')
@section('page-title', 'Contact Query Details')

@section('content')
<div class="bg-white p-6 rounded-xl shadow-md max-w-4xl mx-auto space-y-6">
    <h2 class="text-2xl font-bold text-orange-500 mb-4">Contact Query Details</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-gray-800">
    <p><span class="font-semibold">Full Name:</span> {{ $contact->name }}</p>
    <p><span class="font-semibold">Email:</span> {{ $contact->email }}</p>
    <p><span class="font-semibold">Phone:</span> {{ $contact->phone ?? '-' }}</p>
    <p><span class="font-semibold">Subject:</span> {{ $contact->subject ?? '-' }}</p>
    <p><span class="font-semibold">Submitted At:</span> {{ $contact->created_at->format('d M Y, h:i A') }}</p>
    </div>

    <div class="mt-4">
        <h3 class="text-xl font-semibold text-orange-500 mb-2">Message</h3>
        <p class="text-gray-700 whitespace-pre-line">{{ $contact->message }}</p>
    </div>

    <div class="mt-6 flex justify-end">
        <a href="{{ route('contacts.index') }}"
           class="bg-orange-500 text-white px-4 py-2 rounded hover:bg-orange-600 transition">
           Back to Contact Queries
        </a>
    </div>
</div>
@endsection
