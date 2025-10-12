<section class="py-20 bg-orange-50">
    <div class="w-4/5 mx-auto px-5 text-center">

        <!-- Section Header -->
        <h2 class="text-4xl md:text-5xl font-extrabold mb-4 text-orange-500 drop-shadow-md">
            Our Clients
        </h2>
        <p class="text-gray-700 mb-12 text-lg max-w-3xl mx-auto">
            Only a customer’s point of view for the customer can win the market. Development of Sheng Cheng Textile
            services in strict accordance with its policy to enhance quality and strengthen the brand’s value.
        </p>

        <!-- Big Visual Row (left image + right brands collage + vertical center bar with icons) -->
        <div class="relative mb-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 items-center">
                <!-- Left big image -->
                <div class="rounded-xl overflow-hidden shadow-lg">
                    <!-- Replace with your actual image path in public/ (e.g., public/assets/hero-left.jpg) -->
                    <img src="{{ asset('images/c.png') }}" alt="left art"
                         class="w-full h-72 md:h-96 object-cover">
                </div>

                <!-- Right big brands collage -->
                <div>
                    <div class="rounded-xl overflow-hidden shadow-lg relative">
                        <h3 class="text-lg text-left font-semibold text-gray-800">Fashion Brands</h3>
                    <!-- Replace with your actual collage image (public/assets/brands-collage.jpg) -->
                    <img src="{{ asset('images/c2.png') }}" alt="brands collage"
                         class="w-full h-72 md:h-96 object-cover">
                </div>
                </div>
            </div>

            <!-- Center vertical green bar with icons (visible on md+ screens) -->
            <div class="hidden md:flex flex-col items-center justify-center gap-6 absolute left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2 z-30">
                <div class="bg-[#6d8a2f] w-14 h-56 rounded-md shadow-lg flex flex-col items-center justify-center text-white">
                    <!-- top icon: 4-square -->
                    <span class="mb-6">
                        <!-- simple inline SVG for grid */}
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" stroke-width="2">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h7v7H3V3zM14 3h7v7h-7V3zM3 14h7v7H3v-7zM14 14h7v7h-7v-7z"/>
                        </svg>
                    </span>

                    <!-- bell icon -->
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" stroke-width="2">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6 6 0 10-12 0v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0a3 3 0 11-6 0h6z"/>
                        </svg>
                    </span>
                </div>
            </div>
        </div>

        <!-- Clients Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10 mb-10">
            @foreach($clients->take(6) as $client)
                <div class="bg-white rounded-2xl shadow-md p-6 transform transition duration-500 hover:-translate-y-2 hover:scale-105">
                    <div class="relative w-28 h-28 mx-auto mb-4">
                        <img src="{{ $client->image && file_exists(public_path($client->image))
                ? asset($client->image)
                : 'https://source.unsplash.com/150x150/?business' }}" alt="{{ $client->name }}"
                             class="w-28 h-28 object-cover rounded-full border-4 border-orange-300 shadow-sm">
                    </div>

                    <h3 class="text-xl font-semibold mb-2 text-gray-800">{{ $client->name }}</h3>
                    @if($client->testimonial)
                        <p class="text-gray-600 text-sm md:text-base italic mb-0">
                            "{{ $client->testimonial }}"
                        </p>
                    @endif
                </div>
            @endforeach
        </div>

        <!-- Logos Marquee removed per backend request -->
        <!-- See More Button -->
        <a href="{{ route('clients-more') }}"
           class="inline-block bg-orange-500 text-white mt-5 px-8 py-3 rounded-full shadow hover:bg-orange-600 transition transform hover:scale-105">
            See More Clients
        </a>
    </div>

    <!-- Marquee styles removed per backend request -->
</section>