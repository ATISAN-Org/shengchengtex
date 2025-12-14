@extends('admin.layout')

@section('content')
<div class="max-w-5xl mx-auto p-3">
    <h2 class="text-2xl font-bold text-gray-800 mb-6">Add New Featured Product</h2>

    @if ($errors->any())
    <div class="mb-5 rounded-lg border-l-4 border-red-400 bg-red-50 px-4 py-3 text-red-700 shadow">
        <ul class="list-disc list-inside">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('featured_products.store') }}" method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded-xl shadow-lg space-y-5">
        @csrf

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
            <div>
                <label class="block mb-1 font-semibold text-gray-700">Product Name <span class="text-red-500">*</span></label>
                <input type="text" name="name" class="w-full border border-gray-300 px-3 py-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-200" required>
            </div>

            <div>
                <label class="block mb-1 font-semibold text-gray-700">Category <span class="text-red-500">*</span></label>
                <select name="category_id" class="w-full border border-gray-300 px-3 py-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-200" required>
                    <option value="">Select Category</option>
                    @foreach($categories as $cat)
                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label class="block mb-1 font-semibold text-gray-700">Price</label>
                <input type="text" inputmode="decimal" pattern="^\d+(\.\d{1,2})?$" name="price" class="w-full border border-gray-300 px-3 py-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-200">
            </div>

            <div>
                <label class="block mb-1 font-semibold text-gray-700">Product Image</label>
                <input type="file" name="image" accept="image/*" class="w-full border border-gray-300 px-3 py-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-200" onchange="previewImage(event)">
                <img id="image-preview" class="mt-2 w-24 h-24 object-cover rounded shadow border border-gray-200" style="display:none;">
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
            <div>
                <label class="block mb-1 font-semibold text-gray-700">Composition</label>
                <input type="text" name="composition" class="w-full border border-gray-300 px-3 py-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-200">
            </div>
            <div>
                <label class="block mb-1 font-semibold text-gray-700">Color</label>
                <input type="text" name="color" class="w-full border border-gray-300 px-3 py-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-200">
            </div>
            <div>
                <label class="block mb-1 font-semibold text-gray-700">Width</label>
                <input type="text" name="width" class="w-full border border-gray-300 px-3 py-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-200">
            </div>
            <div>
                <label class="block mb-1 font-semibold text-gray-700">Reference No</label>
                <input type="text" name="reference_no" class="w-full border border-gray-300 px-3 py-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-200">
            </div>
            <div>
                <label class="block mb-1 font-semibold text-gray-700">Fabric Name</label>
                <input type="text" name="fabric_name" class="w-full border border-gray-300 px-3 py-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-200">
            </div>
            <div>
                <label class="block mb-1 font-semibold text-gray-700">Type</label>
                <input type="text" name="type" class="w-full border border-gray-300 px-3 py-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-200">
            </div>
            <div>
                <label class="block mb-1 font-semibold text-gray-700">Samples</label>
                <input type="text" name="samples" class="w-full border border-gray-300 px-3 py-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-200">
            </div>
            <div>
                <label class="block mb-1 font-semibold text-gray-700">Origin</label>
                <input type="text" name="origin" class="w-full border border-gray-300 px-3 py-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-200">
            </div>
            <div>
                <label class="block mb-1 font-semibold text-gray-700">MOQ</label>
                <input type="text" name="moq" class="w-full border border-gray-300 px-3 py-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-200">
            </div>
            <div>
                <label class="block mb-1 font-semibold text-gray-700">Export</label>
                <input type="text" name="export" class="w-full border border-gray-300 px-3 py-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-200">
            </div>
            <div>
                <label class="block mb-1 font-semibold text-gray-700">Weight</label>
                <input type="text" name="weight" class="w-full border border-gray-300 px-3 py-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-200">
            </div>
            <div>
                <label class="block mb-1 font-semibold text-gray-700">Package</label>
                <input type="text" name="package" class="w-full border border-gray-300 px-3 py-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-200">
            </div>
            <div>
                <label class="block mb-1 font-semibold text-gray-700">Capacity</label>
                <input type="text" name="capacity" class="w-full border border-gray-300 px-3 py-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-200">
            </div>
            <div>
                <label class="block mb-1 font-semibold text-gray-700">Format</label>
                <input type="text" name="format" class="w-full border border-gray-300 px-3 py-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-200">
            </div>
            <div class="sm:col-span-2">
                <label class="block mb-1 font-semibold text-gray-700">Payment Terms</label>
                <textarea name="payment_terms" class="w-full border border-gray-300 px-3 py-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-200" rows="3"></textarea>
            </div>
            <div>
                <label class="block mb-1 font-semibold text-gray-700">Delivery Time</label>
                <input type="text" name="delivery_time" class="w-full border border-gray-300 px-3 py-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-200">
            </div>
            <div>
                <label class="block mb-1 font-semibold text-gray-700">Port In BD</label>
                <input type="text" name="port_in_bd" class="w-full border border-gray-300 px-3 py-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-200">
            </div>
        </div>

        <div>
            <label class="block mb-1 font-semibold text-gray-700">Basic Info</label>
            <textarea name="basic_info" class="w-full border border-gray-300 px-3 py-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-200" rows="4"></textarea>
        </div>

        <button type="submit" class="w-full bg-blue-600 text-white px-6 py-2 rounded-lg shadow hover:bg-blue-700 transition font-semibold text-lg">Save Featured Product</button>
    </form>
</div>

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
