@extends('layouts.app')

@section('content')

<!-- HERO / About Us Section (Image Right, Text Left) -->
<section class="py-20 bg-gradient-to-br from-orange-50 to-white">
    <div class="w-11/12 md:w-4/5 mx-auto flex flex-col lg:flex-row gap-12 items-center">
        <!-- Left: Content -->
        <div class="lg:w-3/5 space-y-6">
            <h1 class="text-4xl md:text-5xl font-extrabold text-orange-700 mb-4">About Shengcheng Textile Ltd</h1>
            <p class="text-lg text-gray-800 leading-relaxed text-justify">
                Welcome to <span class="font-semibold text-orange-600">Shengcheng Textile Ltd</span>, a proud member of the Thenhong Group and a professional manufacturer of polyester-based knit & woven fabric. Our head office is located at 21F, No.79 Xiushui Road, Shengze Town, Wujiang City, China – the heart of the textile industry.
            </p>
            <p class="text-gray-700 text-base">
                With <span class="font-semibold text-orange-600">over 25 years</span> of experience, we produce <span class="font-semibold text-orange-600">25 million meters</span> of greige fabric annually. We are devoted to creating a paragon brand for the textile industry, consistently developing new varieties that lead trends in both fashion and functionality. Shengcheng Textile has evolved into a comprehensive company combining weaving, dyeing, finishing, and sales, with a quality control system surpassing industry standards and a competitive, reasonable pricing mechanism.
            </p>
            <p class="text-gray-700 text-base">
                We have built deep, win-win business relationships with customers worldwide, striving for excellence, reliability, and innovation in every meter of fabric.
            </p>
        </div>
        <!-- Right: Hero Image -->
        <div class="lg:w-2/5 flex justify-center">
            <img src="{{ asset('images/1.png') }}" alt="Shengcheng Textile Company" class="rounded-3xl shadow-xl w-full object-cover md:h-[480px]">
        </div>
    </div>
</section>

<!-- Mission & Vision Section (Image Left, Text Right) -->
<section class="py-16 bg-white">
    <div class="w-11/12 md:w-4/5 mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
        <!-- Left: Mission Image or Infographic -->
        <div class="flex justify-center order-2 md:order-1">
            <img src="{{ asset('images/2.png') }}" alt="Our Mission" class="rounded-3xl shadow-2xl w-full object-cover md:h-[400px]">
        </div>
        <!-- Right: Mission Statement -->
        <div class="order-1 md:order-2">
            <h2 class="text-3xl md:text-4xl font-bold text-orange-700 mb-3">Our Mission</h2>
            <p class="text-gray-700 text-lg leading-relaxed mb-4">
                To make <span class="font-semibold text-orange-600">SHENGCHENG TEXTILE</span> your preferred partner by delivering outstanding value and excellent pricing, while fulfilling all your requirements with consistent quality and continuous feedback.
            </p>
            <ul class="space-y-4">
                <li class="flex items-start gap-3">
                    <svg class="w-6 h-6 text-orange-500 mt-1" fill="currentColor" viewBox="0 0 20 20"><path d="M16.707 5.293a1 1 0 00-1.414 0l-7 7-3-3a1 1 0 00-1.414 1.414l3.707 3.707a1 1 0 001.414 0l7.707-7.707a1 1 0 000-1.414z"/></svg>
                    <span>
                        We believe <span class="font-bold text-orange-600">good fabric makes people happy</span> — the look, feel, and even scent of fabric instills comfort and pleasure.
                    </span>
                </li>
                <li class="flex items-start gap-3">
                    <svg class="w-6 h-6 text-orange-500 mt-1" fill="currentColor" viewBox="0 0 20 20"><path d="M16.707 5.293a1 1 0 00-1.414 0l-7 7-3-3a1 1 0 00-1.414 1.414l3.707 3.707a1 1 0 001.414 0l7.707-7.707a1 1 0 000-1.414z"/></svg>
                    <span>
                        Every meter of our fabric reveals our <span class="font-bold">dedication</span> to appearance, functionality, and tactile sensation.
                    </span>
                </li>
                <li class="flex items-start gap-3">
                    <svg class="w-6 h-6 text-orange-500 mt-1" fill="currentColor" viewBox="0 0 20 20"><path d="M16.707 5.293a1 1 0 00-1.414 0l-7 7-3-3a1 1 0 00-1.414 1.414l3.707 3.707a1 1 0 001.414 0l7.707-7.707a1 1 0 000-1.414z"/></svg>
                    <span>
                        We use yarns, dyes, and materials that meet or exceed industry standards, ensuring <span class="font-bold">vivid colors, beautiful patterns, and lasting quality</span>.
                    </span>
                </li>
            </ul>
        </div>
    </div>
</section>

<!-- Quality Control & Commitment Section (Image Left, Text Right) -->
<section class="py-16 bg-orange-50">
    <div class="w-11/12 md:w-4/5 mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
        <!-- Left: Quality Image / Badges -->
        <div class="flex justify-center order-2 md:order-1">
            <img src="{{ asset('images/3.png') }}" alt="Quality Control" class="rounded-3xl shadow-2xl w-full object-cover md:h-[400px]">
        </div>
        <!-- Right: Quality Statement -->
        <div class="space-y-6 order-1 md:order-2">
            <h2 class="text-3xl md:text-4xl font-bold text-orange-700 mb-2">Quality Control & Commitment</h2>
            <p class="text-gray-700 text-base">
                Every fabric at Shengcheng Textile undergoes strict, multi-level quality inspections — from yarn to finished product. Our commitment is not just to quality, but to your satisfaction.
            </p>
            <ul class="list-disc list-inside text-gray-700 text-base space-y-2">
                <li>Consistency and durability are ensured at every step.</li>
                <li>Every fabric is tested and trusted as per buyer requirements.</li>
                <li>Clear Time & Action plans keep your supply chain smooth and your orders on track.</li>
                <li>We value your time — on-time delivery is our promise and responsibility.</li>
            </ul>
            <p class="text-orange-700 font-semibold">Quality is not an option, it’s a promise.</p>
        </div>
    </div>
