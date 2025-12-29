@php
    $KNIT = 'KNIT FABRIC';
    $WOVEN = 'WOVEN FABRIC- WR/ NONE WR';

    // Filter categories by product type
    $wovenCats = $categories->filter(fn($cat) => 
        $cat->products()->where('type', $WOVEN)->exists()
    );
    
    $knitCats = $categories->filter(fn($cat) => 
        $cat->products()->where('type', $KNIT)->exists()
    );
    
    $otherCats = $categories->filter(fn($cat) => 
        !$wovenCats->contains($cat) && !$knitCats->contains($cat)
    );
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
            
            <!-- WOVEN (LEFT SIDE) -->
            @if($wovenCats->count())
            <div class="mb-3">
                <p class="text-sm font-semibold text-gray-900 mb-2">WOVEN</p>
                <div class="grid grid-cols-2 gap-2">
                    @foreach($wovenCats as $cat)
                        <label class="flex items-center rounded px-2 py-1 text-xs w-full cursor-pointer {{ request('category') == $cat->id ? 'bg-orange-500 text-black' : 'bg-gray-100' }}">
                            <input type="radio" name="category" value="{{ $cat->id }}" 
                                   onchange="this.form.submit()" 
                                   class="mr-2 {{ request('category') == $cat->id ? 'accent-white' : 'accent-orange-500' }}"
                                   {{ request('category') == $cat->id ? 'checked' : '' }}>
                            <span class="truncate">{{ $cat->name }}</span>
                        </label>
                    @endforeach
                </div>
            </div>
            @endif

            <!-- KNIT (RIGHT SIDE) -->
            @if($knitCats->count())
            <div class="mb-3">
                <p class="text-sm font-semibold text-gray-900 mb-2">KNIT</p>
                <div class="grid grid-cols-2 gap-2">
                    @foreach($knitCats as $cat)
                        <label class="flex items-center rounded px-2 py-1 text-xs w-full cursor-pointer {{ request('category') == $cat->id ? 'bg-orange-500 text-black' : 'bg-gray-100' }}">
                            <input type="radio" name="category" value="{{ $cat->id }}" 
                                   onchange="this.form.submit()" 
                                   class="mr-2 {{ request('category') == $cat->id ? 'accent-white' : 'accent-orange-500' }}"
                                   {{ request('category') == $cat->id ? 'checked' : '' }}>
                            <span class="truncate">{{ $cat->name }}</span>
                        </label>
                    @endforeach
                </div>
            </div>
            @endif

            <!-- OTHERS (BOTTOM - below both WOVEN and KNIT) -->
            @if($otherCats->count())
            <div class="mb-3">
                <p class="text-sm font-semibold text-gray-900 mb-2">OTHERS</p>
                <div class="grid grid-cols-2 gap-2">
                    @foreach($otherCats as $cat)
                        <label class="flex items-center rounded px-2 py-1 text-xs w-full cursor-pointer {{ request('category') == $cat->id ? 'bg-orange-500 text-black' : 'bg-gray-100' }}">
                            <input type="radio" name="category" value="{{ $cat->id }}" 
                                   onchange="this.form.submit()" 
                                   class="mr-2 {{ request('category') == $cat->id ? 'accent-white' : 'accent-orange-500' }}"
                                   {{ request('category') == $cat->id ? 'checked' : '' }}>
                            <span class="truncate">{{ $cat->name }}</span>
                        </label>
                    @endforeach
                </div>
            </div>
            @endif

            <!-- ALL CATEGORIES OPTION -->
            <div class="pt-3 border-t border-gray-200">
                <label class="flex items-center rounded px-2 py-1 text-xs w-full cursor-pointer {{ request('category') == '' ? 'bg-orange-500 text-black' : 'bg-gray-100' }}">
                    <input type="radio" name="category" value="" onchange="this.form.submit()"
                           class="mr-2 {{ request('category') == '' ? 'accent-white' : 'accent-orange-500' }}"
                           {{ request('category') == '' ? 'checked' : '' }}>
                    All Categories
                </label>
            </div>

        </div>
    </div>

    <!-- OTHER FILTER FIELDS (Color, Fabric, etc.) -->
    <div class="flex flex-wrap gap-2 w-full lg:w-auto">
        <input type="text" name="color" placeholder="Color" value="{{ request('color') }}" 
               class="border rounded px-2 py-1 text-sm w-20 sm:w-24">
        <input type="hidden" name="type" value="{{ request('type') }}">
        <input type="text" name="fabric_name" placeholder="Fabric" value="{{ request('fabric_name') }}" 
               class="border rounded px-2 py-1 text-sm w-24 sm:w-28">
        <button type="submit" 
                class="bg-orange-500 text-black px-3 py-1 text-sm rounded shadow hover:bg-orange-600 transition">
            Filter
        </button>
    </div>

</form>