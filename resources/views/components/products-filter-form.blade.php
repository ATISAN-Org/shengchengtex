<form method="GET" action="{{ route('products.list') }}" class="flex flex-wrap gap-2 items-end">
    <select name="category" class="border rounded px-2 py-1 text-sm">
        <option value="">All Categories</option>
        @foreach($categories as $category)
            <option value="{{ $category->id }}" {{ request('category') == $category->id ? 'selected' : '' }}>
                {{ $category->name }}
            </option>
        @endforeach
    </select>

    <input type="text" name="color" placeholder="Color" value="{{ request('color') }}" class="border rounded px-2 py-1 text-sm w-20 sm:w-24">
    <input type="text" name="type" placeholder="Type" value="{{ request('type') }}" class="border rounded px-2 py-1 text-sm w-20 sm:w-24">
    <input type="text" name="fabric_name" placeholder="Fabric" value="{{ request('fabric_name') }}" class="border rounded px-2 py-1 text-sm w-24 sm:w-28">
    <input type="number" name="price_min" placeholder="Min" value="{{ request('price_min') }}" class="border rounded px-2 py-1 text-sm w-16 sm:w-20">
    <input type="number" name="price_max" placeholder="Max" value="{{ request('price_max') }}" class="border rounded px-2 py-1 text-sm w-16 sm:w-20">

    <button type="submit" class="bg-orange-500 text-black px-3 py-1 text-sm rounded shadow hover:bg-orange-600 transition">Filter</button>
</form>
