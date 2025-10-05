@extends('admin.layout')

@section('content')
<h2 class="text-2xl font-bold mb-5">Add New Product</h2>

@if ($errors->any())
<div class="mb-4 text-red-600">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('products.store') }}" method="POST" class="max-w-lg bg-white p-5 rounded shadow">
    @csrf

    <div class="mb-3">
        <label class="block mb-1 font-semibold">Product Name</label>
        <input type="text" name="name" class="w-full border px-3 py-2 rounded" required>
    </div>

    <div class="mb-3">
        <label class="block mb-1 font-semibold">Category</label>
        <select name="category_id" class="w-full border px-3 py-2 rounded" required>
            <option value="">Select Category</option>
            @foreach($categories as $cat)
                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label class="block mb-1 font-semibold">Price</label>
        <input type="number" step="0.01" name="price" class="w-full border px-3 py-2 rounded" required>
    </div>

    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Save Product</button>
</form>
@endsection
