@extends('admin.layout')

@section('title', 'Add Client')
@section('page-title', 'Add Client')

@section('content')
<div class="max-w-xl mx-auto bg-white p-6 rounded shadow">
    <form action="{{ route('clients.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <label class="block font-semibold mb-1">Name</label>
            <input type="text" name="name" value="{{ old('name') }}" class="w-full border rounded p-2" required>
            @error('name')
                <span class="text-red-600 text-sm">{{ $message }}</span>
            @enderror
        </div>  

        <div class="mb-4">
            <label class="block font-semibold mb-1">Image</label>
            <input type="file" name="image" class="w-full border rounded p-2">
            @error('image')
                <span class="text-red-600 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-1">Type</label>
            <select name="type" class="w-full border rounded p-2">
                <option value="international" {{ old('type') == 'international' ? 'selected' : '' }}>International</option>
                <option value="bangladeshi" {{ old('type') == 'bangladeshi' ? 'selected' : '' }}>Bangladeshi</option>
            </select>
            @error('type')
                <span class="text-red-600 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4" id="local-type-wrapper" style="display: none;">
            <label class="block font-semibold mb-1">Bangladeshi Role</label>
            <select name="bangladeshi_role" id="bangladeshi_role" class="w-full border rounded p-2">
                <option value="">Select Role</option>
                <option value="buying_house" {{ old('bangladeshi_role') == 'buying_house' ? 'selected' : '' }}>Buying House</option>
                <option value="factory" {{ old('bangladeshi_role') == 'factory' ? 'selected' : '' }}>Factory</option>
            </select>
            @error('bangladeshi_role')
                <span class="text-red-600 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-1">Testimonial</label>
            <textarea name="testimonial" class="w-full border rounded p-2">{{ old('testimonial') }}</textarea>
            @error('testimonial')
                <span class="text-red-600 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">
            Save
        </button>
    </form>
</div>
    <script>
        (function(){
            const typeSelect = document.querySelector('select[name="type"]');
            const wrapper = document.getElementById('local-type-wrapper');

            function toggleLocalType() {
                if (!typeSelect) return;
                if (typeSelect.value === 'bangladeshi') {
                    wrapper.style.display = 'block';
                } else {
                    wrapper.style.display = 'none';
                    const sel = document.getElementById('local_type');
                    if (sel) sel.value = '';
                }
            }

            if (typeSelect) {
                typeSelect.addEventListener('change', toggleLocalType);
                // initial state based on old value
                toggleLocalType();
            }
        })();
    </script>

@endsection
