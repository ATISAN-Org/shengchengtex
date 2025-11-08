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
        <label class="block font-semibold">Type</label>
        <select name="type" class="w-full border rounded p-2">
            <option value="international" {{ $client->type == 'international' ? 'selected' : '' }}>International</option>
            <option value="bangladeshi" {{ $client->type == 'bangladeshi' ? 'selected' : '' }}>Bangladeshi</option>
        </select>
    </div>

    <div class="mb-4" id="local-type-wrapper-edit" style="display: none;">
        <label class="block font-semibold mb-1">Bangladeshi Role</label>
        <select name="bangladeshi_role" id="bangladeshi_role_edit" class="w-full border rounded p-2">
            <option value="">Select Role</option>
            <option value="buying_house" {{ $client->bangladeshi_role == 'buying_house' ? 'selected' : '' }}>Buying House</option>
            <option value="factory" {{ $client->bangladeshi_role == 'factory' ? 'selected' : '' }}>Factory</option>
        </select>
        @error('bangladeshi_role')
            <span class="text-red-600 text-sm">{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-4">
        <label class="block font-semibold">Image</label>
        <input type="file" name="image" class="w-full border rounded p-2">
        @if($client->image)
            <img src="{{ $client->image_url }}" class="w-16 h-16 mt-2 rounded-full">
        @endif
    </div>
    <div class="mb-4">
        <label class="block font-semibold">Testimonial</label>
        <textarea name="testimonial" class="w-full border rounded p-2">{{ $client->testimonial }}</textarea>
    </div>
    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Update</button>
</form>
<script>
    (function(){
        const typeSelect = document.querySelector('select[name="type"]');
        const wrapper = document.getElementById('local-type-wrapper-edit');

        function toggleLocalType() {
            if (!typeSelect) return;
            if (typeSelect.value === 'bangladeshi') {
                wrapper.style.display = 'block';
            } else {
                wrapper.style.display = 'none';
                const sel = document.getElementById('local_type_edit');
                if (sel) sel.value = '';
            }
        }

        if (typeSelect) {
            typeSelect.addEventListener('change', toggleLocalType);
            // initial state
            toggleLocalType();
        }
    })();
</script>
@endsection
