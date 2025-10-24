@extends('layouts.app')

@section('content')
    <section class="py-20 bg-orange-50">
        <div class="container mx-auto px-5">
            <!-- Page Header -->
            <div class="text-center mb-12">
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-orange-500 mb-6 flex items-center justify-center gap-3">
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
                        <div class="flex items-center justify-center border-2 border-yellow-400 bg-white rounded-lg transition-all duration-300 hover:shadow-lg hover:border-yellow-500">
                            <img src="{{ $client->image ? asset($client->image) : 'https://via.placeholder.com/150x60?text=Client' }}" alt="{{ $client->name }}" class="max-w-full object-contain">
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="mt-0">
                <div class="text-center mb-2">
                    <h3 class="text-2xl font-bold text-gray-800 mb-2 text-center">OUR BANGLADESHI BUYERS</h3>
                </div>

                <!-- Bangladeshi buyers: left = Buying House (names only), right = Factory (names only) -->
                <div class="flex flex-col sm:flex-row gap-8">
                    <!-- Buying House Column -->
                    @php
                        // Be tolerant of different casing or null values in local_type
                        $buyingHouse = $bangladeshiClients->filter(function($c){
                            return isset($c->local_type) && strtolower($c->local_type) === 'buying_house';
                        })->sortBy('name');

                        $factoryList = $bangladeshiClients->filter(function($c){
                            return isset($c->local_type) && strtolower($c->local_type) === 'factory';
                        })->sortBy('name');
                        // Clients with no local_type set (created before migration or not selected)
                        $others = $bangladeshiClients->filter(function($c){
                            return !isset($c->local_type) || $c->local_type === null || trim($c->local_type) === '';
                        })->sortBy('name');
                    @endphp

                    <div class="w-full sm:w-1/2">
                        <h4 class="text-lg font-semibold mb-4 border-b border-red-200 pb-2">Buying House @if($buyingHouse->count()) <span class="text-sm text-gray-500">({{ $buyingHouse->count() }})</span>@endif</h4>
                        <ul class="space-y-3">
                            @foreach($buyingHouse as $client)
                                <li class="flex items-start gap-3">
                                    <span class="w-4 h-4 mt-1 rounded-full border border-gray-400 flex-shrink-0"></span>
                                    <span class="text-sm text-gray-800">{{ $client->name }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <!-- Factory Column -->
                    <div class="w-full sm:w-1/2">
                        <h4 class="text-lg font-semibold mb-4 border-b border-red-200 pb-2">Factory @if($factoryList->count()) <span class="text-sm text-gray-500">({{ $factoryList->count() }})</span>@endif</h4>
                        <ul class="space-y-3">
                            @foreach($factoryList as $client)
                                <li class="flex items-start gap-3">
                                    <span class="w-4 h-4 mt-1 rounded-full border border-gray-400 flex-shrink-0"></span>
                                    <span class="text-sm text-gray-800">{{ $client->name }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                @if($others->count())
                    <div class="mt-8">
                        <ul class="grid grid-cols-1 sm:grid-cols-2 gap-2">
                            @foreach($others as $client)
                                <li class="text-sm text-gray-800">• {{ $client->name }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection