@php
    // Regex-based categorization
    $knitCats = $categories->filter(function($cat) {
        return $cat->products->contains(function($product) {
            return preg_match('/KNIT/i', $product->type);
        });
    });

    $wovenCats = $categories->filter(function($cat) {
        return $cat->products->contains(function($product) {
            return preg_match('/WOVEN/i', $product->type);
        });
    });

    $otherCats = $categories->filter(function($cat) use ($knitCats, $wovenCats) {
        return !$knitCats->contains($cat) && !$wovenCats->contains($cat);
    });
@endphp

<form method="GET" action="{{ route('products.list') }}" class="flex flex-wrap gap-2 items-end">

    <!-- DESKTOP DROPDOWN -->
    <select name="category" class="border rounded px-2 py-1 text-sm hidden sm:block">
        <option value="">All Categories</option>
        @foreach($categories as $category)
            <option value="{{ $category->id }}" {{ request('category') == $category->id ? 'selected' : '' }}>
                {{ $category->name }}
            </option>
        @endforeach
    </select>

    <!-- MOBILE CATEGORY GRID (radio buttons) -->
    <div class="lg:hidden w-full mb-4">
        <div class="bg-white p-3 rounded shadow">

            <!-- ALL CATEGORIES OPTION ON TOP -->
            <div class="mb-4">
                <label class="flex items-center justify-center rounded px-2 py-1 text-xs w-full cursor-pointer {{ request('category') == '' ? 'bg-orange-500 text-black' : '' }}">
                    <input type="radio" name="category" value="" onchange="this.form.submit()"
                           class="mr-2 {{ request('category') == '' ? 'accent-white' : 'accent-orange-500' }}"
                           {{ request('category') == '' ? 'checked' : '' }}>
                    All Categories
                </label>
            </div>

            <!-- WOVEN & KNIT -->
            <div class="grid grid-cols-2 gap-3 mb-4">
                <!-- WOVEN -->
                @if($wovenCats->count())
                <div class="space-y-2">
                    <p class="text-sm font-semibold text-gray-900 mb-1 text-left">WOVEN</p>
                    @foreach($wovenCats as $cat)
                        <label class="flex items-center rounded px-2 py-1 text-xs w-full cursor-pointer {{ request('category') == $cat->id ? 'bg-orange-500 text-black' : '' }}">
                            <input type="radio" name="category" value="{{ $cat->id }}" 
                                   onchange="this.form.submit()" 
                                   class="mr-2 {{ request('category') == $cat->id ? 'accent-white' : 'accent-orange-500' }}"
                                   {{ request('category') == $cat->id ? 'checked' : '' }}>
                            <span class="truncate">{{ $cat->name }}</span>
                        </label>
                    @endforeach
                </div>
                @endif

                <!-- KNIT -->
                @if($knitCats->count())
                <div class="space-y-2">
                    <p class="text-sm font-semibold text-gray-900 mb-1 text-left">KNIT</p>
                    @foreach($knitCats as $cat)
                        <label class="flex items-center rounded px-2 py-1 text-xs w-full cursor-pointer {{ request('category') == $cat->id ? 'bg-orange-500 text-black' : '' }}">
                            <input type="radio" name="category" value="{{ $cat->id }}" 
                                   onchange="this.form.submit()" 
                                   class="mr-2 {{ request('category') == $cat->id ? 'accent-white' : 'accent-orange-500' }}"
                                   {{ request('category') == $cat->id ? 'checked' : '' }}>
                            <span class="truncate">{{ $cat->name }}</span>
                        </label>
                    @endforeach
                </div>
                @endif
            </div>

            <!-- OTHERS FULL WIDTH BELOW (grid-cols-2) -->
            @if($otherCats->count())
            <div class="grid grid-cols-2 gap-3 mb-3">
                <p class="text-sm font-semibold text-gray-900 col-span-2 mb-1 text-left">OTHERS</p>
                @foreach($otherCats as $cat)
                    <label class="flex items-center rounded px-2 py-1 text-xs w-full cursor-pointer {{ request('category') == $cat->id ? 'bg-orange-500 text-black' : '' }}">
                        <input type="radio" name="category" value="{{ $cat->id }}" 
                               onchange="this.form.submit()" 
                               class="mr-2 {{ request('category') == $cat->id ? 'accent-white' : 'accent-orange-500' }}"
                               {{ request('category') == $cat->id ? 'checked' : '' }}>
                        <span class="truncate">{{ $cat->name }}</span>
                    </label>
                @endforeach
            </div>
            @endif

            <!-- Hidden type input -->
            <input type="hidden" name="type" value="{{ request('type') }}">

            <!-- Other filters -->
            <div class="flex flex-wrap gap-2 w-full lg:w-auto mt-2">
                <input type="text" name="color" placeholder="Color" value="{{ request('color') }}" 
                       class="border rounded px-2 py-1 text-sm w-20 sm:w-24">
                <input type="text" name="fabric_name" placeholder="Fabric" value="{{ request('fabric_name') }}" 
                       class="border rounded px-2 py-1 text-sm w-24 sm:w-28">
                <button type="submit" 
                        class="bg-orange-500 text-black px-3 py-1 text-sm rounded shadow hover:bg-orange-600 transition">
                    Filter
                </button>
            </div>

        </div>
    </div>

</form>
