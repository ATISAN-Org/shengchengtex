<section class="py-8 md:py-20 bg-gray-50">
    <div class="md:w-4/5 mx-auto px-5 text-center">

        <!-- Section Header -->
        <h2 class="text-4xl md:text-5xl font-extrabold mb-4 text-orange-600 drop-shadow-md">
            Our Clients
        </h2>
        <p class="text-gray-700 mb-12 text-lg max-w-3xl mx-auto">
            Only a customer’s point of view for the customer can win the market. Development of Sheng Cheng Textile
            services in strict accordance with its policy to enhance quality and strengthen the brand’s value.
        </p>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4 md:gap-10 mb-10">
    @php
        $collection = collect($clients);
        // Take 8 international clients
        $displayClients = $collection->where('type', 'international')->take(8);
    @endphp

    @foreach($displayClients as $client)
        <div class="bg-white rounded-2xl shadow-md p-6 transform transition duration-500 hover:-translate-y-2 hover:scale-105">
            <div class="relative w-28 h-28 mx-auto mb-4">
                <img src="{{ $client->image_url ?? 'https://source.unsplash.com/150x150/?business' }}" alt="{{ $client->name }}"
                     class="w-28 h-28 object-cover rounded-full border-4 border-orange-400 shadow-sm">
            </div>
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
           class="inline-block bg-orange-600 text-white mt-5 px-8 py-3 rounded-full shadow hover:bg-orange-700 transition transform hover:scale-105">
            See More Clients
        </a>
    </div>

    <!-- Marquee styles removed per backend request -->
</section>