@extends('layouts.app')

@section('content')

<!-- Company Overview Section -->
<section class="py-20 bg-white">
    <div class="w-11/12 md:w-4/5 mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
            <!-- Left Side - Tall Image -->
            <div class="flex justify-center">
                <img src="{{ asset('images/image1.jpg') }}" 
                     alt="Shengcheng Textile Company Overview" 
                     class="rounded-3xl shadow-xl w-full lg:w-4/5 object-cover h-[600px]">
            </div>
            
            <!-- Right Side - Content -->
            <div class="space-y-5">
                <!-- Main Title -->
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold text-orange-600 mb-2">Company Overview</h2>
                    <p class="text-gray-700 text-base leading-relaxed text-justify">
                        Located in Shengze Town, Wujiang City – China's "Hometown of Silk" – Chengcheng Textile Co., Ltd has been blending traditional craftsmanship with modern innovation for over 20 years. We provide a full range of textile services from spinning, yarn dyeing, weaving, to finished fabrics, catering to export-oriented RMG industries worldwide.
                    </p>
                </div>

                <!-- Department Grid -->
                <div class="grid grid-cols-2 gap-6 pt-1">
                    <!-- Department 1 -->
                    <div class="text-center group cursor-pointer transform transition duration-300 hover:scale-105">
                        <div class="bg-orange-50 rounded-2xl p-5 shadow-md border border-orange-100 group-hover:shadow-lg group-hover:border-orange-300">
                            <div class="w-16 h-16 mx-auto mb-2 bg-gradient-to-br from-orange-400 to-orange-600 rounded-full flex items-center justify-center">
                                <span class="text-white font-bold text-sm">RP</span>
                            </div>
                            <h3 class="text-lg font-semibold text-gray-800 mb-1">Release Paper Dept.</h3>
                            <p class="text-gray-600 text-sm">High-quality release paper manufacturing</p>
                        </div>
                    </div>

                    <!-- Department 2 -->
                    <div class="text-center group cursor-pointer transform transition duration-300 hover:scale-105">
                        <div class="bg-orange-50 rounded-2xl p-5 shadow-md border border-orange-100 group-hover:shadow-lg group-hover:border-orange-300">
                            <div class="w-16 h-16 mx-auto mb-3 bg-gradient-to-br from-orange-400 to-orange-600 rounded-full flex items-center justify-center">
                                <span class="text-white font-bold text-sm">LB</span>
                            </div>
                            <h3 class="text-lg font-semibold text-gray-800 mb-1">Lamination Bonding Dept.</h3>
                            <p class="text-gray-600 text-sm">Advanced lamination and bonding technology</p>
                        </div>
                    </div>

                    <!-- Department 3 -->
                    <div class="text-center group cursor-pointer transform transition duration-300 hover:scale-105">
                        <div class="bg-orange-50 rounded-2xl p-5 shadow-md border border-orange-100 group-hover:shadow-lg group-hover:border-orange-300">
                            <div class="w-16 h-16 mx-auto mb-3 bg-gradient-to-br from-orange-400 to-orange-600 rounded-full flex items-center justify-center">
                                <span class="text-white font-bold text-sm">WD</span>
                            </div>
                            <h3 class="text-lg font-semibold text-gray-800 mb-1">Weaving Dept.</h3>
                            <p class="text-gray-600 text-sm">织造部 - Precision weaving operations</p>
                        </div>
                    </div>

                    <!-- Department 4 -->
                    <div class="text-center group cursor-pointer transform transition duration-300 hover:scale-105">
                        <div class="bg-orange-50 rounded-2xl p-5 shadow-md border border-orange-100 group-hover:shadow-lg group-hover:border-orange-300">
                            <div class="w-16 h-16 mx-auto mb-3 bg-gradient-to-br from-orange-400 to-orange-600 rounded-full flex items-center justify-center">
                                <span class="text-white font-bold text-sm">FR</span>
                            </div>
                            <h3 class="text-lg font-semibold text-gray-800 mb-1">Military Flame Retardant</h3>
                            <p class="text-gray-600 text-sm">专业军工阻燃漆层 - Specialized flame retardant coatings</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Main Products Section -->
