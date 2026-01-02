@extends('layouts.app')

@section('title', 'Facility & Process')

@section('content')
    <div class="container mx-auto px-4 py-8">
        @if ((empty($images) || count($images) === 0) && (empty($videos) || count($videos) === 0))
            <p class="text-gray-600">No media found in Facility & Process.</p>
        @endif

        {{-- Videos (highlighted top section) --}}
        @if (!empty($videos) && count($videos) > 0)
            <div class="mb-8">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Videos</h2>
                <div class="space-y-6">
                    @foreach ($videos as $video)
                        <div class="mb-4">
                            <div
                                class="bg-gradient-to-r from-orange-50 to-white border-l-4 border-orange-500 rounded shadow overflow-hidden w-full max-w-md">
                                <button class="w-full open-media text-left" data-type="video" data-src="{{ $video['url'] }}"
                                    data-poster="{{ $video['poster'] ?? '' }}" aria-label="Play video">
                                    <div
                                        class="relative h-60 md:h-68 bg-gray-900 flex items-center justify-center bg-center bg-cover">
                                        @if (!empty($video['poster']))
                                            <span style="background-image: url('{{ $video['poster'] }}');"
                                                class="absolute inset-0 bg-center bg-cover" aria-hidden="true"></span>
                                        @endif
                                        <div class="relative z-10 flex items-center justify-center">
                                            <svg class="w-16 h-16 text-white opacity-95" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path d="M4 4l12 6-12 6V4z" />
                                            </svg>
                                        </div>
                                        <span
                                            class="absolute top-3 left-3 bg-orange-500 text-white text-xs font-semibold px-2 py-1 rounded">Video</span>
                                    </div>
                                </button>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

        {{-- Images grid --}}
        @if (!empty($images) && count($images) > 0)
            <h2 class="text-2xl font-semibold text-gray-800 mb-2">Images</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                @foreach ($images as $file)
                    <div class="bg-white rounded shadow overflow-hidden">
                        <button class="w-full h-full focus:outline-none open-media" data-type="image"
                            data-src="{{ $file['url'] }}" aria-label="Open image">
                            <img src="{{ $file['url'] }}" alt="{{ $file['name'] }}"
                                class="w-full h-48 object-cover transform hover:scale-105 transition-transform duration-300">
                        </button>
                        <div class="p-3 text-sm text-gray-700 truncate">{{ $file['name'] }}</div>
                    </div>
                @endforeach
            </div>
        @endif

        <!-- Modal -->
        <div id="media-modal" class="fixed inset-0 bg-black bg-opacity-70 hidden items-center justify-center z-50">
            <div class="max-w-4xl w-full mx-4">
                <div class="bg-white rounded overflow-hidden relative">
                    <button id="modal-close"
                        class="absolute top-3 right-3 z-50 text-gray-700 bg-white rounded-full p-2 hover:bg-gray-100">✕</button>
                    <div id="modal-content" class="w-full bg-black flex items-center justify-center"
                        style="min-height:320px;"></div>
                </div>
            </div>
        </div>
        
    <!-- Process of Weaving Flowchart -->
    <section class="flex flex-col items-center py-6 sm:py-8 md:py-12 bg-white">
        <h2
            class="text-lg sm:text-xl md:text-2xl font-bold text-orange-600 mb-4 sm:mb-6 uppercase tracking-wide text-left w-full">
            Process of Weaving
            <span class="block text-xs sm:text-sm font-normal text-gray-700">(As our woven fabrication)</span>
        </h2>

        <div class="w-full overflow-x-auto pb-4 sm:pb-0">
            <div class="py-4 bg-orange-50 grid grid-cols-7 grid-rows-5 gap-x-7 gap-y-1 mx-auto relative w-max min-w-full">
                <!-- Horizontal arrows... -->
                <div class="absolute left-[12.5%] top-1/2 transform -translate-y-1/2 z-0">
                    <svg class="w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 text-orange-500" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M15 10 L5 5 L5 15 Z" />
                    </svg>
                </div>
                <div class="absolute left-[26.5%] top-1/2 transform -translate-y-1/2 z-0">
                    <svg class="w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 text-orange-500" fill="currentColor"
                        viewBox="0 0 20 20">
                        <path d="M15 10 L5 5 L5 15 Z" />
                    </svg>
                </div>
                <div class="absolute left-[41.5%] top-1/2 transform -translate-y-1/2 z-0">
                    <svg class="w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 text-orange-500" fill="currentColor"
                        viewBox="0 0 20 20">
                        <path d="M15 10 L5 5 L5 15 Z" />
                    </svg>
                </div>
                <div class="absolute left-[57%] top-1/2 transform -translate-y-1/2 z-0">
                    <svg class="w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 text-orange-500" fill="currentColor"
                        viewBox="0 0 20 20">
                        <path d="M15 10 L5 5 L5 15 Z" />
                    </svg>
                </div>
                <div class="absolute left-[70.5%] top-1/2 transform -translate-y-1/2 z-0">
                    <svg class="w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 text-orange-500" fill="currentColor"
                        viewBox="0 0 20 20">
                        <path d="M15 10 L5 5 L5 15 Z" />
                    </svg>
                </div>

                <!-- Vertical arrows... -->
                <div class="absolute left-1/2 top-[77%] -translate-x-1/2 z-0">
                    <svg class="w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 text-orange-500" fill="currentColor"
                        viewBox="0 0 20 20">
                        <path d="M10 3 L5 12 L15 12 Z" />
                    </svg>
                </div>
                <div class="absolute left-1/2 top-[58%] -translate-x-1/2 z-0">
                    <svg class="w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 text-orange-500" fill="currentColor"
                        viewBox="0 0 20 20">
                        <path d="M10 3 L5 12 L15 12 Z" />
                    </svg>
                </div>
                <div class="absolute left-1/2 top-[19%] -translate-x-1/2 z-0">
                    <svg class="w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 text-orange-500 rotate-180" fill="currentColor"
                        viewBox="0 0 20 20">
                        <path d="M10 3 L5 12 L15 12 Z" />
                    </svg>
                </div>
                <div class="absolute left-1/2 top-[37.5%] -translate-x-1/2 z-0">
                    <svg class="w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 text-orange-500 rotate-180" fill="currentColor"
                        viewBox="0 0 20 20">
                        <path d="M10 3 L5 12 L15 12 Z" />
                    </svg>
                </div>
                <div class="absolute left-1/2 top-[24%] -translate-x-1/2 z-0">
                    <svg class="w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 text-orange-500 rotate-180" fill="currentColor"
                        viewBox="0 0 20 20">
                        <path d="M10 3 L5 12 L15 12 Z" />
                    </svg>
                </div>

                <!-- Boxes... -->
                <div class="col-start-4 row-start-1 flex items-center justify-center z-10">
                    <div
                        class="bg-orange-50 border-2 border-orange-200 text-orange-700 font-bold rounded-xl shadow-lg px-4 py-3 sm:px-5 sm:py-3 md:px-6 md:py-3 text-sm sm:text-base md:text-lg">
                        CIRE
                    </div>
                </div>
                <div class="col-start-4 row-start-2 flex items-center justify-center z-10">
                    <div
                        class="bg-orange-50 border-2 border-orange-200 text-orange-700 font-bold rounded-xl shadow-lg px-4 py-3 sm:px-5 sm:py-3 md:px-6 md:py-3 text-sm sm:text-base md:text-lg">
                        COATING
                    </div>
                </div>

                <div class="col-start-1 row-start-3 flex items-center justify-center z-10">
                    <div
                        class="flex flex-col justify-center items-center bg-orange-50 border-2 border-orange-200 text-orange-700 font-bold rounded-xl shadow-lg px-4 py-3 sm:px-5 sm:py-3 md:px-6 md:py-3 text-sm sm:text-base md:text-lg">
                        <span class="font-bold">YARN</span>
                        <span class="text-xs sm:text-sm font-normal">PREPARATION</span>
                    </div>
                </div>
                <div class="col-start-2 row-start-3 flex items-center justify-center z-10">
                    <div
                        class="flex flex-col justify-center items-center bg-orange-50 border-2 border-orange-200 text-orange-700 font-bold rounded-xl shadow-lg px-4 py-3 sm:px-5 sm:py-3 md:px-6 md:py-3 text-sm sm:text-base md:text-lg">
                        <span class="font-bold">WEAVING</span>
                        <span class="text-xs sm:text-sm font-normal">GREY</span>
                    </div>
                </div>
                <div class="col-start-3 row-start-3 flex items-center justify-center z-10">
                    <div
                        class="flex flex-col justify-center items-center bg-orange-50 border-2 border-orange-200 text-orange-700 font-bold rounded-xl shadow-lg px-4 py-3 sm:px-5 sm:py-3 md:px-6 md:py-3 text-sm sm:text-base md:text-lg">
                        <span class="font-bold">INSPECTION</span>
                        <span class="text-xs sm:text-sm font-normal">&</span>
                        <span class="text-xs sm:text-sm font-normal">DYEING</span>
                    </div>
                </div>

                <div class="col-start-4 row-start-3 flex items-center justify-center z-20">
                    <div
                        class="bg-orange-50 border-2 border-orange-200 text-orange-700 font-bold rounded-xl shadow-xl px-4 py-3 sm:px-5 sm:py-3 md:px-6 md:py-3 text-sm sm:text-base md:text-lg">
                        LAMINATION
                    </div>
                </div>

                <div class="col-start-5 row-start-3 flex items-center justify-center z-10">
                    <div
                        class="flex flex-col justify-center items-center bg-orange-50 border-2 border-orange-200 text-orange-700 font-bold rounded-xl shadow-lg px-4 py-3 sm:px-5 sm:py-3 md:px-6 md:py-3 text-sm sm:text-base md:text-lg">
                        <span class="font-bold">FINAL</span>
                        <span class="text-xs sm:text-sm font-normal">INSPECTION</span>
                    </div>
                </div>
                <div class="col-start-6 row-start-3 flex items-center justify-center z-10">
                    <div
                        class="bg-orange-50 border-2 border-orange-200 text-orange-700 font-bold rounded-xl shadow-lg px-4 py-3 sm:px-5 sm:py-3 md:px-6 md:py-3 text-sm sm:text-base md:text-lg">
                        SHIPMENT
                    </div>
                </div>

                <div class="col-start-4 row-start-4 flex items-center justify-center z-10">
                    <div
                        class="bg-orange-50 border-2 border-orange-200 text-orange-700 font-bold rounded-xl shadow-lg px-4 py-3 sm:px-5 sm:py-3 md:px-6 md:py-3 text-sm sm:text-base md:text-lg">
                        BONDING
                    </div>
                </div>
                <div class="col-start-4 row-start-5 flex items-center justify-center z-10">
                    <div
                        class="bg-orange-50 border-2 border-orange-200 text-orange-700 font-bold rounded-xl shadow-lg px-4 py-3 sm:px-5 sm:py-3 md:px-6 md:py-3 text-sm sm:text-base md:text-lg">
                        PRINTING
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full mt-6 sm:mt-8">
            <p class="text-base text-justify sm:text-lg md:text-xl text-left">
                <strong>Our weaving process begins with Weaving</strong>, where we convert yarn into high-quality woven
                fabric using controlled production techniques. At this stage, we ensure fabric construction, strength, and
                consistency according to the intended end use. Our in-house weaving capability allows us to maintain full
                control over fabric structure and performance.<br><br>
                <strong>Once weaving is completed, the fabric moves to the Dyeing stage.</strong> We carry out dyeing under
                carefully monitored conditions to achieve accurate shades, uniform color penetration, and excellent color
                fastness. Our dyeing process is designed to meet buyer specifications and international quality
                standards.<br><br>
                <strong>Depending on product requirements, the dyed fabric then undergoes a series of value-added finishing
                    processes, including Cire, Coating, Lamination, Bonding, and Printing.</strong><br>
                <strong>Through Cire</strong>, we enhance fabric surface appearance and smoothness.<br>
                <strong>Coating</strong> allows us to improve functional properties such as water resistance or
                durability.<br>
                <strong>Lamination</strong> adds technical layers to meet performance needs.<br>
                <strong>Bonding</strong> strengthens fabric structure and combines multiple layers effectively.<br>
                <strong>Printing</strong> enables us to deliver customized designs and patterns as per customer
                demand.<br><br>
                These processes reflect our versatility and technical strength in handling a wide range of woven fabric
                finishes under one roof.<br><br>
                <strong>After finishing, every fabric passes through a detailed Inspection process.</strong> Our quality
                control team checks fabric appearance, measurements, finishing quality, and overall compliance to ensure
                only approved fabrics move forward.<br><br>
                <strong>Finally, the inspected fabric is prepared for Shipment</strong>, where we ensure proper packing,
                labeling, and documentation to guarantee safe delivery and customer satisfaction.
            </p>
        </div>

        <div class="w-full my-6 sm:my-8 md:my-12">
            <h2
                class="text-lg sm:text-xl md:text-2xl font-bold text-orange-600 mb-4 sm:mb-6 uppercase tracking-wide text-left w-full">
                Process of Knitting
            </h2>

            <!-- Fixed knitting flowchart -->
            <div class="w-full overflow-x-auto pb-4 sm:pb-0">
                <div
                    class="pt-8 pb-4 bg-orange-50 grid grid-cols-7 grid-rows-4 gap-x-4 md:gap-x-5 gap-y-7 md:gap-y-9 mx-auto relative w-max min-w-full">
                    <!-- Horizontal Sequential Flow Arrows -->
                    <div class="absolute left-[13%] top-[64%] transform -translate-y-1/2 z-0">
                        <svg class="w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 text-orange-500" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path d="M15 10 L5 5 L5 15 Z" />
                        </svg>
                    </div>
                    <div class="absolute left-[27%] top-[64%] transform -translate-y-1/2 z-0">
                        <svg class="w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 text-orange-500" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path d="M15 10 L5 5 L5 15 Z" />
                        </svg>
                    </div>
                    <div class="absolute left-[41.5%] top-[64%] transform -translate-y-1/2 z-0">
                        <svg class="w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 text-orange-500" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path d="M15 10 L5 5 L5 15 Z" />
                        </svg>
                    </div>
                    <div class="absolute left-[57%] top-[64%] transform -translate-y-1/2 z-0">
                        <svg class="w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 text-orange-500" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path d="M15 10 L5 5 L5 15 Z" />
                        </svg>
                    </div>
                    <div class="absolute left-[70.5%] top-[64%] transform -translate-y-1/2 z-0">
                        <svg class="w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 text-orange-500" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path d="M15 10 L5 5 L5 15 Z" />
                        </svg>
                    </div>

                    <!-- Vertical Sequential Flow Arrows -->
                    <div class="absolute left-1/2 top-[25.5%] transform -translate-x-1/2 z-0">
                        <svg class="w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 text-orange-500" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path d="M10 3 L5 12 L15 12 Z" />
                        </svg>
                    </div>
                    <div class="absolute left-1/2 top-1/2 transform -translate-x-1/2 z-0">
                        <svg class="w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 text-orange-500" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path d="M10 3 L5 12 L15 12 Z" />
                        </svg>
                    </div>
                    <div class="absolute left-1/2 top-[75%] transform -translate-x-1/2 z-0">
                        <svg class="w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 text-orange-500" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path d="M10 3 L5 12 L15 12 Z" />
                        </svg>
                    </div>

                    <!-- Top vertical blocks with smaller text -->
                    <div class="col-start-4 row-start-1 flex items-center justify-center z-10">
                        <div
                            class="bg-orange-50 border-2 border-orange-200 text-orange-700 font-bold rounded-xl shadow-lg px-3 py-2 sm:px-4 sm:py-3 md:px-5 md:py-3 text-xs sm:text-sm md:text-base text-center">
                            <span class="font-bold">HYDRO</span>
                            <span class="block text-xs sm:text-sm font-normal">EXTRACTION</span>
                            <span class="block text-xs font-normal">/ DE-WATERING</span>
                        </div>
                    </div>
                    <div class="col-start-4 row-start-2 flex items-center justify-center z-10">
                        <div
                            class="bg-orange-50 border-2 border-orange-200 text-orange-700 font-bold rounded-xl shadow-lg px-3 py-2 sm:px-4 sm:py-3 md:px-5 md:py-3 text-xs sm:text-sm md:text-base text-center">
                            <span class="font-bold">STENTER</span>
                            <span class="block text-xs sm:text-sm font-normal">/ HEAT SETTING</span>
                        </div>
                    </div>

                    <!-- Horizontal blocks -->
                    <div class="col-start-1 row-start-3 flex items-center justify-center z-10">
                        <div
                            class="flex flex-col justify-center items-center bg-orange-50 border-2 border-orange-200 text-orange-700 font-bold rounded-xl shadow-lg px-3 py-2 sm:px-4 sm:py-3 md:px-5 md:py-3 text-xs sm:text-sm md:text-base text-center">
                            <span class="font-bold">YARN</span>
                            <span class="text-xs font-normal">PREPARATION</span>
                        </div>
                    </div>
                    <div class="col-start-2 row-start-3 flex items-center justify-center z-10">
                        <div
                            class="flex flex-col justify-center items-center bg-orange-50 border-2 border-orange-200 text-orange-700 font-bold rounded-xl shadow-lg px-3 py-2 sm:px-4 sm:py-3 md:px-5 md:py-3 text-xs sm:text-sm md:text-base text-center">
                            <span class="font-bold">KNITTING</span>
                            <span class="text-xs font-normal">GREY</span>
                        </div>
                    </div>
                    <div class="col-start-3 row-start-3 flex items-center justify-center z-10">
                        <div
                            class="flex flex-col justify-center items-center bg-orange-50 border-2 border-orange-200 text-orange-700 font-bold rounded-xl shadow-lg px-3 py-2 sm:px-4 sm:py-3 md:px-5 md:py-3 text-xs sm:text-sm md:text-base text-center">
                            <span class="font-bold">INSPECTION</span>
                            <span class="text-xs font-normal">& DYEING</span>
                        </div>
                    </div>

                    <!-- Center block -->
                    <div class="col-start-4 row-start-3 flex items-center justify-center z-20">
                        <div
                            class="bg-orange-50 border-2 border-orange-200 text-orange-700 font-bold rounded-xl shadow-xl px-3 py-2 sm:px-4 sm:py-3 md:px-5 md:py-3 text-xs sm:text-sm md:text-base text-center">
                            <span class="font-bold">COMPACTING</span>
                            <span class="block text-xs font-normal">/ PRE-SHRINKING</span>
                        </div>
                    </div>

                    <div class="col-start-5 row-start-3 flex items-center justify-center z-10">
                        <div
                            class="flex flex-col justify-center items-center bg-orange-50 border-2 border-orange-200 text-orange-700 font-bold rounded-xl shadow-lg px-3 py-2 sm:px-4 sm:py-3 md:px-5 md:py-3 text-xs sm:text-sm md:text-base text-center">
                            <span class="font-bold">FINAL</span>
                            <span class="text-xs font-normal">INSPECTION</span>
                        </div>
                    </div>
                    <div class="col-start-6 row-start-3 flex items-center justify-center z-10">
                        <div
                            class="bg-orange-50 border-2 border-orange-200 text-orange-700 font-bold rounded-xl shadow-lg px-3 py-2 sm:px-4 sm:py-3 md:px-5 md:py-3 text-xs sm:text-sm md:text-base text-center">
                            <span class="font-bold">SHIPMENT</span>
                        </div>
                    </div>

                    <!-- Bottom block -->
                    <div class="col-start-4 row-start-4 flex items-center justify-center z-10">
                        <div
                            class="bg-orange-50 border-2 border-orange-200 text-orange-700 font-bold rounded-xl shadow-lg px-3 py-2 sm:px-4 sm:py-3 md:px-5 md:py-3 text-xs sm:text-sm md:text-base text-center">
                            <span class="font-bold">FINISHING</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full mt-4 sm:mt-6">
                <p class="text-base text-justify sm:text-lg md:text-xl text-left">
                    <strong>Our knitting process begins with Yarn Preparation</strong>, where we carefully select and
                    prepare high-quality yarns to ensure smooth machine performance and consistent fabric quality. By
                    maintaining strict control at this initial stage, we ensure uniform strength, appearance, and
                    reliability throughout production.<br><br>
                    <strong>During Knitting (Grey Fabric Production)</strong>, we use modern knitting machines to convert
                    yarn into grey fabric according to specific design and technical requirements. Our focus at this stage
                    is on achieving precise fabric structure, elasticity, and GSM consistency.<br><br>
                    <strong>Every roll of grey fabric goes through Grey Fabric Inspection</strong>, where our quality team
                    checks for knitting defects, holes, oil stains, and construction irregularities. Early-stage inspection
                    allows us to minimize defects and maintain high production efficiency.<br><br>
                    <strong>We then carry out Dyeing</strong> using controlled and standardized dyeing procedures to achieve
                    accurate shades, uniform color distribution, and excellent color fastness. Our dyeing process is closely
                    monitored to meet both buyer requirements and international quality standards.<br><br>
                    <strong>After dyeing, we perform Hydro Extraction / Dewatering</strong> to remove excess water
                    efficiently, followed by Drying under controlled conditions to stabilize the fabric before heat
                    treatment.<br><br>
                    <strong>The fabric then passes through Stenter / Heat Setting</strong>, where we apply precise heat
                    control to stabilize fabric structure, improve dimensional stability, and reduce unwanted shrinkage.
                    Additional Drying ensures proper moisture balance before final setting.<br><br>
                    <strong>At the Stenter / Heat Setting (Width & GSM Setting) stage</strong>, we accurately control fabric
                    width and GSM as per customer specifications. This step reflects our technical capability and commitment
                    to consistency.<br><br>
                    <strong>We further enhance fabric performance through Compacting / Pre-Shrinking</strong>, which allows
                    us to control shrinkage, improve softness, and ensure long-term dimensional stability.<br><br>
                    <strong>Our Finishing process</strong> adds the final touch by improving fabric hand feel, appearance,
                    and performance characteristics according to end-use requirements.<br><br>
                    <strong>Finally, every fabric undergoes Final Inspection</strong>, where we ensure quality,
                    measurements, and overall compliance before approval for packing and delivery.
                </p>
            </div>
        </div>
    </section>
    </div>

    <script>
        function openMedia(type, src, poster) {
            const container = document.getElementById('modal-content');
            container.innerHTML = '';

            if (type === 'image') {
                const img = document.createElement('img');
                img.src = src;
                img.className = 'w-full h-auto max-h-[75vh] object-contain bg-black';
                container.appendChild(img);
            } else {
                const video = document.createElement('video');
                video.src = src;
                video.controls = true;
                video.autoplay = true;
                video.playsInline = true;
                video.className = 'w-full h-auto max-h-[75vh] bg-black';
                try {
                    video.removeAttribute('poster');
                } catch (e) {}

                video.addEventListener('loadedmetadata', function() {
                    try {
                        video.controls = true;
                    } catch (e) {}
                });

                container.appendChild(video);

                setTimeout(() => {
                    try {
                        const playPromise = video.play();
                        if (playPromise && typeof playPromise.then === 'function') {
                            playPromise.catch(() => {
                                /* autoplay blocked; user can press play */ });
                        }
                    } catch (e) {
                        // ignore
                    }
                }, 50);
            }

            const modal = document.getElementById('media-modal');
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        }

        function closeMedia() {
            const modal = document.getElementById('media-modal');
            const container = document.getElementById('modal-content');
            // If there's a video playing, pause and remove source to stop playback
            const vid = container.querySelector('video');
            if (vid) {
                try {
                    vid.pause();
                    vid.removeAttribute('src');
                    vid.load();
                } catch (e) {
                    // ignore
                }
            }
            container.innerHTML = '';
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        }

        // Delegate click handlers to handle dynamic content reliably
        document.addEventListener('click', function(e) {
            const open = e.target.closest('.open-media');
            if (open) {
                const type = open.getAttribute('data-type');
                const src = open.getAttribute('data-src');
                const poster = open.getAttribute('data-poster');
                openMedia(type, src, poster);
                return;
            }

            // close button may contain nested elements (svg/text); use closest()
            if (e.target.closest('#modal-close')) {
                closeMedia();
                return;
            }
        });

        // Close modal on outside click
        document.getElementById('media-modal').addEventListener('click', (e) => {
            if (e.target.id === 'media-modal') {
                closeMedia();
            }
        });
        const modalCloseBtn = document.getElementById('modal-close');
        if (modalCloseBtn) {
            modalCloseBtn.addEventListener('click', (ev) => {
                ev.preventDefault();
                ev.stopPropagation();
                closeMedia();
            });
        }
    </script>
@endsection
