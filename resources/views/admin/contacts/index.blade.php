@extends('admin.layout')

@section('title', 'Contact Queries - Admin')
@section('page-title', 'Contact Queries')

@section('content')
<div class="bg-white p-6 rounded-lg shadow-md">
    <h2 class="text-xl font-semibold mb-4">All Contact Queries</h2>

    <table class="w-full text-left border border-gray-200">
        <thead>
            <tr class="bg-gray-100">
                <th class="p-2 border-b">Name</th>
                <th class="p-2 border-b">Email</th>
                <th class="p-2 border-b">Subject</th>
                <th class="p-2 border-b">Message</th>
                <th class="p-2 border-b">Date</th>
                <th class="p-2 border-b">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contacts as $contact)
                <tr>
                    <td class="p-2 border-b">{{ $contact->name }}</td>
                    <td class="p-2 border-b">{{ $contact->email }}</td>
                    <td class="p-2 border-b">{{ $contact->subject ?? '-' }}</td>
                    <td class="p-2 border-b">{{ Str::limit($contact->message, 50) }}</td>
                    <td class="p-2 border-b">{{ $contact->created_at->format('d M Y') }}</td>
                    <td class="p-2 border-b">
                        <a href="{{ route('contacts.show', $contact->id) }}"
                           class="bg-orange-500 text-black px-3 py-1 rounded hover:bg-orange-600 transition">
                           View Details
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-4">
        {{ $contacts->links() }}
    </div>
</div>
@endsection
