@extends('admin.layout')

@section('title', 'Products')

@section('content')
<div class="flex justify-between items-center mb-5">
    <h2 class="text-2xl font-bold">Products</h2>
    <a href="{{ route('products.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Add Product</a>
</div>

@if(session('success'))
    <div class="text-green-600 mb-3">{{ session('success') }}</div>
@endif

@if($products->isEmpty())
    <div class="text-gray-600">No products available.</div>
@else
<div class="overflow-x-auto">
    <table class="min-w-full border border-gray-300 bg-white">
        <thead class="bg-gray-100">
            <tr>
                <th class="border px-3 py-2 text-left">ID</th>
                <th class="border px-3 py-2 text-left">Name</th>
                <th class="border px-3 py-2 text-left">Category</th>
                <th class="border px-3 py-2 text-left">Price</th>
                <th class="border px-3 py-2 text-left">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $prod)
            <tr class="hover:bg-gray-50">
                <td class="border px-3 py-2">{{ $prod->id }}</td>
                <td class="border px-3 py-2">{{ $prod->name }}</td>
                <td class="border px-3 py-2">{{ $prod->category->name ?? 'N/A' }}</td>
                <td class="border px-3 py-2">${{ $prod->price }}</td>
                <td class="border px-3 py-2">
                    <a href="{{ route('products.edit', $prod) }}" class="text-blue-600 hover:underline">Edit</a>
                    <form action="{{ route('products.destroy', $prod) }}" method="POST" class="inline" onsubmit="return confirm('Delete this product?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 hover:underline ml-2">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endif
@endsection