@extends('layouts.app')

@section('content')

<!-- Company Overview -->
<section class="py-20 bg-white">
    <div class="w-11/12 md:w-4/5 mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
        <!-- Image Left -->
        <div class="flex justify-center">
            <img src="{{ asset('images/image1.jpg') }}" 
                 alt="Shengze Textile Factory" 
                 class="rounded-3xl shadow-xl w-full md:w-4/5 object-cover">
        </div>
        <!-- Content Right -->
        <div>
            <h2 class="text-4xl md:text-5xl font-bold text-orange-600 mb-6">Chengcheng Textile Co., Ltd</h2>
            <p class="text-gray-700 text-lg leading-relaxed mb-4 text-justify">
                Located in Shengze Town, Wujiang City – China’s “Hometown of Silk” – Chengcheng Textile Co., Ltd has been blending traditional craftsmanship with modern innovation for over 20 years.
            </p>
            <p class="text-gray-600 text-lg leading-relaxed text-justify">
                We provide a full range of textile services from spinning, yarn dyeing, weaving, to finished fabrics, catering to export-oriented RMG industries worldwide.
            </p>
        </div>
    </div>
</section>

<!-- History / Milestones Timeline -->
<section class="py-20 bg-orange-50">
    <div class="w-11/12 md:w-4/5 mx-auto text-center">
        <h2 class="text-4xl md:text-5xl font-bold text-orange-600 mb-12">Milestones & Innovations</h2>
        <div class="relative max-w-5xl mx-auto">
            <!-- Vertical Line -->
            <div class="absolute left-1/2 transform -translate-x-1/2 h-full border-l-2 border-orange-300"></div>
            <div class="space-y-16 relative">
                <!-- Milestone 1 -->
                <div class="flex flex-col md:flex-row items-center md:items-start">
                    <div class="w-full md:w-1/2 flex justify-center md:justify-end mb-6 md:mb-0">
                        <img src="{{ asset('images/image1.jpg') }}"  
                             alt="Spinning Facility" 
                             class="rounded-3xl shadow-xl w-full md:w-4/5 object-cover">
                    </div>
                    <div class="w-full md:w-1/2 md:pl-12 text-left">
                        <h4 class="text-2xl font-bold text-orange-600 mb-2">First Spinning Facility</h4>
                        <p class="text-gray-700">Established in Shengze Town, laying foundation for modern textile production.</p>
                    </div>
                </div>
                <!-- Milestone 2 -->
                <div class="flex flex-col md:flex-row-reverse items-center md:items-start">
                    <div class="w-full md:w-1/2 flex justify-center md:justify-start mb-6 md:mb-0">
                        <img src="{{ asset('images/image2.jpg') }}" 
                             alt="Beam Dyeing" 
                             class="rounded-3xl shadow-xl w-full md:w-4/5 object-cover">
                    </div>
                    <div class="w-full md:w-1/2 md:pr-12 text-left">
                        <h4 class="text-2xl font-bold text-orange-600 mb-2">Beam Dyeing & Auto Drawing</h4>
                        <p class="text-gray-700">Introduced Staubli Safir S60 Auto Drawing & Leasing and Beam Dyeing technology to improve production efficiency.</p>
                    </div>
                </div>
                <!-- Milestone 3 -->
                <div class="flex flex-col md:flex-row items-center md:items-start">
                    <div class="w-full md:w-1/2 flex justify-center md:justify-end mb-6 md:mb-0">
                        <img src="{{ asset('images/image3.jpg') }}" 
                             alt="Quick Style Change Weaving" 
                             class="rounded-3xl shadow-xl w-full md:w-4/5 object-cover">
                    </div>
                    <div class="w-full md:w-1/2 md:pl-12 text-left">
                        <h4 class="text-2xl font-bold text-orange-600 mb-2">Quick Style Change (QSC)</h4>
                        <p class="text-gray-700">Implemented QSC in weaving and double vertical padder for finishing high-quality fabrics efficiently.</p>
                    </div>
                </div>
                <!-- Milestone 4 -->
                <div class="flex flex-col md:flex-row-reverse items-center md:items-start">
                    <div class="w-full md:w-1/2 flex justify-center md:justify-start mb-6 md:mb-0">
                        <img src="{{ asset('images/image4.jpg') }}" 
                             alt="Mercerizing" 
                             class="rounded-3xl shadow-xl w-full md:w-4/5 object-cover">
                    </div>
                    <div class="w-full md:w-1/2 md:pr-12 text-left">
                        <h4 class="text-2xl font-bold text-orange-600 mb-2">Mercerizing & Stabilization</h4>
                        <p class="text-gray-700">Introduced special stabilization concept during mercerizing for premium quality fabrics.</p>
                    </div>
                </div>
                <!-- Milestone 5 -->
                <div class="flex flex-col md:flex-row items-center md:items-start">
                    <div class="w-full md:w-1/2 flex justify-center md:justify-end mb-6 md:mb-0">
                        <img src="{{ asset('images/image5.jpg') }}" 
                             alt="Eco Friendly Practice" 
                             class="rounded-3xl shadow-xl w-full md:w-4/5 object-cover">
                    </div>
                    <div class="w-full md:w-1/2 md:pl-12 text-left">
                        <h4 class="text-2xl font-bold text-orange-600 mb-2">Sustainability Initiatives</h4>
                        <p class="text-gray-700">Implemented eco-friendly practices such as boiler smoke exhaust injection into ETP to reduce carbon footprint and chemical use.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Technology / Production -->
