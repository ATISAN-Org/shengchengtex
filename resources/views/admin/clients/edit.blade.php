@extends('admin.layout')

@section('title', 'Edit Client')
@section('page-title', 'Edit Client')

@section('content')
<form action="{{ route('clients.update', $client) }}" method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded shadow">
    @csrf @method('PUT')
    <div class="mb-4">
        <label class="block font-semibold">Name</label>
        <input type="text" name="name" value="{{ $client->name }}" class="w-full border rounded p-2" required>
    </div>
    <div class="mb-4">
        <label class="block font-semibold">Image</label>
        <input type="file" name="image" class="w-full border rounded p-2">
        @if($client->image)
            <img src="{{ asset('storage/' . $client->image) }}" class="w-16 h-16 mt-2 rounded-full">
        @endif
    </div>
    <div class="mb-4">
        <label class="block font-semibold">Testimonial</label>
        <textarea name="testimonial" class="w-full border rounded p-2">{{ $client->testimonial }}</textarea>
    </div>
    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Update</button>
</form>
@endsection