<section class="py-16 bg-orange-50">
    <div class="w-11/12 md:w-4/5 mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Left Side - Content -->
            <div class="space-y-6">
                <!-- Section Number -->
                <div class="flex items-center mb-2">
                    <div class="ml-2">
                        <h2 class="text-3xl md:text-4xl font-bold text-orange-600">Main Products</h2>
                        <div class="w-20 h-1 bg-orange-500 mt-1"></div>
                    </div>
                </div>

                <!-- Products List -->
                <div class="space-y-3">
                    <!-- Product 1 -->
                    <div class="bg-white rounded-2xl p-5 shadow-md border border-orange-100 transform transition duration-300 hover:shadow-lg">
                        <h3 class="text-xl font-bold text-gray-800 mb-1 flex items-center">
                            <span class="w-8 h-8 bg-orange-500 text-white rounded-full flex items-center justify-center text-sm mr-3">1</span>
                            High-Quality Textile Fabrics
                        </h3>
                        <p class="text-gray-600">Premium cotton, blends, and specialized fabrics for various applications including military and industrial use.</p>
                    </div>

                    <!-- Product 2 -->
                    <div class="bg-white rounded-2xl p-5 shadow-md border border-orange-100 transform transition duration-300 hover:shadow-lg">
                        <h3 class="text-xl font-bold text-gray-800 mb-1 flex items-center">
                            <span class="w-8 h-8 bg-orange-500 text-white rounded-full flex items-center justify-center text-sm mr-3">2</span>
                            Flame Retardant Materials
                        </h3>
                        <p class="text-gray-600">Specialized military-grade flame retardant coatings and fabrics meeting international safety standards.</p>
                    </div>

                    <!-- Product 3 -->
                    <div class="bg-white rounded-2xl p-5 shadow-md border border-orange-100 transform transition duration-300 hover:shadow-lg">
                        <h3 class="text-xl font-bold text-gray-800 mb-1 flex items-center">
                            <span class="w-8 h-8 bg-orange-500 text-white rounded-full flex items-center justify-center text-sm mr-3">3</span>
                            Laminated & Bonded Textiles
                        </h3>
                        <p class="text-gray-600">Advanced laminated and bonded fabrics for technical and specialized applications.</p>
                    </div>

                    <!-- Product 4 -->
                    <div class="bg-white rounded-2xl p-5 shadow-md border border-orange-100 transform transition duration-300 hover:shadow-lg">
                        <h3 class="text-xl font-bold text-gray-800 mb-1 flex items-center">
                            <span class="w-8 h-8 bg-orange-500 text-white rounded-full flex items-center justify-center text-sm mr-3">4</span>
                            Release Paper Products
                        </h3>
                        <p class="text-gray-600">High-quality release paper materials for various industrial and textile applications.</p>
                    </div>
                </div>
            </div>

            <!-- Right Side - Image -->
            <div class="flex justify-center">
                <div class="relative">
                    <img src="{{ asset('images/banner3.jpeg') }}" 
                         alt="Shengcheng Textile Main Products" 
                         class="rounded-3xl shadow-xl w-full object-cover h-[500px]">
                    <!-- Floating Stats -->
                    <div class="absolute -bottom-6 -right-6 bg-white rounded-2xl shadow-2xl p-6 border border-orange-200">
                        <div class="text-center">
                            <div class="text-3xl font-bold text-orange-600">500+</div>
                            <div class="text-gray-600 text-sm font-medium">Product Varieties</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Historical Evolution and Vision -->
