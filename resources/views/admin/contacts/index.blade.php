@extends('admin.layout')

@section('title', 'Contact Queries - Admin')
@section('page-title', 'Contact Queries')

@section('content')
<div class="p-3">
    <div class="bg-white p-6 rounded-xl shadow-lg">
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-6 gap-3">
            <h2 class="text-2xl font-bold text-gray-800">All Contact Queries</h2>
            <div class="text-sm text-gray-500">Total: <span class="font-semibold">{{ $contacts->total() }}</span></div>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full text-left border-collapse">
                <thead>
                    <tr class="bg-gray-100 text-gray-700">
                        <th class="px-4 py-3 font-medium">Name</th>
                        <th class="px-4 py-3 font-medium">Email</th>
                        <th class="px-4 py-3 font-medium">Subject</th>
                        <th class="px-4 py-3 font-medium">Message</th>
                        <th class="px-4 py-3 font-medium">Date</th>
                        <th class="px-4 py-3 font-medium text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($contacts as $contact)
                        <tr class="border-t hover:bg-gray-50">
                            <td class="px-4 py-3">{{ $contact->name }}</td>
                            <td class="px-4 py-3">{{ $contact->email }}</td>
                            <td class="px-4 py-3">{{ $contact->subject ?? '-' }}</td>
                            <td class="px-4 py-3" title="{{ $contact->message }}">{{ \Illuminate\Support\Str::limit($contact->message, 50) }}</td>
                            <td class="px-4 py-3">{{ $contact->created_at->format('d M Y') }}</td>
                            <td class="px-4 py-3 text-center">
                                <a href="{{ route('contacts.show', $contact->id) }}"
                                   class="inline-block bg-orange-500 hover:bg-orange-600 text-white px-4 py-1 rounded transition text-sm shadow">
                                   View Details
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="px-4 py-5 text-center text-gray-500">No contact queries found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="mt-6">
            {{ $contacts->links() }}
        </div>
    </div>
</div>
@endsection