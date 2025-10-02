@extends('admin.layout')

@section('title', 'Add Category')
@section('page-title', 'Add Category')

@section('content')
<h2 class="text-2xl font-bold mb-5">Add New Category</h2>

@if ($errors->any())
<div class="mb-4 text-red-600">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data" class="max-w-lg bg-white p-5 rounded shadow">
    @csrf
    <div class="mb-3">
        <label class="block mb-1 font-semibold">Category Name</label>
        <input type="text" name="name" class="w-full border px-3 py-2 rounded" required>
    </div>

    <div class="mb-3">
        <label class="block mb-1 font-semibold">Image</label>
        <input type="file" name="image" class="w-full border px-3 py-2 rounded">
    </div>

    <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Save Category</button>
</form>
@endsection
