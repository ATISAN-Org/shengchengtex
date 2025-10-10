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
                   Only a customer's point of view for the customer, can win the market. Development of the Sheng Cheng Textile services in strict accordance with its policy to enhance the quality of the services and strengthened the brand's value. We are working with below buyers.
                </p>
            </div>
                
                <div class="mb-10">
                    <h3 class="text-2xl font-bold text-gray-800 mb-6 text-center">OUR INTERNATIONAL BUYERS</h3>
                    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                        <!-- Client logos would go here -->
                        <div class="flex items-center justify-center border border-yellow-400 p-4 bg-gray-50 rounded-lg h-32">
                           <img src="/uploads/clients/1759644347_puma.jpg" alt="">
                        </div>
                        <div class="flex items-center justify-center p-4 bg-gray-50 rounded-lg h-24">
                           <img src="/uploads/clients/1759646521_Nike-Logo-History-4-1200x750.png" alt="">
                        </div>
                        <div class="flex items-center justify-center p-4 bg-gray-50 rounded-lg h-24">
                           <img src="/uploads/clients/1759646708_maxmara.png" alt="">
                        </div>
                        <div class="flex items-center justify-center p-4 bg-gray-50 rounded-lg h-24">
                           <img src="/uploads/clients/1759648156_maxmara.png" alt="">
                        </div>
                        <div class="flex items-center justify-center p-4 bg-gray-50 rounded-lg h-24">
                           <img src="/uploads/clients/1759648211_logo.jpeg" alt="">
                        </div>
                        <div class="flex items-center justify-center p-4 bg-gray-50 rounded-lg h-24">
                           <img src="/uploads/clients/1759644347_puma.jpg" alt="">
                        </div>
                        <div class="flex items-center justify-center p-4 bg-gray-50 rounded-lg h-24">
                           <img src="/uploads/clients/1759646521_Nike-Logo-History-4-1200x750.png" alt="">
                        </div>
                        <div class="flex items-center justify-center p-4 bg-gray-50 rounded-lg h-24">
                           <img src="/uploads/clients/1759646708_maxmara.png" alt="">
                        </div>
                        <div class="flex items-center justify-center p-4 bg-gray-50 rounded-lg h-24">
                           <img src="/uploads/clients/1759648156_maxmara.png" alt="">
                        </div>
                        <div class="flex items-center justify-center p-4 bg-gray-50 rounded-lg h-24">
                           <img src="/uploads/clients/1759648211_logo.jpeg" alt="">
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection