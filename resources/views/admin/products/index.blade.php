@extends('admin.layout')

@section('title', 'Products')

@section('content')
<div class="flex justify-between items-center mb-5">
    <h2 class="text-2xl font-bold">Products</h2>
    <a href="{{ route('products.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Add Product</a>
</div>

@if(session('success'))
    <p class="text-green-600 mb-3">{{ session('success') }}</p>
@endif

@if($products->isEmpty())
    <p>No products available.</p>
@else
<div class="overflow-x-auto">
    <table class="table-auto w-full border border-gray-300">
        <thead class="bg-gray-200">
            <tr>
                <th class="border px-4 py-2">ID</th>
                <th class="border px-4 py-2">Name</th>
                <th class="border px-4 py-2">Category</th>
                <th class="border px-4 py-2">Price</th>
                <th class="border px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $prod)
            <tr class="hover:bg-gray-100">
                <td class="border px-4 py-2">{{ $prod->id }}</td>
                <td class="border px-4 py-2">{{ $prod->name }}</td>
                <td class="border px-4 py-2">{{ $prod->category->name ?? 'N/A' }}</td>
                <td class="border px-4 py-2">${{ $prod->price }}</td>
                <td class="border px-4 py-2">
                    <a href="{{ route('products.edit', $prod) }}" class="text-blue-600 hover:underline">Edit</a> |
                    <form action="{{ route('products.destroy', $prod) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 hover:underline" onclick="return confirm('Delete this product?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endif
@endsection
