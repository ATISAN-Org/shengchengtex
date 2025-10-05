@extends('admin.layout')

@section('title', 'Clients')
@section('page-title', 'Clients')

@section('content')
<div class="flex justify-between mb-4">
    <h2 class="text-2xl font-bold">Clients</h2>
    <a href="{{ route('clients.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded">+ Add Client</a>
</div>

@if(session('success'))
    <div class="bg-green-200 text-green-800 p-3 rounded mb-4">{{ session('success') }}</div>
@endif

<table class="min-w-full bg-white shadow rounded">
    <thead>
        <tr>
            <th class="px-4 py-2 border">Name</th>
            <th class="px-4 py-2 border">Image</th>
            <th class="px-4 py-2 border">Testimonial</th>
            <th class="px-4 py-2 border">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($clients as $client)
        <tr>
            <td class="border px-4 py-2">{{ $client->name }}</td>
            <td class="border px-4 py-2">
                <img src="{{ asset('storage/' . $client->image) }}" class="w-12 h-12 rounded-full">
            </td>
            <td class="border px-4 py-2">{{ $client->testimonial }}</td>
            <td class="border px-4 py-2">
                <a href="{{ route('clients.edit', $client) }}" class="text-blue-600">Edit</a>
                <form action="{{ route('clients.destroy', $client) }}" method="POST" class="inline-block ml-2">
                    @csrf @method('DELETE')
                    <button type="submit" class="text-red-600">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
