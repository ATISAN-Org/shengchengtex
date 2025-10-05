@extends('layouts.app')

@section('content')
<section class="py-20 bg-white">
    <div class="container mx-auto px-5">
        <!-- Page Header -->
        <div class="text-center mb-16">
            <h1 class="text-5xl md:text-6xl font-extrabold text-orange-500 drop-shadow-md mb-4">
                Our Valuable Clients
            </h1>
            <p class="text-gray-700 text-lg max-w-3xl mx-auto">
                Only a customer’s point of view for the customer can win the market. Sheng Cheng Textile consistently develops services to enhance quality and strengthen brand value.
            </p>
        </div>

        <!-- International Buyers -->
        <div class="mb-16">
            <h2 class="text-3xl font-bold text-gray-800 mb-6">Our International Buyers</h2>
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-6">
                @foreach($internationalClients as $client)
                    <div class="bg-white rounded-xl shadow-md p-4 flex flex-col items-center transform transition hover:-translate-y-1 hover:scale-105">
                        <img src="{{ $client->image ? asset('storage/' . $client->image) : 'https://source.unsplash.com/150x150/?business' }}" 
                             alt="{{ $client->name }}" 
                             class="w-24 h-24 object-contain mb-2 rounded-full border-2 border-orange-300">
                        <h3 class="text-gray-800 font-semibold text-center text-sm">{{ $client->name }}</h3>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Bangladeshi Buyers -->
        <div class="mb-16">
            <h2 class="text-3xl font-bold text-gray-800 mb-6">Our Bangladeshi Buyers & Buying Houses</h2>
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-4">
                @foreach($bangladeshiClients as $client)
                    <div class="bg-white rounded-lg shadow-sm p-3 flex items-center justify-center transform transition hover:-translate-y-1 hover:scale-105">
                        <span class="text-gray-800 text-sm font-medium text-center">{{ $client->name }}</span>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Testimonials / Optional Client Info -->
        @if($clientsWithTestimonials->count() > 0)
        <div class="mb-16">
            <h2 class="text-3xl font-bold text-gray-800 mb-6">Client Testimonials</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                @foreach($clientsWithTestimonials as $client)
                    <div class="bg-orange-50 rounded-xl shadow-md p-6 transform transition hover:-translate-y-1 hover:scale-105">
                        <div class="flex items-center mb-4">
                            <img src="{{ $client->image ? asset('storage/' . $client->image) : 'https://source.unsplash.com/100x100/?business' }}" 
                                 alt="{{ $client->name }}" 
                                 class="w-16 h-16 object-cover rounded-full border-2 border-orange-300 mr-4">
                            <h3 class="text-gray-800 font-semibold">{{ $client->name }}</h3>
                        </div>
                        <p class="text-gray-700 italic text-sm">
                            "{{ $client->testimonial }}"
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
        @endif
    </div>
</section>
@endsection
