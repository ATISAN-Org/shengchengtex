@extends('admin.layout')

@section('content')
<h2 class="text-2xl font-bold mb-5">Edit Product</h2>

@if ($errors->any())
<div class="mb-4 text-red-600">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('products.update', $product) }}" method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded-xl shadow-lg space-y-5 max-w-5xl mx-auto">
    @csrf
    @method('PUT')

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
        <div>
            <label class="block mb-1 font-semibold text-gray-700">Product Name <span class="text-red-500">*</span></label>
            <input type="text" name="name" value="{{ old('name', $product->name) }}" class="w-full border border-gray-300 px-3 py-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-200" required>
        </div>
        <div>
            <label class="block mb-1 font-semibold text-gray-700">Category <span class="text-red-500">*</span></label>
            <select name="category_id" class="w-full border border-gray-300 px-3 py-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-200" required>
                <option value="">Select Category</option>
                @foreach($categories as $cat)
                    <option value="{{ $cat->id }}" {{ $product->category_id == $cat->id ? 'selected' : '' }}>{{ $cat->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label class="block mb-1 font-semibold text-gray-700">Price</label>
            <input type="text" inputmode="decimal" pattern="^\d+(\.\d{1,2})?$" name="price" value="{{ old('price', $product->price) }}" class="w-full border border-gray-300 px-3 py-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-200">
        </div>
        <div>
            <label class="block mb-1 font-semibold text-gray-700">Product Image</label>
            <input type="file" name="image" accept="image/*" class="w-full border border-gray-300 px-3 py-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-200" onchange="previewImage(event)">
            @if($product->image_url)
                <img id="image-preview" src="{{ $product->image_url }}" class="mt-2 w-24 h-24 object-cover rounded shadow border border-gray-200">
            @else
                <img id="image-preview" class="mt-2 w-24 h-24 object-cover rounded shadow border border-gray-200" style="display:none;">
            @endif
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
        <div>
            <label class="block mb-1 font-semibold text-gray-700">Composition</label>
            <input type="text" name="composition" value="{{ old('composition', $product->composition) }}" class="w-full border border-gray-300 px-3 py-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-200">
        </div>
        <div>
            <label class="block mb-1 font-semibold text-gray-700">Color</label>
            <input type="text" name="color" value="{{ old('color', $product->color) }}" class="w-full border border-gray-300 px-3 py-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-200">
        </div>
        <div>
            <label class="block mb-1 font-semibold text-gray-700">Width</label>
            <input type="text" name="width" value="{{ old('width', $product->width) }}" class="w-full border border-gray-300 px-3 py-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-200">
        </div>
        <div>
            <label class="block mb-1 font-semibold text-gray-700">Reference No</label>
            <input type="text" name="reference_no" value="{{ old('reference_no', $product->reference_no) }}" class="w-full border border-gray-300 px-3 py-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-200">
        </div>
        <div>
            <label class="block mb-1 font-semibold text-gray-700">Fabric Name</label>
            <input type="text" name="fabric_name" value="{{ old('fabric_name', $product->fabric_name) }}" class="w-full border border-gray-300 px-3 py-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-200">
        </div>
        <div>
            <label class="block mb-1 font-semibold text-gray-700">Type</label>
            <input type="text" name="type" value="{{ old('type', $product->type) }}" class="w-full border border-gray-300 px-3 py-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-200">
        </div>
        <div>
            <label class="block mb-1 font-semibold text-gray-700">Samples</label>
            <input type="text" name="samples" value="{{ old('samples', $product->samples) }}" class="w-full border border-gray-300 px-3 py-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-200">
        </div>
        <div>
            <label class="block mb-1 font-semibold text-gray-700">Origin</label>
            <input type="text" name="origin" value="{{ old('origin', $product->origin) }}" class="w-full border border-gray-300 px-3 py-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-200">
        </div>
        <div>
            <label class="block mb-1 font-semibold text-gray-700">MOQ</label>
            <input type="text" name="moq" value="{{ old('moq', $product->moq) }}" class="w-full border border-gray-300 px-3 py-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-200">
        </div>
        <div>
            <label class="block mb-1 font-semibold text-gray-700">Export</label>
            <input type="text" name="export" value="{{ old('export', $product->export) }}" class="w-full border border-gray-300 px-3 py-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-200">
        </div>
        <div>
            <label class="block mb-1 font-semibold text-gray-700">Weight</label>
            <input type="text" name="weight" value="{{ old('weight', $product->weight) }}" class="w-full border border-gray-300 px-3 py-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-200">
        </div>
        <div>
            <label class="block mb-1 font-semibold text-gray-700">Package</label>
            <input type="text" name="package" value="{{ old('package', $product->package) }}" class="w-full border border-gray-300 px-3 py-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-200">
        </div>
        <div>
            <label class="block mb-1 font-semibold text-gray-700">Capacity</label>
            <input type="text" name="capacity" value="{{ old('capacity', $product->capacity) }}" class="w-full border border-gray-300 px-3 py-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-200">
        </div>
        <div>
            <label class="block mb-1 font-semibold text-gray-700">Format</label>
            <input type="text" name="format" value="{{ old('format', $product->format) }}" class="w-full border border-gray-300 px-3 py-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-200">
        </div>
        <div class="sm:col-span-2">
            <label class="block mb-1 font-semibold text-gray-700">Payment Terms</label>
            <textarea name="payment_terms" class="w-full border border-gray-300 px-3 py-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-200" rows="3">{{ old('payment_terms', $product->payment_terms) }}</textarea>
        </div>
        <div>
            <label class="block mb-1 font-semibold text-gray-700">Delivery Time</label>
            <input type="text" name="delivery_time" value="{{ old('delivery_time', $product->delivery_time) }}" class="w-full border border-gray-300 px-3 py-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-200">
        </div>
        <div>
            <label class="block mb-1 font-semibold text-gray-700">Port In BD</label>
            <input type="text" name="port_in_bd" value="{{ old('port_in_bd', $product->port_in_bd) }}" class="w-full border border-gray-300 px-3 py-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-200">
        </div>
    </div>

    <div>
        <label class="block mb-1 font-semibold text-gray-700">Basic Info</label>
        <textarea name="basic_info" class="w-full border border-gray-300 px-3 py-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-200" rows="4">{{ old('basic_info', $product->basic_info) }}</textarea>
    </div>

    <button type="submit" class="w-full bg-blue-600 text-white px-6 py-2 rounded-lg shadow hover:bg-blue-700 transition font-semibold text-lg">Update Product</button>
</form>

<script>
    function previewImage(event) {
        const reader = new FileReader();
        reader.onload = function() {
            const output = document.getElementById('image-preview');
            output.src = reader.result;
            output.style.display = 'block';
        };
        if(event.target.files[0]){
            reader.readAsDataURL(event.target.files[0]);
        }
    }
</script>
@endsection
