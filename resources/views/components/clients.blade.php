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

        <!-- Clients Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10 mb-10">
            @foreach($clients->take(6) as $client)
                    <div
                        class="bg-white rounded-2xl shadow-md p-6 transform transition duration-500 hover:-translate-y-2 hover:scale-105">
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

        <!-- See More Button -->
        <a href="{{ route('clients-more') }}"
            class="inline-block bg-orange-500 text-white px-8 py-3 rounded-full shadow hover:bg-orange-600 transition transform hover:scale-105">
            See More Clients
        </a>

    </div>
</section>