<section class="py-16 bg-white" aria-labelledby="historical-evolution-title">
    <div class="w-11/12 md:w-4/5 mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <!-- LEFT: stylized triangle image (SVG) -->
            <div class="flex justify-center">
                <!-- SVG created to resemble the three rounded bars triangle from your reference -->
                <svg viewBox="0 0 420 380" class="w-full max-w-md" role="img" aria-label="Stylized timeline icon">
                    <defs>
                        <linearGradient id="g1" x1="0" x2="1">
                            <stop offset="0" stop-color="#2ea37d"/>
                            <stop offset="1" stop-color="#238b62"/>
                        </linearGradient>
                        <linearGradient id="g2" x1="0" x2="1">
                            <stop offset="0" stop-color="#7fa133"/>
                            <stop offset="1" stop-color="#6a8a2f"/>
                        </linearGradient>
                        <linearGradient id="g3" x1="0" x2="1">
                            <stop offset="0" stop-color="#b6d59a"/>
                            <stop offset="1" stop-color="#dceec9"/>
                        </linearGradient>
                        <filter id="soft" x="-50%" y="-50%" width="200%" height="200%">
                            <feDropShadow dx="0" dy="6" stdDeviation="12" flood-color="#000" flood-opacity="0.08"/>
                        </filter>
                    </defs>

                    <!-- light triangular background -->
                    <polygon points="70,320 350,320 210,30" fill="#f3f6f1" />

                    <!-- left bar (green) -->
                    <g filter="url(#soft)">
                        <rect x="50" y="210" rx="30" ry="30" width="80" height="180"
                              transform="rotate(-36 90 300)"
                              fill="url(#g1)" />
                        <!-- left icon -->
                        <g transform="translate(56,170) rotate(-36)">
                            <rect x="0" y="0" width="56" height="56" rx="10" fill="#ffffff" opacity="0"/>
                            <g transform="translate(9,8)" fill="#ffffff" opacity="0.95">
                                <circle cx="9" cy="9" r="3"/>
                                <rect x="0" y="28" width="18" height="6" rx="2"/>
                            </g>
                        </g>
                    </g>

                    <!-- bottom bar (olive) -->
                    <g filter="url(#soft)">
                        <rect x="120" y="280" rx="30" ry="30" width="220" height="60"
                              transform="rotate(0 230 310)"
                              fill="url(#g2)" />
                        <!-- calendar icon on bottom bar -->
                        <g transform="translate(280,288)">
                            <rect x="0" y="0" width="36" height="24" rx="3" fill="#ffffff" opacity="0"/>
                            <g transform="translate(4,2)" fill="#ffffff" opacity="0.95">
                                <rect x="0" y="2" width="28" height="4" rx="1"/>
                                <rect x="0" y="10" width="6" height="6" rx="1"/>
                                <rect x="9" y="10" width="6" height="6" rx="1"/>
                                <rect x="18" y="10" width="6" height="6" rx="1"/>
                            </g>
                        </g>
                    </g>

                    <!-- right bar (moss) -->
                    <g filter="url(#soft)">
                        <rect x="260" y="90" rx="30" ry="30" width="80" height="180"
                              transform="rotate(36 300 180)"
                              fill="url(#g2)" />
                        <!-- stats icon on right bar -->
                        <g transform="translate(266,50) rotate(36)">
                            <rect x="0" y="0" width="56" height="56" rx="10" fill="#ffffff" opacity="0"/>
                            <g transform="translate(9,8)" fill="#ffffff" opacity="0.95">
                                <rect x="0" y="10" width="6" height="18" rx="1"/>
                                <rect x="8" y="6" width="6" height="22" rx="1"/>
                                <rect x="16" y="2" width="6" height="26" rx="1"/>
                            </g>
                        </g>
                    </g>
                </svg>
            </div>

            <!-- RIGHT: Title & structured bullets (text) -->
            <div>
                <h2 id="historical-evolution-title" class="text-3xl md:text-4xl font-extrabold text-gray-800 mb-6">
                    Historical Evolution and Vision
                </h2>

                <!-- Subsection: Founding and Growth -->
                <div class="mb-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Founding and Growth</h3>

                    <ul class="space-y-3 text-gray-700">
                        <li class="flex items-start gap-3">
                            <svg class="w-4 h-4 mt-1 text-green-600 flex-shrink-0" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <rect x="6" y="2" width="4" height="12" rx="1.2" fill="#84b36a"/>
                                <rect x="2" y="6" width="4" height="8" rx="1.2" fill="#6aa64e"/>
                                <rect x="10" y="8" width="4" height="6" rx="1.2" fill="#5a8a33"/>
                            </svg>
                            <div>
                                Over decades, we expanded our product range and became a recognized textile firm serving both domestic and international markets.
                            </div>
                        </li>

                        <li class="flex items-start gap-3">
                            <svg class="w-3 h-3 mt-2 text-amber-400 flex-shrink-0" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 0 L5.2 2.6 L8 3 L5.6 4.4 L6.2 7 L4 5.6 L1.8 7 L2.4 4.4 L0 3 L2.8 2.6 Z" fill="#c4d29a"/>
                            </svg>
                            <div>
                                Continuous investment in machinery increased capacity and improved product quality significantly.
                            </div>
                        </li>
                    </ul>
                </div>

                <!-- Subsection: Core Values and Mission -->
                <div class="mb-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Core Values and Mission</h3>

                    <ul class="space-y-3 text-gray-700">
                        <li class="flex items-start gap-3">
                            <svg class="w-3 h-3 mt-2 flex-shrink-0" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="4" cy="4" r="4" fill="#dbeed0"/>
                                <path d="M2.8 4.1 L3.6 4.9 L5.6 2.9" stroke="#4a8a41" stroke-width="0.6" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <div>
                                Sustainability is a top priority — we implement eco-friendly practices across our production to minimize environmental impact.
                            </div>
                        </li>

                        <li class="flex items-start gap-3">
                            <svg class="w-3 h-3 mt-2 flex-shrink-0" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="0" y="0" width="8" height="8" rx="1.5" fill="#f3f4f1"/>
                                <path d="M2 4h4" stroke="#8a6b2f" stroke-width="0.6" stroke-linecap="round"/>
                                <path d="M2 2h4" stroke="#8a6b2f" stroke-width="0.6" stroke-linecap="round"/>
                            </svg>
                            <div>
                                We are committed to customer satisfaction — timely delivery and consistent quality are central to our mission.
                            </div>
                        </li>
                    </ul>
                </div>

                <!-- Subsection: Corporate Culture and Team -->
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Corporate Culture and Team</h3>

                    <ul class="space-y-3 text-gray-700">
                        <li class="flex items-start gap-3">
                            <svg class="w-3 h-3 mt-2 flex-shrink-0" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 0 L5 2 L7 2.8 L5.6 4.2 L6 6 L4 5 L2 6 L2.4 4.2 L1 2.8 L3 2 Z" fill="#dfeee0"/>
                            </svg>
                            <div>
                                We foster innovation and teamwork, with training and career development programs that support employee growth.
                            </div>
                        </li>

                        <li class="flex items-start gap-3">
                            <svg class="w-3 h-3 mt-2 flex-shrink-0" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="0" y="0" width="8" height="8" rx="1.2" fill="#f7faf6"/>
                                <path d="M2 5 L3.2 3 L4.4 5 L5.6 2" stroke="#6a8a2f" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <div>
                                Our diverse team includes experts in design, production and quality control dedicated to delivering the best products for clients.
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Existing History / Milestones Timeline Section -->
<section class="py-20 bg-white">
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
                <!-- Continue with existing milestones... -->
            </div>
        </div>
    </div>
</section>

<!-- Continue with your existing sections... -->
<!-- Technology / Production -->
<section class="py-20 bg-orange-50">
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
<section class="py-20 bg-white">
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
    <p class="text-white text-lg mb-8">Let's create sustainable and innovative textiles together.</p>
    <a href="{{ url('/#contact') }}"
       class="inline-block bg-white text-orange-600 px-10 py-4 font-semibold rounded-full shadow-lg hover:bg-gray-100 hover:scale-105 transform transition duration-300">
       Contact Us
    </a>
</section>

@endsection