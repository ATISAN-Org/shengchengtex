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

<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" class="max-w-3xl bg-white p-5 rounded shadow mx-auto">
    @csrf

    <div class="mb-4">
        <label class="block mb-1 font-semibold">Product Name</label>
        <input type="text" name="name" class="w-full border px-3 py-2 rounded" required>
    </div>

    <div class="mb-4">
        <label class="block mb-1 font-semibold">Category</label>
        <select name="category_id" class="w-full border px-3 py-2 rounded" required>
            <option value="">Select Category</option>
            @foreach($categories as $cat)
                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-4">
        <label class="block mb-1 font-semibold">Price</label>
        <input type="number" step="0.01" name="price" class="w-full border px-3 py-2 rounded" required>
    </div>

    <div class="mb-4">
        <label class="block mb-1 font-semibold">Product Image</label>
        <input type="file" name="image" class="w-full border px-3 py-2 rounded" onchange="previewImage(event)">
        <img id="image-preview" class="mt-2 w-32 h-32 object-cover rounded shadow" style="display:none;">
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <div>
            <label class="block mb-1 font-semibold">Composition</label>
            <input type="text" name="composition" class="w-full border px-3 py-2 rounded">
        </div>
        <div>
            <label class="block mb-1 font-semibold">Color</label>
            <input type="text" name="color" class="w-full border px-3 py-2 rounded">
        </div>
        <div>
            <label class="block mb-1 font-semibold">Width</label>
            <input type="text" name="width" class="w-full border px-3 py-2 rounded">
        </div>
        <div>
            <label class="block mb-1 font-semibold">Reference No</label>
            <input type="text" name="reference_no" class="w-full border px-3 py-2 rounded">
        </div>
        <div>
            <label class="block mb-1 font-semibold">Fabric Name</label>
            <input type="text" name="fabric_name" class="w-full border px-3 py-2 rounded">
        </div>
        <div>
            <label class="block mb-1 font-semibold">Type</label>
            <input type="text" name="type" class="w-full border px-3 py-2 rounded">
        </div>
        <div>
            <label class="block mb-1 font-semibold">Samples</label>
            <input type="text" name="samples" class="w-full border px-3 py-2 rounded">
        </div>
        <div>
            <label class="block mb-1 font-semibold">Origin</label>
            <input type="text" name="origin" class="w-full border px-3 py-2 rounded">
        </div>
        <div>
            <label class="block mb-1 font-semibold">MOQ</label>
            <input type="text" name="moq" class="w-full border px-3 py-2 rounded">
        </div>
        <div>
            <label class="block mb-1 font-semibold">Export</label>
            <input type="text" name="export" class="w-full border px-3 py-2 rounded">
        </div>
        <div>
            <label class="block mb-1 font-semibold">Weight</label>
            <input type="text" name="weight" class="w-full border px-3 py-2 rounded">
        </div>
        <div>
            <label class="block mb-1 font-semibold">Package</label>
            <input type="text" name="package" class="w-full border px-3 py-2 rounded">
        </div>
        <div>
            <label class="block mb-1 font-semibold">Capacity</label>
            <input type="text" name="capacity" class="w-full border px-3 py-2 rounded">
        </div>
        <div>
            <label class="block mb-1 font-semibold">Format</label>
            <input type="text" name="format" class="w-full border px-3 py-2 rounded">
        </div>
        <div class="col-span-2">
            <label class="block mb-1 font-semibold">Payment Terms</label>
            <textarea name="payment_terms" class="w-full border px-3 py-2 rounded" rows="3"></textarea>
        </div>
        <div>
            <label class="block mb-1 font-semibold">Delivery Time</label>
            <input type="text" name="delivery_time" class="w-full border px-3 py-2 rounded">
        </div>
        <div>
            <label class="block mb-1 font-semibold">Port In BD</label>
            <input type="text" name="port_in_bd" class="w-full border px-3 py-2 rounded">
        </div>
    </div>

    <div class="mt-4">
        <label class="block mb-1 font-semibold">Basic Info</label>
        <textarea name="basic_info" class="w-full border px-3 py-2 rounded" rows="4"></textarea>
    </div>

    <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded mt-4 hover:bg-blue-700">Save Product</button>
</form>

<script>
    function previewImage(event) {
        const reader = new FileReader();
        reader.onload = function() {
            const output = document.getElementById('image-preview');
            output.src = reader.result;
            output.style.display = 'block';
        };
        reader.readAsDataURL(event.target.files[0]);
    }
</script>
@endsection
