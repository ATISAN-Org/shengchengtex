@extends('layouts.app')

@section('title', 'Products - Shengcheng Textile')

@section('content')
<section class="py-8 md:py-12 bg-orange-50">
    <div class="container mx-auto px-4">

        <h2 class="text-3xl lg:text-4xl text-center lg:text-left font-bold text-orange-500 mb-4 md:mb-8">
            All Products
        </h2>

        @php
            $KNIT = 'KNIT FABRIC';
            $WOVEN = 'WOVEN FABRIC- WR/ NONE WR';
            $currentType = request('type');

            $knitCats = $categories->filter(fn($cat) =>
                $cat->products()->where('type', $KNIT)->exists()
            );

            $wovenCats = $categories->filter(fn($cat) =>
                $cat->products()->where('type', $WOVEN)->exists()
            );

            $otherCats = $categories->filter(fn($cat) =>
                !$knitCats->contains($cat) && !$wovenCats->contains($cat)
            );
        @endphp

        <div class="flex flex-col lg:flex-row gap-8">

            <!-- PRODUCTS SECTION -->
            <div class="flex-1">

                <!-- MOBILE CATEGORY GRID (radio buttons) -->
               <!-- MOBILE CATEGORY GRID (two-column layout) -->
<div class="lg:hidden mb-4">
    <form method="GET" action="{{ route('products.list') }}" class="bg-white p-3 rounded shadow">

        <!-- ALL CATEGORIES CENTERED TEXT -->
        <p class="text-lg font-semibold text-gray-900 mb-3 text-center">All Categories</p>

        <div class="grid grid-cols-2 gap-2 mb-3">
            <!-- WOVEN LEFT -->
            <div>
                <p class="text-sm font-semibold text-gray-700 mb-2 text-left">WOVEN</p>
                @foreach($wovenCats as $cat)
                    <label class="flex items-center rounded px-2 py-1 text-xs w-full cursor-pointer {{ request('category') == $cat->id ? 'bg-orange-500 text-black' : '' }}">
                        <input type="radio" name="category" value="{{ $cat->id }}" 
                               onchange="this.form.submit()" 
                               class="mr-2 {{ request('category') == $cat->id ? 'accent-white' : 'accent-orange-500' }}"
                               {{ request('category') == $cat->id ? 'checked' : '' }}>
                        <input type="hidden" name="type" value="{{ $cat->type ?? '' }}">
                        {{ $cat->name }}
                    </label>
                @endforeach
            </div>

            <!-- KNIT RIGHT -->
            <div>
                <p class="text-sm font-semibold text-gray-700 mb-2 text-left">KNIT</p>
                @foreach($knitCats as $cat)
                    <label class="flex items-center rounded px-2 py-1 text-xs w-full cursor-pointer {{ request('category') == $cat->id ? 'bg-orange-500 text-black' : '' }}">
                        <input type="radio" name="category" value="{{ $cat->id }}" 
                               onchange="this.form.submit()" 
                               class="mr-2 {{ request('category') == $cat->id ? 'accent-white' : 'accent-orange-500' }}"
                               {{ request('category') == $cat->id ? 'checked' : '' }}>
                        <input type="hidden" name="type" value="{{ $cat->type ?? '' }}">
                        {{ $cat->name }}
                    </label>
                @endforeach
            </div>
        </div>

        <!-- OTHERS FULL WIDTH BELOW -->
        @if($otherCats->count())
        <div class="mb-3">
            <p class="text-sm font-semibold text-gray-700 mb-2 text-left">OTHERS</p>
            @foreach($otherCats as $cat)
                <label class="flex items-center rounded px-2 py-1 text-xs w-full cursor-pointer {{ request('category') == $cat->id ? 'bg-orange-500 text-black' : '' }}">
                    <input type="radio" name="category" value="{{ $cat->id }}" 
                           onchange="this.form.submit()" 
                           class="mr-2 {{ request('category') == $cat->id ? 'accent-white' : 'accent-orange-500' }}">
                    <input type="hidden" name="type" value="{{ $cat->type ?? '' }}">
                    {{ $cat->name }}
                </label>
            @endforeach
        </div>
        @endif

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
                                <a href="{{ route('products.list', array_merge(request()->except('page'), ['category' => $cat->id, 'type' => $WOVEN])) }}"
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
                                <a href="{{ route('products.list', array_merge(request()->except('page'), ['category' => $cat->id, 'type' => $KNIT])) }}"
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
