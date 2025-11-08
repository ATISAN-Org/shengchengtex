<section id="products" class="relative mt-8 md:mt-0 md:min-h-screen bg-white flex flex-col justify-center overflow-hidden">
    <div class="container mx-auto px-4">
        <!-- Header -->
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-orange-600 mb-4 drop-shadow-sm">
                Our Featured Products
            </h2>
            <p class="text-base md:text-lg text-gray-700 max-w-2xl mx-auto">
                Explore premium textiles designed for modern fashion and functional needs. Quality, innovation, and style in every fabric.
            </p>
        </div>

        <!-- Product Grid -->
        <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-5 gap-6">
            @foreach(collect($products)->take(10) as $product)
                <a href="{{ route('products.details', $product->id) }}" 
                   class="group block rounded-md overflow-hidden bg-white hover:shadow-md transition duration-300 transform hover:-translate-y-1">
                    
                    <!-- Image -->
                    <div class="relative overflow-hidden">
                        <img 
                            src="{{ $product->image_url }}" 
                            alt="{{ $product->name }}" 
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/25 to-transparent opacity-0 group-hover:opacity-100 transition"></div>
                    </div>

                    <!-- Product Name -->
                    <div class="p-3 text-center">
                        <h3 class="text-sm font-medium text-gray-800">{{ $product->name }}</h3>
                        @if($product->short_description)
                            <p class="text-xs text-gray-500 mt-1 truncate">{{ $product->short_description }}</p>
                        @endif
                    </div>
                </a>
            @endforeach
        </div>

        <!-- View All Button -->
        <div class="text-center mt-12">
            <a href="{{ route('products.list') }}" 
               class="inline-block bg-orange-600 text-white px-8 py-3 rounded-full text-base font-semibold shadow hover:bg-orange-700 transition transform hover:scale-105">
                View All Products
            </a>
        </div>
    </div>

    <!-- Optional: Decorative Background Shapes - Subtle -->
    <div class="absolute top-0 left-0 w-64 h-64 bg-gray-100 rounded-full opacity-30 -translate-x-1/2 -translate-y-1/2"></div>
    <div class="absolute bottom-0 right-0 w-72 h-72 bg-gray-100 rounded-full opacity-30 translate-x-1/2 translate-y-1/2"></div>
</section>