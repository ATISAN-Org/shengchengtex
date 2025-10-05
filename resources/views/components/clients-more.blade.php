@extends('layouts.app')

@section('content')
    <section class="py-20 bg-orange-50">
        <div class="container mx-auto px-5">
            <!-- Page Header -->
            <div class="text-center mb-20">
                <h1 class="text-5xl md:text-6xl font-extrabold text-orange-500 mb-6 flex items-center justify-center gap-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-orange-500" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12h6m-3-3v6m-7 4a9 9 0 1118 0 9 9 0 01-18 0z" />
                    </svg>
                    Our Valuable Clients
                </h1>
                <p class="text-gray-700 text-lg md:text-xl max-w-3xl mx-auto leading-relaxed">
                    Only a customer’s point of view for the customer can win the market. Sheng Cheng Textile consistently
                    develops services to enhance quality and strengthen brand value.
                </p>
            </div>

            <!-- Buyers Side by Side -->
            <div class="flex flex-wrap -mx-4 mb-20">
                <!-- International Buyers -->
                <div class="w-full md:w-1/2 px-4 mb-8 md:mb-0">
                    <h2
                        class="text-3xl font-bold text-gray-800 mb-6 pb-2 border-b-2 border-orange-300 inline-flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-orange-500" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 7h18M3 12h18M3 17h18" />
                        </svg>
                        Our International Buyers
                    </h2>
                    <div class="grid grid-cols-2 gap-6">
                        @foreach($internationalClients as $client)
                                        <div
                                            class="relative bg-white rounded-2xl p-4 flex flex-col items-center text-center overflow-hidden group cursor-pointer transform transition duration-300 hover:-translate-y-1 hover:scale-105">
                                            <!-- Logo -->
                                            <img src="{{ $client->image && file_exists(public_path($client->image))
                            ? asset($client->image)
                            : 'https://source.unsplash.com/150x150/?business' }}"
                                                class="w-20 h-20 object-contain mb-3 rounded-full border border-gray-200 z-10 relative">

                                            <h3 class="text-gray-800 font-semibold text-lg z-10 relative">{{ $client->name }}</h3>

                                            <!-- Sliding Overlay for testimonial -->
                                            @if($client->testimonial)
<div class="absolute bottom-0 left-0 w-full bg-orange-500 bg-opacity-95 text-white p-4 text-sm text-center transform translate-y-full group-hover:translate-y-0 transition-transform duration-300 z-20
            max-h-48 overflow-y-auto break-words">
    "{{ $client->testimonial }}"
</div>
@endif

                                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- Bangladeshi Buyers -->
                <div class="w-full md:w-1/2 px-4">
                    <h2
                        class="text-3xl font-bold text-gray-800 mb-6 pb-2 border-b-2 border-orange-300 inline-flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-orange-500" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 10h18M3 14h18M3 18h18" />
                        </svg>
                        Our Bangladeshi Buyers & Buying Houses
                    </h2>
                    <div class="grid grid-cols-2 gap-6">
                        @foreach($bangladeshiClients as $client)
                                        <div
                                            class="relative bg-white rounded-xl p-4 flex flex-col items-center text-center overflow-hidden group cursor-pointer transform transition duration-300 hover:-translate-y-1 hover:scale-105">
                                            <img src="{{ $client->image && file_exists(public_path($client->image))
                            ? asset($client->image)
                            : 'https://source.unsplash.com/150x150/?business' }}"
                                                class="w-16 h-16 object-contain mb-2 rounded-full border border-gray-200 z-10 relative">
                                            <span
                                                class="text-gray-800 font-medium text-sm md:text-base z-10 relative">{{ $client->name }}</span>

                                            @if($client->testimonial)
<div class="absolute bottom-0 left-0 w-full bg-orange-500 bg-opacity-95 text-white p-4 text-sm text-center transform translate-y-full group-hover:translate-y-0 transition-transform duration-300 z-20
            max-h-48 overflow-y-auto break-words">
    "{{ $client->testimonial }}"
</div>
@endif

                                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection