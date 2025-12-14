@extends('admin.layout')

@section('title', 'Featured Products')
@section('page-title', 'Featured Products')

@section('content')
<div class="p-3">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-semibold text-gray-800">Featured Products</h2>
        <a href="{{ route('featured_products.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-lg shadow transition">
            + Add Featured Product
        </a>
    </div>

    @if(session('success'))
        <div class="bg-green-100 text-green-700 px-4 py-2 rounded mb-4 shadow text-sm">
            {{ session('success') }}
        </div>
    @endif

    @if($products->isEmpty())
        <div class="text-gray-500 text-center py-6">No featured products available.</div>
    @else
    <div class="bg-white rounded-lg shadow overflow-x-auto">
        <table class="min-w-full text-left border-collapse">
            <thead>
                <tr class="bg-gray-100 text-gray-700">
                    <th class="px-5 py-3 font-medium">ID</th>
                    <th class="px-5 py-3 font-medium">Name</th>
                    <th class="px-5 py-3 font-medium">Category</th>
                    <th class="px-5 py-3 font-medium">Price</th>
                    <th class="px-5 py-3 font-medium text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $prod)
                <tr class="border-t hover:bg-gray-50">
                    <td class="px-5 py-3">{{ $prod->id }}</td>
                    <td class="px-5 py-3">{{ $prod->name }}</td>
                    <td class="px-5 py-3">{{ $prod->category->name ?? 'N/A' }}</td>
                    <td class="px-5 py-3">{{ $prod->price !== null ? '$' . number_format($prod->price, 2) : '' }}</td>
                    <td class="px-5 py-3 text-center space-x-2">
                        <a href="{{ route('featured_products.edit', $prod) }}" class="bg-yellow-500 text-white px-4 py-1 rounded hover:bg-yellow-600 text-sm">Edit</a>
                        <form action="{{ route('featured_products.destroy', $prod) }}" method="POST" class="inline-block" onsubmit="return confirm('Delete this featured product?')">
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
