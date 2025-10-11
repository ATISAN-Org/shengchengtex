@extends('admin.layout')

@section('title', 'Categories')
@section('page-title', 'Categories')

@section('content')
<div class="p-3">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-semibold text-gray-800">Categories</h2>
        <a href="{{ route('categories.create') }}" class="bg-green-600 hover:bg-green-700 text-white px-5 py-2 rounded-lg shadow transition">
            + Add Category
        </a>
    </div>

    @if(session('success'))
        <div class="bg-green-100 text-green-700 px-4 py-2 rounded mb-4 shadow text-sm">
            {{ session('success') }}
        </div>
    @endif

    @if($categories->isEmpty())
        <div class="text-gray-500 text-center py-6">No categories available.</div>
    @else
    <div class="bg-white rounded-lg shadow overflow-x-auto">
        <table class="min-w-full text-left border-collapse">
            <thead>
                <tr class="bg-gray-100 text-gray-700">
                    <th class="px-5 py-3 font-medium">ID</th>
                    <th class="px-5 py-3 font-medium">Name</th>
                    <th class="px-5 py-3 font-medium">Image</th>
                    <th class="px-5 py-3 font-medium text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $cat)
                <tr class="border-t hover:bg-gray-50">
                    <td class="px-5 py-3">{{ $cat->id }}</td>
                    <td class="px-5 py-3">{{ $cat->name }}</td>
                    <td class="px-5 py-3">
                        @if($cat->image)
                            <img src="{{ asset('storage/' . $cat->image) }}" alt="{{ $cat->name }}" class="w-14 h-14 object-cover rounded shadow-sm border border-gray-200">
                        @else
                            <span class="text-gray-400">N/A</span>
                        @endif
                    </td>
                    <td class="px-5 py-3 text-center space-x-2">
                        <a href="{{ route('categories.edit', $cat) }}" class="bg-yellow-500 text-white px-4 py-1 rounded hover:bg-yellow-600 text-sm">Edit</a>
                        <form action="{{ route('categories.destroy', $cat) }}" method="POST" class="inline-block" onsubmit="return confirm('Delete this category?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-600 text-white px-4 py-1 rounded hover:bg-red-700 text-sm">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endif
</div>
@endsection