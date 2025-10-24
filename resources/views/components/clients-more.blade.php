@extends('layouts.app')

@section('content')
    <section class="py-20 bg-orange-50">
        <div class="container mx-auto px-5">
            <!-- Page Header -->
            <div class="text-center mb-12">
                <h1 class="text-5xl md:text-6xl font-extrabold text-orange-500 mb-6 flex items-center justify-center gap-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-orange-500" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12h6m-3-3v6m-7 4a9 9 0 1118 0 9 9 0 01-18 0z" />
                    </svg>
                    Our Valuable Clients
                </h1>
                <p class="text-gray-700 text-lg md:text-xl max-w-3xl mx-auto leading-relaxed">
                    Only a customer's point of view for the customer, can win the market. Development of the Sheng Cheng Textile services in strict accordance with its policy to enhance the quality of the services and strengthened the brand's value. We are working with below buyers.
                </p>
                <h3 class="text-2xl my-5 font-bold text-gray-800 mb-8 text-center">OUR INTERNATIONAL BUYERS</h3>
            </div>
            
            <!-- International Buyers Section -->
            <div class="mb-10">
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5 lg:gap-8">
                    @foreach($internationalClients as $client)
                        <div class="flex items-center justify-center border-2 border-yellow-400 p-4 bg-white rounded-lg h-36 transition-all duration-300 hover:shadow-lg hover:border-yellow-500">
                            <img src="{{ $client->image ? asset($client->image) : 'https://via.placeholder.com/150x60?text=Client' }}" alt="{{ $client->name }}" class="max-h-16 max-w-full object-contain">
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="mt-20">
                <div class="text-center mb-12">
                    <h3 class="text-2xl my-5 font-bold text-gray-800 mb-8 text-center">OUR BANGLADESHI BUYERS</h3>
                </div>

                <!-- Bangladeshi buyers: left = Buying House (names only), right = Factory (names only) -->
                <div class="flex flex-col sm:flex-row gap-8">
                    <!-- Buying House Column -->
                    @php
                        $buyingHouse = $bangladeshiClients->where('local_type', 'buying_house')->sortBy('name');
                        $factoryList = $bangladeshiClients->where('local_type', 'factory')->sortBy('name');
                    @endphp

                    <div class="w-full sm:w-1/2">
                        <h4 class="text-lg font-semibold mb-4 border-b border-red-200 pb-2">Buying House @if($buyingHouse->count()) <span class="text-sm text-gray-500">({{ $buyingHouse->count() }})</span>@endif</h4>
                        <ul class="space-y-3">
                            @forelse($buyingHouse as $client)
                                <li class="flex items-start gap-3">
                                    <span class="w-4 h-4 mt-1 rounded-full border border-gray-400 flex-shrink-0"></span>
                                    <span class="text-sm text-gray-800">{{ $client->name }}</span>
                                </li>
                            @empty
                                <li class="text-sm text-gray-500">No Buying House entries found.</li>
                            @endforelse
                        </ul>
                    </div>

                    <!-- Factory Column -->
                    <div class="w-full sm:w-1/2">
                        <h4 class="text-lg font-semibold mb-4 border-b border-red-200 pb-2">Factory @if($factoryList->count()) <span class="text-sm text-gray-500">({{ $factoryList->count() }})</span>@endif</h4>
                        <ul class="space-y-3">
                            @forelse($factoryList as $client)
                                <li class="flex items-start gap-3">
                                    <span class="w-4 h-4 mt-1 rounded-full border border-gray-400 flex-shrink-0"></span>
                                    <span class="text-sm text-gray-800">{{ $client->name }}</span>
                                </li>
                            @empty
                                <li class="text-sm text-gray-500">No Factory entries found.</li>
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection