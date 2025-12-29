@extends('layouts.app')

@section('title', 'Products - Shengcheng Textile')

@section('content')
<section class="py-8 md:py-12 bg-orange-50">
    <div class="container mx-auto px-4">

        <h2 class="text-3xl lg:text-4xl text-center lg:text-left font-bold text-orange-500 mb-4 md:mb-8">
            All Products
        </h2>

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

        <div class="flex flex-col lg:flex-row gap-8">

            <!-- PRODUCTS SECTION -->
            <div class="flex-1">

                <!-- MOBILE CATEGORY GRID (radio buttons) -->
                <div class="lg:hidden w-full mb-4">
                    <form method="GET" action="{{ route('products.list') }}" class="bg-white p-3 rounded shadow">

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
                            <!-- WOVEN LEFT -->
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

                            <!-- KNIT RIGHT -->
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

                        <!-- OTHERS FULL WIDTH BELOW (grid-cols-2 for empty space) -->
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
                    </form>
                </div>

                <!-- FILTER FORM (Desktop) -->
                <div class="hidden lg:block mb-6">
                    @include('components.products-filter-form')
                </div>

                <!-- PRODUCTS GRID -->
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-3 lg:grid-cols-4 gap-5 md:gap-9">
                    @foreach($products as $product)
                        <a href="{{ route('products.details', $product->id) }}"
                           class="block bg-white rounded-md shadow overflow-hidden group">
                            <img src="{{ $product->image_url }}"
                                 alt="{{ $product->name }}"
                                 class="w-full h-48 md:h-64 object-cover group-hover:scale-105 transition-transform duration-500">
                            <div class="p-4 text-center">
                                <h3 class="text-base font-semibold text-gray-800 mb-1">
                                    {{ $product->name }}
                                </h3>
                            </div>
                        </a>
                    @endforeach
                </div>

                <!-- PAGINATION -->
                <div class="mt-8">
                    {{ $products->links() }}
                </div>

            </div>

            <!-- DESKTOP SIDEBAR -->
            <aside class="w-full lg:w-64 hidden lg:block">
                <div class="bg-white rounded-xl shadow p-6">

                    <h3 class="text-xl font-bold text-orange-500 mb-4 pb-1 border-b-2 border-orange-500">
                        Product Categories
                    </h3>

                    <!-- WOVEN -->
                    <p class="text-lg font-semibold text-gray-900 mb-3">WOVEN</p>
                    <ul class="space-y-2 list-disc list-inside mb-5 text-base text-gray-700">
                        @foreach($wovenCats as $cat)
                            <li>
                                <a href="{{ route('products.list', array_merge(request()->except('page'), ['category' => $cat->id])) }}"
                                   class="hover:text-orange-500">
                                   {{ $cat->name }}
                                </a>
                            </li>
                        @endforeach
                    </ul>

                    <!-- KNIT -->
                    <p class="text-lg font-semibold text-gray-900 mb-3">KNIT</p>
                    <ul class="space-y-2 list-disc list-inside mb-5 text-base text-gray-700">
                        @foreach($knitCats as $cat)
                            <li>
                                <a href="{{ route('products.list', array_merge(request()->except('page'), ['category' => $cat->id])) }}"
                                   class="hover:text-orange-500">
                                   {{ $cat->name }}
                                </a>
                            </li>
                        @endforeach
                    </ul>

                    <!-- OTHER -->
                    @if($otherCats->count() > 0)
                        <p class="text-lg font-semibold text-gray-900 mb-3">OTHERS</p>
                        <ul class="space-y-2 list-disc list-inside text-base text-gray-700">
                            @foreach($otherCats as $cat)
                                <li>
                                    <a href="{{ route('products.list', array_merge(request()->except('page'), ['category' => $cat->id])) }}"
                                       class="hover:text-orange-500">
                                       {{ $cat->name }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    @endif

                </div>
            </aside>

        </div>
    </div>
</section>
@endsection
