@extends('admin.layout')

@section('title', 'Add Client')
@section('page-title', 'Add Client')

@section('content')
<form action="{{ route('clients.store') }}" method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded shadow">
    @csrf
    <div class="mb-4">
        <label class="block font-semibold">Name</label>
        <input type="text" name="name" class="w-full border rounded p-2" required>
    </div>
    <div class="mb-4">
        <label class="block font-semibold">Image</label>
        <input type="file" name="image" class="w-full border rounded p-2">
    </div>
    <div class="mb-4">
        <label class="block font-semibold">Testimonial</label>
        <textarea name="testimonial" class="w-full border rounded p-2"></textarea>
    </div>
    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Save</button>
</form>
@endsection
