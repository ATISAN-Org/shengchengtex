@extends('layouts.app')

@section('title', 'Products - Shengcheng Textile')

@section('content')
    <section class="py-8 md:py-12 bg-orange-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl lg:text-4xl font-bold text-orange-500 mb-4 md:mb-8">All Products</h2>

            <div class="flex flex-col lg:flex-row gap-8">

                <!-- Products Grid (Left/Main) -->
                <div class="flex-1">

                    <!-- Mobile Filter Always Visible -->
                    <div class="lg:hidden mb-4">
                        <div class="bg-white p-2 lg:p-4 rounded shadow">
                            @include('components.products-filter-form')
                        </div>
                    </div>


                    <!-- Desktop Filter Form (hidden on mobile) -->
                    <div class="hidden lg:block mb-6">
                        @include('components.products-filter-form')
                    </div>

                    <!-- Products Grid -->
                    <!-- Products Grid -->
                    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-3 lg:grid-cols-4 gap-5 md:gap-9 2xl:gap-10">
                        @foreach($products as $product)
                            <a href="{{ route('products.details', $product->id) }}" class="block bg-white rounded-md shadow overflow-hidden group">
                                <img src="{{ $product->image_url }}"
                                     alt="{{ $product->name }}"
                                     class="w-full h-48 md:h-64 2xl:h-72 object-cover group-hover:scale-105 transition-transform duration-500">

                                <div class="p-4 text-center">
                                    <h3 class="text-base font-semibold text-gray-800 mb-1">{{ $product->name }}</h3>
                                </div>
                            </a>
                        @endforeach
                    </div>


                    <!-- Pagination -->
                    <div class="mt-8">
                        {{ $products->links() }}
                    </div>
                </div>

                <!-- Sidebar (Right, Desktop Only) -->
                <aside class="w-full lg:w-64 hidden lg:block">
                    <div class="bg-white rounded-xl shadow p-6">
                        <h3 class="text-xl font-bold text-orange-500 mb-4 pb-1 border-b-2 border-orange-500">Product Categories</h3>
                        <ul class="space-y-2 list-disc list-inside">
                            @foreach($categories as $category)
                                <li class="text-gray-800">
                                    <a href="{{ route('products.list', ['category' => $category->id]) }}"
                                        class="hover:text-orange-500 transition-colors">
                                        {{ $category->name }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </aside>

            </div>
        </div>
    </section>
@endsection