@extends('admin.layout')

@section('title', 'Clients')
@section('page-title', 'Clients')

@section('content')
<div class="p-3">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-semibold text-gray-800">Clients</h2>
        <a href="{{ route('clients.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-lg shadow transition">+ Add Client</a>
    </div>

    @if(session('success'))
        <div class="bg-green-100 text-green-700 px-4 py-2 rounded mb-4 shadow text-sm">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-white shadow rounded-lg overflow-x-auto">
        <table class="min-w-full text-left border-collapse">
            <thead>
                <tr class="bg-gray-100 text-gray-700">
                    <th class="px-5 py-3 font-medium">Name</th>
                    <th class="px-5 py-3 font-medium">Image</th>
                    <th class="px-5 py-3 font-medium">Testimonial</th>
                    <th class="px-5 py-3 font-medium text-center">Actions</th>
                </tr>
            </thead>
            <tbody class="align-middle">
                @forelse($clients as $client)
                <tr class="border-t hover:bg-gray-50">
                    <td class="px-5 py-3">{{ $client->name }}</td>
                    <td class="px-5 py-3">
                        <img src="{{ $client->image_url ?? 'https://via.placeholder.com/48x48?text=No+Img' }}" class="w-12 h-12 rounded-full object-cover border border-gray-200 shadow-sm" alt="{{ $client->name }}">
                    </td>
                    <td class="px-5 py-3 max-w-xs truncate" title="{{ $client->testimonial }}">{{ $client->testimonial }}</td>
                    <td class="px-5 py-3 text-center space-x-2">
                        <a href="{{ route('clients.edit', $client) }}" class="bg-yellow-500 text-white px-4 py-1 rounded hover:bg-yellow-600 text-sm">Edit</a>
                        <form action="{{ route('clients.destroy', $client) }}" method="POST" class="inline-block" onsubmit="return confirm('Delete this client?')">
                            @csrf @method('DELETE')
                            <button type="submit" class="bg-red-600 text-white px-4 py-1 rounded hover:bg-red-700 text-sm">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="px-5 py-4 text-center text-gray-500">No clients found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection