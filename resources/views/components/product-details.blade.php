@extends('layouts.app')

@section('content')
    <div class="max-w-6xl mx-auto px-4 py-12 space-y-14 font-sans text-gray-800 tracking-wide">

        <!-- Product Header -->
        <div class="flex flex-col md:flex-row md:gap-12 items-start">
            <div class="md:w-1/2 mb-6 md:mb-0">
                <img src="{{ $product->image_url }}"
                    alt="{{ $product->name }}"
                    class="w-full h-[380px] object-cover rounded-xl shadow-md border border-gray-200 transition-transform duration-500 hover:scale-105">
            </div>

            <div class="md:w-1/2 space-y-6 tracking-wide">
                <h1 class="text-3xl md:text-4xl font-extrabold text-orange-500 uppercase">
                    {{ $product->fabric_name ?? $product->name }}
                </h1>
                <p class="text-2xl text-black font-semibold uppercase">
                    @if(!is_null($product->price) && $product->price !== '')
                        ${{ number_format($product->price, 2) }}/YDS
                    @else
                        N/A
                    @endif
                </p>
                <p class="text-sm text-gray-700 uppercase">
                    CATEGORY: <span class="font-medium">{{ $product->category->name ?? 'N/A' }}</span>
                </p>

                <div class="space-y-2 text-gray-700 text-sm leading-relaxed">
                    <p><span class="font-medium uppercase">Composition:</span> {{ $product->composition }}</p>
                    <p><span class="font-medium uppercase">Color:</span> {{ $product->color }}</p>
                    <p><span class="font-medium uppercase">Width:</span> {{ $product->width }}</p>
                    <p><span class="font-medium uppercase">Type:</span> {{ $product->type }}</p>
                </div>
            </div>
        </div>

        <!-- Other Details -->
        <div class="bg-gray-50 p-6 rounded-xl shadow-sm tracking-wide">
            <h2 class="text-xl font-semibold text-orange-500 mb-5 border-b border-gray-200 pb-2 uppercase">Other Details
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-4 text-sm text-gray-700">
                <p><span class="font-medium uppercase">Samples:</span> {{ $product->samples }}</p>
                <p><span class="font-medium uppercase">Origin:</span> {{ $product->origin }}</p>
                <p><span class="font-medium uppercase">MOQ:</span> {{ $product->moq }}</p>
                <p><span class="font-medium uppercase">Weight:</span> {{ $product->weight }}</p>
                <p><span class="font-medium uppercase">Package:</span> {{ $product->package }}</p>
                <p><span class="font-medium uppercase">Capacity:</span> {{ $product->capacity }}</p>
                <p><span class="font-medium uppercase">Format:</span> {{ $product->format }}</p>
                <p><span class="font-medium uppercase">Export:</span> {{ $product->export }}</p>
                <p><span class="font-medium uppercase">Delivery:</span> {{ $product->delivery_time }}</p>
                <p><span class="font-medium uppercase">Port:</span> {{ $product->port_in_bd }}</p>
            </div>

            @if($product->basic_info)
                <div class="mt-6">
                    <h3 class="text-lg font-semibold text-orange-500 mb-2 uppercase">Additional Information</h3>
                    <p class="text-gray-700 text-sm leading-relaxed">{{ $product->basic_info }}</p>
                </div>
            @endif
        </div>

        <!-- Contact Section -->
        <div class="flex flex-col md:flex-row gap-6">

            <!-- Request Form -->
            <!-- Request Form -->
            <div class="md:w-2/3 bg-gray-900 text-white p-6 rounded-xl shadow-md tracking-wide">
                <h2 class="text-xl font-semibold text-orange-500 mb-5 border-b border-gray-700 pb-2 uppercase">
                    Send Purchase Request / Query
                </h2>
                <form action="{{ route('product.request', $product->id) }}" method="POST"
                    class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    @csrf
                    <input type="text" name="name" placeholder="FULL NAME"
                        class="border border-gray-700 px-4 py-2 rounded tracking-wide focus:outline-none focus:ring-2 focus:ring-orange-500 bg-gray-800 text-white"
                        required>
                    <input type="email" name="email" placeholder="EMAIL ADDRESS"
                        class="border border-gray-700 px-4 py-2 rounded tracking-wide focus:outline-none focus:ring-2 focus:ring-orange-500 bg-gray-800 text-white"
                        required>
                    <input type="text" name="phone" placeholder="PHONE NUMBER"
                        class="border border-gray-700 px-4 py-2 rounded tracking-wide focus:outline-none focus:ring-2 focus:ring-orange-500 bg-gray-800 text-white"
                        required>
                    <input type="text" name="subject" placeholder="SUBJECT"
                        class="border border-gray-700 px-4 py-2 rounded tracking-wide focus:outline-none focus:ring-2 focus:ring-orange-500 bg-gray-800 text-white">
                    <textarea name="message" rows="4" placeholder="MESSAGE"
                        class="border border-gray-700 px-4 py-2 rounded tracking-wide focus:outline-none focus:ring-2 focus:ring-orange-500 bg-gray-800 text-white md:col-span-2"></textarea>
                    <button type="submit"
                        class="bg-orange-500 text-black py-2 px-4 rounded hover:bg-orange-600 transition-all md:col-span-2 uppercase">
                        Send Message
                    </button>
                </form>
            </div>


            <!-- Contact Info -->
            <div class="md:w-1/3 bg-gray-50 p-6 rounded-xl shadow-sm tracking-wide">
                <h2 class="text-xl font-semibold text-orange-500 mb-3 uppercase">Contact Information</h2>
                <p class="text-sm text-gray-700 uppercase">SECTOR-3, ROAD #18, HOUSE #22, UTTARA, DHAKA-1230, BANGLADESH</p>
                <p class="text-sm text-gray-700 uppercase">📞 +8801739939469</p>
                <p class="text-sm text-gray-700 uppercase">📧 TUSHAR@SHIFENGTEXTILE.COM | TUSHAR@NSD-TEX.COM</p>
                <p class="text-sm text-gray-500 mt-1 uppercase">MON TO FRI — 9AM TO 6PM</p>
            </div>

        </div>

    </div>
@endsection