@extends('admin.layout')

@section('title', 'Categories')
@section('page-title', 'Categories')

@section('content')
<div class="flex justify-between items-center mb-5">
    <h2 class="text-2xl font-bold">Categories</h2>
    <a href="{{ route('categories.create') }}" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Add Category</a>
</div>

@if(session('success'))
    <p class="text-green-600 mb-3">{{ session('success') }}</p>
@endif

@if($categories->isEmpty())
    <p>No categories available.</p>
@else
<div class="overflow-x-auto">
    <table class="table-auto w-full border border-gray-300">
        <thead class="bg-gray-200">
            <tr>
                <th class="border px-4 py-2">ID</th>
                <th class="border px-4 py-2">Name</th>
                <th class="border px-4 py-2">Image</th>
                <th class="border px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $cat)
            <tr class="hover:bg-gray-100">
                <td class="border px-4 py-2">{{ $cat->id }}</td>
                <td class="border px-4 py-2">{{ $cat->name }}</td>
                <td class="border px-4 py-2">
                    @if($cat->image)
                        <img src="{{ asset('storage/' . $cat->image) }}" alt="{{ $cat->name }}" class="w-16 h-16 object-cover rounded">
                    @else
                        N/A
                    @endif
                </td>
                <td class="border px-4 py-2 space-x-2">
                    <a href="{{ route('categories.edit', $cat) }}" class="text-blue-600 hover:underline">Edit</a>
                    <form action="{{ route('categories.destroy', $cat) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 hover:underline" onclick="return confirm('Delete this category?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endif
@endsection