</section>

<!-- Environmental Policy Section (Image Right, Text Left) -->
<section class="py-16 bg-white">
    <div class="w-11/12 md:w-4/5 mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
        <!-- Right: Eco Image (leaf, fabric, earth) -->
        <div class="flex justify-center order-1 md:order-2">
            <img src="{{ asset('images/4.jpg') }}" alt="Environmental Policy" class="rounded-3xl shadow-md w-full object-cover h-[330px]">
        </div>
        <!-- Left: Environmental Commitment -->
        <div class="order-2 md:order-1">
            <h2 class="text-3xl md:text-4xl font-bold text-green-700 mb-3">Environmental Policy</h2>
            <p class="text-gray-700 text-base mb-3">
                We go beyond compliance — striving to lead the industry in <span class="font-bold text-green-700">eco-friendly and sustainable practices</span>.
            </p>
            <ul class="list-disc list-inside text-gray-700 space-y-2">
                <li>Only eco-friendly raw materials and dyes for all fabrics</li>
                <li>Strict controls over water, energy, and chemical use to reduce waste</li>
                <li>Recycled materials used in production, with client confirmation</li>
                <li>Benchmarking for continuous improvement in sustainability</li>
            </ul>
            <p class="text-green-700 font-semibold mt-3">We believe career and business growth must respect the environment.</p>
        </div>
    </div>
</section>

<!-- Certifications & Sustainability Section (Image Right, Text Left) -->
<section class="py-20 bg-gradient-to-br from-green-50 via-white to-orange-50">
    <div class="w-11/12 md:w-4/5 mx-auto flex flex-col lg:flex-row-reverse gap-12 items-center">
        <!-- Right: Certification Image -->
        <div class="lg:w-1/2 flex justify-center">
            <img src="{{ asset('images/5.jpg') }}" alt="Certifications" class="rounded-3xl shadow-2xl w-full object-cover">
        </div>
        <!-- Left: Content -->
        <div class="lg:w-1/2 space-y-6">
            <h2 class="text-3xl md:text-4xl font-bold text-orange-700 mb-2 flex items-center gap-2">
                <span class="inline-block text-2xl">🌱</span> Our Commitment to Certified Quality & Sustainability
            </h2>
            <p class="text-gray-700 text-lg">
                Every product follows the highest international sustainability and safety standards. We are proudly certified by:
            </p>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5 pt-2">
                <div class="bg-white rounded-2xl shadow p-5 border-l-4 border-green-400">
                    <h3 class="font-semibold text-xl text-green-800 mb-1">Global Recycle Standard (GRS)</h3>
                    <p class="text-gray-700 text-sm">Responsible recycling and sustainable production.</p>
                </div>
                <div class="bg-white rounded-2xl shadow p-5 border-l-4 border-yellow-400">
                    <h3 class="font-semibold text-xl text-yellow-800 mb-1">Better Cotton Initiative (BCI)</h3>
                    <p class="text-gray-700 text-sm">Promoting better standards in cotton farming and the global supply chain.</p>
                </div>
                <div class="bg-white rounded-2xl shadow p-5 border-l-4 border-orange-400">
                    <h3 class="font-semibold text-xl text-orange-800 mb-1">OEKO-TEX®</h3>
                    <p class="text-gray-700 text-sm">Fabrics tested for harmful substances and safe for human use.</p>
                </div>
                <div class="bg-white rounded-2xl shadow p-5 border-l-4 border-blue-400">
                    <h3 class="font-semibold text-xl text-blue-800 mb-1">Global Organic Textile Standard (GOTS)</h3>
                    <p class="text-gray-700 text-sm">Organic fibers and environmentally-friendly manufacturing certified.</p>
                </div>
            </div>
            <p class="text-gray-700 mt-6">
                These certifications reflect our unwavering commitment to quality, safety, and sustainability — making every meter of fabric a responsible choice.
            </p>
        </div>
    </div>
</section>

<!-- Company at a Glance (Quick Stats) -->
<section class="py-12 bg-orange-50">
    <div class="w-11/12 md:w-4/5 mx-auto grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
        <div>
            <div class="text-3xl font-extrabold text-orange-600 mb-1">25+</div>
            <div class="text-gray-700 text-sm">Years in Business</div>
        </div>
        <div>
            <div class="text-3xl font-extrabold text-orange-600 mb-1">25M</div>
            <div class="text-gray-700 text-sm">Meters Annual Production</div>
        </div>
        <div>
            <div class="text-3xl font-extrabold text-orange-600 mb-1">120+</div>
            <div class="text-gray-700 text-sm">Global Partners</div>
        </div>
        <div>
            <div class="text-3xl font-extrabold text-orange-600 mb-1">15+</div>
            <div class="text-gray-700 text-sm">Certifications</div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-gradient-to-r from-orange-400 to-orange-700 text-center">
    <h3 class="text-4xl font-bold text-white mb-6">Partner with Us</h3>
    <p class="text-white text-lg mb-8">Let's create sustainable and innovative textiles together.</p>
    <a href="{{ url('/#contact') }}"
       class="inline-block bg-white text-orange-600 px-10 py-4 font-semibold rounded-full shadow-lg hover:bg-gray-100 hover:scale-105 transform transition duration-300">
       Contact Us
    </a>
</section>

@endsection