<section class="py-20 bg-white">
    <div class="w-11/12 md:w-4/5 mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
        <div class="flex justify-center md:order-last">
            <img src="{{ asset('images/image6.jpg') }}" 
                 alt="Spinning Division" 
                 class="rounded-3xl shadow-xl w-full md:w-4/5 object-cover">
        </div>
        <div>
            <h2 class="text-4xl md:text-5xl font-bold text-orange-600 mb-6">Technology & Capacity</h2>
            <p class="text-gray-700 text-lg leading-relaxed mb-4 text-justify">
                Equipped with state-of-the-art machinery from Switzerland and Germany including Rieter, Zinser, Trutzschler, and Autocoro from Schlafhorst.
            </p>
            <p class="text-gray-600 text-lg leading-relaxed text-justify">
                Quality control uses the latest Uster apparatus (UT-6, AFIS, HVI) for yarn & cotton testing. Spinning capacity reaches <span class="font-bold text-orange-600">40 m.tons/day</span>.
            </p>
            <ul class="list-disc list-inside text-gray-700 text-lg mt-4 space-y-2">
                <li>Yarn types: Ne 7 to Ne 50, carded, combed, compact, twin, core, slub</li>
                <li>Special yarn: PC, CVC, NEPY, SIRO, Injected, Snow, Wrappy</li>
                <li>Yarn Dyeing Capacity: <span class="font-bold text-orange-600">15-40 M.Tons/day</span></li>
            </ul>
        </div>
    </div>
</section>

<!-- Weaving / Finishing -->
<section class="py-20 bg-orange-50">
    <div class="w-11/12 md:w-4/5 mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
        <div>
            <h2 class="text-4xl md:text-5xl font-bold text-orange-600 mb-6">Weaving & Finishing</h2>
            <p class="text-gray-700 text-lg leading-relaxed mb-4 text-justify">
                Weaving capacity: 3 million yards/month using Rapier, Air Jet, and Dobby looms, including double beams. Fabric types include 100% cotton, blends, and Spandex.
            </p>
            <p class="text-gray-600 text-lg leading-relaxed text-justify">
                Finishing lines produce 400 million yards annually, including 180 million for solids and 220 million for yarn-dyed fabrics.
            </p>
        </div>
        <div class="flex justify-center">
            <img src="{{ asset('images/image7.jpg') }}" 
                 alt="Weaving & Finishing" 
                 class="rounded-3xl shadow-xl w-full md:w-4/5 object-cover">
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-gradient-to-r from-orange-200 to-orange-300 text-center">
    <h3 class="text-4xl font-bold text-white mb-6">Partner with Us</h3>
    <p class="text-white text-lg mb-8">Let’s create sustainable and innovative textiles together.</p>
    <a href="{{ url('/#contact') }}"
       class="inline-block bg-white text-orange-600 px-10 py-4 font-semibold rounded-full shadow-lg hover:bg-gray-100 hover:scale-105 transform transition duration-300">
       Contact Us
    </a>
</section>

@endsection
