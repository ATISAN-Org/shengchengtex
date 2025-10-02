@extends('admin.layout')

@section('title', 'Edit Category')
@section('page-title', 'Edit Category')

@section('content')
<h2 class="text-2xl font-bold mb-5">Edit Category</h2>

@if ($errors->any())
<div class="mb-4 text-red-600">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('categories.update', $category) }}" method="POST" enctype="multipart/form-data" class="max-w-lg bg-white p-5 rounded shadow">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="block mb-1 font-semibold">Category Name</label>
        <input type="text" name="name" value="{{ $category->name }}" class="w-full border px-3 py-2 rounded" required>
    </div>

    <div class="mb-3">
        <label class="block mb-1 font-semibold">Image</label>
        <input type="file" name="image" class="w-full border px-3 py-2 rounded">
        @if($category->image)
            <img src="{{ asset('storage/' . $category->image) }}" alt="{{ $category->name }}" class="w-24 h-24 mt-2 rounded">
        @endif
    </div>

    <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Update Category</button>
</form>
@endsection
