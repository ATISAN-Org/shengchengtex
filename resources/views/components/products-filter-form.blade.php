<form method="GET" action="{{ route('products.list') }}" class="flex flex-wrap gap-2 items-end">

    <!-- Dropdown for medium and up -->
    <select name="category" class="border rounded px-2 py-1 text-sm hidden sm:block">
        <option value="">All Categories</option>
        @foreach($categories as $category)
            <option value="{{ $category->id }}" {{ request('category') == $category->id ? 'selected' : '' }}>
                {{ $category->name }}
            </option>
        @endforeach
    </select>

    <!-- Grid radio for mobile/small devices -->
    <div class="w-full grid grid-cols-2 gap-2 sm:hidden">
        <label class="flex items-center rounded px-2 py-1 text-xs sm:text-sm w-full cursor-pointer {{ request('category') == '' ? 'bg-orange-500 text-black' : '' }}">
                <input type="radio" name="category" value="" onchange="this.form.submit()" class="mr-2 {{ request('category') == '' ? 'accent-white' : 'accent-orange-500' }}" {{ request('category') == '' ? 'checked' : '' }}>
            All Category
        </label>
        @foreach($categories as $category)
            <label class="flex items-center rounded px-2 py-1 text-xs sm:text-sm w-full cursor-pointer {{ request('category') == $category->id ? 'bg-orange-500 text-black' : '' }}">
                    <input type="radio" name="category" value="{{ $category->id }}" onchange="this.form.submit()" class="mr-2 {{ request('category') == $category->id ? 'accent-white' : 'accent-orange-500' }}" {{ request('category') == $category->id ? 'checked' : '' }}>
                {{ $category->name }}
            </label>
        @endforeach
    </div>

    <input type="text" name="color" placeholder="Color" value="{{ request('color') }}" class="border rounded px-2 py-1 text-sm w-20 sm:w-24">
    <!-- Hide type input, type is now selected via buttons -->
    <input type="hidden" name="type" value="{{ request('type') }}">
    <input type="text" name="fabric_name" placeholder="Fabric" value="{{ request('fabric_name') }}" class="border rounded px-2 py-1 text-sm w-24 sm:w-28">

    <button type="submit" class="bg-orange-500 text-black px-3 py-1 text-sm rounded shadow hover:bg-orange-600 transition">Filter</button>
</form>
