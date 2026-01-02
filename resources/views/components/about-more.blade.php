@extends('layouts.app')


@section('content')
    <!-- Process of Weaving Flowchart -->
    <section class="w-11/12 md:w-4/5 mx-auto flex flex-col items-center py-8 md:py-12 bg-white">
        <h2 class="text-xl md:text-2xl font-bold text-orange-600 mb-6 uppercase tracking-wide text-left w-full">Process of
            Weaving <span class="block text-sm font-normal text-gray-700">(As our woven fabrication)</span></h2>
        <div class="w-full flex flex-col items-center">
            <!-- Cross Grid Layout -->
            <div class="grid grid-cols-7 grid-rows-5 gap-4 md:gap-6 min-h-[350px] min-w-[650px] mx-auto relative">

                <!-- Vertical connecting line (only between boxes) -->
                <div class="absolute left-1/2 top-[20%] bottom-[20%] w-1 transform -translate-x-1/2 z-0">
                    <div class="h-full w-full bg-orange-500"></div>
                    <!-- Arrow markers -->
                    <div class="absolute top-1/3 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                        <div
                            class="w-0 h-0 border-l-8 border-r-8 border-t-8 border-l-transparent border-r-transparent border-t-orange-500">
                        </div>
                    </div>
                    <div class="absolute top-2/3 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                        <div
                            class="w-0 h-0 border-l-8 border-r-8 border-t-8 border-l-transparent border-r-transparent border-t-orange-500">
                        </div>
                    </div>
                </div>

                <!-- Horizontal connecting line (only between left side and center) -->
                <div class="absolute left-[14%] right-[50%] top-1/2 h-1 bg-orange-500 z-0 transform -translate-y-1/2">
                    <div class="absolute right-0 top-1/2 transform translate-y-1/2">
                        <div
                            class="w-0 h-0 border-t-8 border-b-8 border-r-8 border-t-transparent border-b-transparent border-r-orange-500">
                        </div>
                    </div>
                </div>

                <!-- Horizontal connecting line from LAMINATION to FINAL INSPECTION -->
                <div class="absolute left-[50%] right-[42%] top-1/2 h-1 bg-orange-500 z-0 transform -translate-y-1/2">
                    <div class="absolute left-0 top-1/2 transform translate-y-1/2">
                        <div
                            class="w-0 h-0 border-t-8 border-b-8 border-l-8 border-t-transparent border-b-transparent border-l-orange-500">
                        </div>
                    </div>
                </div>

                <!-- Horizontal connecting line from FINAL INSPECTION to SHIPMENT -->
                <div class="absolute left-[57%] right-[14%] top-1/2 h-1 bg-orange-500 z-0 transform -translate-y-1/2">
                    <div class="absolute left-0 top-1/2 transform translate-y-1/2">
                        <div
                            class="w-0 h-0 border-t-8 border-b-8 border-l-8 border-t-transparent border-b-transparent border-l-orange-500">
                        </div>
                    </div>
                </div>

                <!-- Top vertical -->
                <div class="col-start-4 row-start-1 flex items-center justify-center z-10">
                    <div
                        class="bg-orange-50 border-2 border-orange-200 text-orange-700 font-bold rounded-xl shadow-lg px-6 py-3 text-base md:text-lg">
                        CIRE</div>
                </div>
                <div class="col-start-4 row-start-2 flex items-center justify-center z-10">
                    <div
                        class="bg-orange-50 border-2 border-orange-200 text-orange-700 font-bold rounded-xl shadow-lg px-6 py-3 text-base md:text-lg">
                        COATING</div>
                </div>
                <!-- Left to right -->
                <div class="col-start-1 row-start-3 flex items-center justify-center z-10">
                    <div
                        class="bg-orange-50 border-2 border-orange-200 text-orange-700 font-bold rounded-xl shadow-lg px-6 py-3 text-base md:text-lg">
                        <span class="font-bold">YARN</span><span class="text-sm font-normal">PREPARATION</span>
                    </div>
                </div>
                <div class="col-start-2 row-start-3 flex items-center justify-center z-10">
                    <div
                        class="bg-orange-50 border-2 border-orange-200 text-orange-700 font-bold rounded-xl shadow-lg px-6 py-3 text-base md:text-lg">
                        <span class="font-bold">WEAVING</span><span class="text-sm font-normal">GREY</span>
                    </div>
                </div>
                <div class="col-start-3 row-start-3 flex items-center justify-center z-10">
                    <div
                        class="bg-orange-50 border-2 border-orange-200 text-orange-700 font-bold rounded-xl shadow-lg px-6 py-3 text-base md:text-lg">
                        <span class="font-bold">INSPECTION</span><span class="text-sm font-normal">& DYEING</span>
                    </div>
                </div>
                <!-- Center intersection -->
                <div class="col-start-4 row-start-3 flex items-center justify-center z-20">
                    <div
                        class="bg-orange-50 border-2 border-orange-200 text-orange-700 font-bold rounded-xl shadow-lg px-6 py-3 text-base md:text-lg">
                        LAMINATION</div>
                </div>
                <div class="col-start-5 row-start-3 flex items-center justify-center z-10">
                    <div
                        class="bg-orange-50 border-2 border-orange-200 text-orange-700 font-bold rounded-xl shadow-lg px-6 py-3 text-base md:text-lg">
                        <span class="font-bold">FINAL</span><span class="text-sm font-normal">INSPECTION</span>
                    </div>
                </div>
                <div class="col-start-6 row-start-3 flex items-center justify-center z-10">
                    <div
                        class="bg-orange-50 border-2 border-orange-200 text-orange-700 font-bold rounded-xl shadow-lg px-6 py-3 text-base md:text-lg">
                        SHIPMENT</div>
                </div>
                <!-- Bottom vertical -->
                <div class="col-start-4 row-start-4 flex items-center justify-center z-10">
                    <div
                        class="bg-orange-50 border-2 border-orange-200 text-orange-700 font-bold rounded-xl shadow-lg px-6 py-3 text-base md:text-lg">
                        BONDING</div>
                </div>
                <div class="col-start-4 row-start-5 flex items-center justify-center z-10">
                    <div
                        class="bg-orange-50 border-2 border-orange-200 text-orange-700 font-bold rounded-xl shadow-lg px-6 py-3 text-base md:text-lg">
                        PRINTING</div>
                </div>
            </div>
        </div>
        <div class="w-full mt-8">
            <p class="text-gray-800 text-justify text-base md:text-lg text-left">
                Our weaving process begins with Weaving, where we convert yarn into high-quality woven fabric using
                controlled production techniques. At this stage, we ensure fabric construction, strength, and consistency
                according to the intended end use. Our in-house weaving capability allows us to maintain full control over
                fabric structure and performance. Once weaving is completed, the fabric moves to the Dyeing stage. We carry out dyeing under carefully
                monitored conditions to achieve accurate shades, uniform color penetration, and excellent color fastness.
                Our dyeing process is designed to meet buyer specifications and international quality standards.
                Depending on product requirements, the dyed fabric then undergoes a series of value-added finishing
                processes, including Cire, Coating, Lamination, Bonding, and
                Printing.
                Through Cire, we enhance fabric surface appearance and smoothness.
                Coating allows us to improve functional properties such as water resistance or durability.
                Lamination adds technical layers to meet performance needs.
                Bonding strengthens fabric structure and combines multiple layers effectively.
                Printing enables us to deliver customized designs and patterns as per customer demand.
                These processes reflect our versatility and technical strength in handling a wide range of woven fabric
                finishes under one roof.
                After finishing, every fabric passes through a detailed Inspection process. Our quality control team
                checks fabric appearance, measurements, finishing quality, and overall compliance to ensure only approved
                fabrics move forward.
                Finally, the inspected fabric is prepared for Shipment, where we ensure proper packing, labeling, and
                documentation to guarantee safe delivery and customer satisfaction.
            </p>
        </div>
        <!-- Knitting Process Flowchart -->
        <div class="w-fullFINISHING my-10">
            <h2 class="text-xl md:text-2xl font-bold text-orange-600 mb-6 uppercase tracking-wide text-left w-full">Process
                of Knitting</h2>
            <div class="w-full flex flex-col items-center">
                <div class="grid grid-cols-7 grid-rows-5 gap-4 md:gap-6 mx-auto relative">
                    <!-- Top vertical -->
                    <div class="col-start-4 row-start-1 flex items-center justify-center">
                        <div
                            class="bg-orange-50 border-2 border-orange-200 text-orange-700 font-bold rounded-xl shadow-lg px-6 py-3 text-base md:text-lg text-center">
                            HYDROEXTRACTION /DE-WATRING</div>
                    </div>
                    <div class="col-start-4 row-start-2 flex items-center justify-center">
                        <div
                            class="bg-orange-50 border-2 border-orange-200 text-orange-700 font-bold rounded-xl shadow-lg px-6 py-3 text-base md:text-lg text-center">
                            STENTER /HEAT SETTING</div>
                    </div>
                    <!-- Left to right -->
                    <div class="col-start-1 row-start-3 flex items-center justify-center">
                        <div
                            class="bg-orange-50 border-2 border-orange-200 text-orange-700 font-bold rounded-xl shadow-lg px-6 py-3 text-base md:text-lg text-center">
                            YARNPREPARATION</div>
                    </div>
                    <div class="col-start-2 row-start-3 flex items-center justify-center">
                        <div
                            class="bg-orange-50 border-2 border-orange-200 text-orange-700 font-bold rounded-xl shadow-lg px-6 py-3 text-base md:text-lg text-center">
                            KNITTINGGREY</div>
                    </div>
                    <div class="col-start-3 row-start-3 flex items-center justify-center">
                        <div
                            class="bg-orange-50 border-2 border-orange-200 text-orange-700 font-bold rounded-xl shadow-lg px-6 py-3 text-base md:text-lg text-center">
                            INSPECTION& DYEING</div>
                    </div>
                    <div class="col-start-4 row-start-3 flex items-center justify-center">
                        <div
                            class="bg-orange-50 border-2 border-orange-200 text-orange-700 font-bold rounded-xl shadow-lg px-6 py-3 text-base md:text-lg text-center">
                            OMPACTING /PRE-SHRINKING</div>
                    </div>
                    <div class="col-start-5 row-start-3 flex items-center justify-center">
                        <div
                            class="bg-orange-50 border-2 border-orange-200 text-orange-700 font-bold rounded-xl shadow-lg px-6 py-3 text-base md:text-lg text-center">
                            FINALINSPECTION</div>
                    </div>
                    <div class="col-start-6 row-start-3 flex items-center justify-center">
                        <div
                            class="bg-orange-50 border-2 border-orange-200 text-orange-700 font-bold rounded-xl shadow-lg px-6 py-3 text-base md:text-lg text-center">
                            SHIPMENT</div>
                    </div>
                    <!-- Bottom vertical -->
                    <div class="col-start-4 row-start-4 flex items-center justify-center">
                        <div
                            class="bg-orange-50 border-2 border-orange-200 text-orange-700 font-bold rounded-xl shadow-lg px-6 py-3 text-base md:text-lg text-center">
                            FINISHING</div>
                    </div>
                    <!-- Flowchart Arrows: Horizontal (between cards, outside boxes) -->
                    <svg class="absolute left-0 top-[52%] pointer-events-none" width="650" height="0"
                        style="z-index:1;" viewBox="0 0 650 0" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <marker id="arrowheadk" markerWidth="10" markerHeight="7" refX="10" refY="3.5"
                                orient="auto">
                                <polygon points="0 0, 10 3.5, 0 7" fill="#ea580c" />
                            </marker>
                        </defs>
                        <line x1="70" y1="0" x2="135" y2="0" stroke="#ea580c" stroke-width="3"
                            marker-end="url(#arrowheadk)" />
                        <line x1="165" y1="0" x2="230" y2="0" stroke="#ea580c" stroke-width="3"
                            marker-end="url(#arrowheadk)" />
                        <line x1="260" y1="0" x2="325" y2="0" stroke="#ea580c"
                            stroke-width="3" marker-end="url(#arrowheadk)" />
                        <line x1="355" y1="0" x2="420" y2="0" stroke="#ea580c"
                            stroke-width="3" marker-end="url(#arrowheadk)" />
                        <line x1="450" y1="0" x2="515" y2="0" stroke="#ea580c"
                            stroke-width="3" marker-end="url(#arrowheadk)" />
                    </svg>
                    <!-- Flowchart Arrows: Vertical (between cards, outside boxes) -->
                    <svg class="absolute left-[52%] top-0 pointer-events-none" width="0" height="350"
                        style="z-index:1;" viewBox="0 0 0 350" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <marker id="arrowheadvk" markerWidth="10" markerHeight="7" refX="10" refY="3.5"
                                orient="auto">
                                <polygon points="0 0, 10 3.5, 0 7" fill="#ea580c" />
                            </marker>
                        </defs>
                        <line x1="0" y1="20" x2="0" y2="65" stroke="#ea580c"
                            stroke-width="3" marker-end="url(#arrowheadvk)" />
                        <line x1="0" y1="95" x2="0" y2="140" stroke="#ea580c"
                            stroke-width="3" marker-end="url(#arrowheadvk)" />
                        <line x1="0" y1="170" x2="0" y2="215" stroke="#ea580c"
                            stroke-width="3" marker-end="url(#arrowheadvk)" />
                        <line x1="0" y1="245" x2="0" y2="290" stroke="#ea580c"
                            stroke-width="3" marker-end="url(#arrowheadvk)" />
                    </svg>
                </div>
            </div>
            <div class="w-full">
                <p class="text-gray-800 text-justify text-base md:text-lg text-left">
                    Our knitting process begins with Yarn Preparation, where we carefully select and prepare high-quality
                    yarns to ensure smooth machine performance and consistent fabric quality. By maintaining strict control
                    at this initial stage, we ensure uniform strength, appearance, and reliability throughout production.
                    During Knitting (Grey Fabric Production), we use modern knitting machines to convert yarn into grey
                    fabric according to specific design and technical requirements. Our focus at this stage is on achieving
                    precise fabric structure, elasticity, and GSM consistency.
                    Every roll of grey fabric goes through Grey Fabric Inspection, where our quality team checks for
                    knitting defects, holes, oil stains, and construction irregularities. Early-stage inspection allows us
                    to minimize defects and maintain high production efficiency.
                    We then carry out Dyeing using controlled and standardized dyeing procedures to achieve accurate shades,
                    uniform color distribution, and excellent color fastness. Our dyeing process is closely monitored to
                    meet both buyer requirements and international quality standards.
                    After dyeing, we perform Hydro Extraction / Dewatering to remove excess water efficiently, followed by
                    Drying under controlled conditions to stabilize the fabric before heat treatment.
                    The fabric then passes through Stenter / Heat Setting, where we apply precise heat control to stabilize
                    fabric structure, improve dimensional stability, and reduce unwanted shrinkage. Additional drying
                    ensures proper moisture balance before final setting.
                    At the Stenter / Heat Setting (Width & GSM Setting) stage, we accurately control fabric width and GSM as
                    per customer specifications. This step reflects our technical capability and commitment to consistency.
                    We further enhance fabric performance through Compacting / Pre-Shrinking, which allows us to control
                    shrinkage, improve softness, and ensure long-term dimensional stability.
                    Our Finishing process adds the final touch by improving fabric hand feel, appearance, and performance
                    characteristics according to end-use requirements.
                    Finally, every fabric undergoes Final Inspection, where we ensure quality, measurements, and overall
                    compliance before approval for packing and delivery.
                </p>
            </div>
        </div>
    </section>

    <!-- Hero Section with Stats -->
    <section class="relative py-6 lg:py-16 bg-gradient-to-br from-orange-50 via-white to-amber-50 overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0"
                style="background-image: url('data:image/svg+xml,%3Csvg width=\"60\" height=\"60\" viewBox=\"0 0 60 60\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg fill=\"none\" fill-rule=\"evenodd\"%3E%3Cg fill=\"%23ea580c\" fill-opacity=\"0.1\"%3E%3Ccircle cx=\"30\" cy=\"30\" r=\"2\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');">
            </div>
        </div>

        <div class="relative w-11/12 md:w-4/5 mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 md:gap-16 items-center">
                <!-- Left Content -->
                <div class="space-y-8">
                    <!-- Badge -->
                    <div
                        class="inline-flex items-center gap-2 bg-orange-100 text-orange-700 px-4 py-2 rounded-full text-sm font-medium">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z"
                                clip-rule="evenodd" />
                        </svg>
                        Since 1999 • Part of Thenhong Group
                    </div>

                    <h1 class="text-xl sm:text-2xl md:text-4xl lg:text-5xl font-bold text-gray-900 leading-tight">
                        Excellence of Mill
                    </h1>

                    <p class="text-base text-justify sm:text-lg md:text-xl text-gray-700 leading-relaxed">
                        Shengcheng Textile Ltd is a leading manufacturer of premium polyester-based knit & woven fabrics,
                        delivering 25 million meters annually with uncompromising quality and sustainable practices
                    </p>

                    <!-- Quick Stats -->
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 md:gap-6 pt-6">
                        <div class="text-center">
                            <div class="text-2xl font-bold text-orange-600 mb-1">25M+</div>
                            <div class="text-sm text-gray-600 font-medium">Meters Annual Production</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-bold text-orange-600 mb-1">25+</div>
                            <div class="text-sm text-gray-600 font-medium">Years Experience</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-bold text-orange-600 mb-1">500+</div>
                            <div class="text-sm text-gray-600 font-medium">Product Varieties</div>
                        </div>
                    </div>
                </div>

                <!-- Right Image with Floating Elements -->
                <div class="relative">
                    <div class="relative rounded-3xl overflow-hidden shadow-2xl">
                        <img src="{{ asset('images/1.jpeg') }}" alt="Shengcheng Textile Manufacturing Facility"
                            class="w-full h-48 sm:h-64 md:h-[500px] object-cover transform hover:scale-105 transition duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                    </div>

                    <!-- Floating Badge 1 -->
                    <div
                        class="absolute -top-2 sm:-top-4 -left-2 sm:-left-4 bg-white rounded-2xl shadow-xl p-2 sm:p-4 border border-orange-100">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 bg-orange-500 rounded-full flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </div>
                            <div>
                                <div class="font-bold text-orange-600">Innovation</div>
                                <div class="text-xs text-gray-600">Driving Trends</div>
                            </div>
                        </div>
                    </div>

                    <!-- Floating Badge 2 -->
                    <div
                        class="absolute -bottom-2 sm:-bottom-4 -right-2 sm:-right-4 bg-orange-600 text-white rounded-2xl shadow-xl p-3 sm:p-5">
                        <div class="text-center">
                            <div class="text-2xl font-bold">120+</div>
                            <div class="text-sm opacity-90">Global Partners</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-10 w-full">
                <div class="text-gray-800 text-justify text-base md:text-lg">
                    With over 25 years of manufacturing expertise, Shengcheng Textile Ltd specializes in the production of
                    both knitted and woven fabrics, serving global apparel brands, wholesalers, and sourcing companies. Our
                    strong production capability allows us to meet large-volume export demands with consistent quality and
                    on-time delivery.
                    Our mill is equipped with modern knitting and weaving machines, supported by advanced dyeing and
                    finishing facilities, ensuring superior fabric performance, color fastness, and durability. Vertically
                    integrated operations give us full control over every stage of production—from greige fabric to finished
                    output—resulting in stable quality and competitive pricing.
                    We offer a wide range of polyester-based fabrics suitable for fashion wear, sportswear, outerwear,
                    uniforms, and functional applications. Continuous product development and trend-driven innovation enable
                    us to provide customized solutions based on buyer requirements.
                    Quality assurance is maintained through a strict inspection system that complies with international
                    export standards. In parallel, we actively adopt sustainable and energy-efficient manufacturing
                    practices to support responsible sourcing and long-term partnerships.
                    With reliability, scalability, and professionalism at our core, Shengcheng Textile Ltd stands as a
                    trusted export-oriented mill for knit and woven fabrics worldwide.
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Values Section -->
    <section class="py-12 md:py-20 bg-white">
        <div class="w-11/12 md:w-4/5 mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 md:gap-16 items-center">
                <!-- Left: Mission Image -->
                <div class="relative">
                    <div class="rounded-3xl overflow-hidden shadow-2xl">
                        <img src="{{ asset('images/2.png') }}" alt="Our Mission - Quality Fabric Production"
                            class="w-full h-48 sm:h-64 md:h-[500px] object-cover">
                    </div>
                    <!-- Accent Element -->
                    <div class="absolute -z-10 -bottom-6 -left-6 w-24 h-24 bg-orange-200 rounded-full opacity-50"></div>
                </div>

                <!-- Right: Mission Content -->
                <div class="space-y-6 md:space-y-8">
                    <!-- Section Header -->
                    <div class="space-y-2 md:space-y-4">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center">
                                <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                            </div>
                            <h2 class="text-2xl md:text-4xl lg:text-5xl font-bold text-gray-900">Our Mission</h2>
                        </div>
                        <p class="text-base text-justify sm:text-lg md:text-xl text-gray-700 leading-relaxed">
                            To make <span class="font-semibold text-orange-600">SHENGCHENG TEXTILE</span> your preferred
                            partner by delivering outstanding value, excellent pricing, and consistently fulfilling all your
                            requirements.
                        </p>
                    </div>

                    <!-- Mission Points -->
                    <div class="space-y-4 md:space-y-6">
                        <div class="flex gap-4 p-4 rounded-2xl bg-orange-50 border border-orange-100">
                            <div class="flex-shrink-0 w-8 h-8 bg-orange-500 rounded-full flex items-center justify-center">
                                <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900 mb-1">Fabric That Brings Joy</h4>
                                <p class="text-gray-700 text-justify">We believe good fabric makes people happy - the look,
                                    feel, and even scent instills comfort and pleasure in every creation.</p>
                            </div>
                        </div>

                        <div class="flex gap-4 p-4 rounded-2xl bg-orange-50 border border-orange-100">
                            <div class="flex-shrink-0 w-8 h-8 bg-orange-500 rounded-full flex items-center justify-center">
                                <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900 mb-1">Uncompromising Quality</h4>
                                <p class="text-gray-700">Using premium yarns, dyes, and materials that exceed industry
                                    standards, ensuring vivid colors and lasting quality.</p>
                            </div>
                        </div>

                        <div class="flex gap-4 p-4 rounded-2xl bg-orange-50 border border-orange-100">
                            <div class="flex-shrink-0 w-8 h-8 bg-orange-500 rounded-full flex items-center justify-center">
                                <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900 mb-1">Dedication in Every Meter</h4>
                                <p class="text-gray-700">Every meter of our fabric reveals our passion for appearance,
                                    functionality, and exceptional tactile sensation.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-10 w-full">
                <div class="text-gray-800 text-justify text-base md:text-lg">
                    Our mission is to make SHENGCHENG TEXTILE your preferred company in all channels by delivering
                    outstanding value, continuous feedback and excellent price by consistently fulfilling all of your
                    requirements. We believe good fabric can make people happy. The look, feel, and even scent of a piece of
                    fabric can instill familiarity, pleasure and comfort. This is why when producing knit fabrics and woven
                    fabrics, we especially focus on their appearance, functionality, and the feel they generate when
                    touched. By using yarns, dyes, and other materials that meet the industry standard, you can see the
                    beautiful color and patterns, and feel the textures brought by different production techniques. Just as
                    people dress in line with their style, we also use fabric to express ourselves. In each meter of our
                    fabric, you will find our dedication. We love fabrics
                </div>
            </div>
        </div>
    </section>

    <!-- Quality Commitment Section -->
    <section class="py-12 md:py-20 bg-gradient-to-br from-gray-50 to-orange-50">
        <div class="w-11/12 md:w-4/5 mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 md:gap-16 items-center">
                <!-- Left: Quality Content -->
                <div class="space-y-6 md:space-y-8">
                    <div class="space-y-2 md:space-y-4">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center">
                                <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                            </div>
                            <h2 class="text-2xl md:text-4xl lg:text-5xl font-bold text-gray-900">Quality Control &
                                Commitment</h2>
                        </div>
                        <p class="text-base sm:text-lg md:text-xl text-gray-700 leading-relaxed">
                            Every fabric undergoes rigorous, multi-level inspections from yarn to finished product. Our
                            commitment extends beyond quality to your complete satisfaction.
                        </p>
                    </div>

                    <!-- Quality Process -->
                    <div class="grid grid-cols-2 gap-4 md:gap-6">
                        <div class="bg-white rounded-2xl p-3 md:p-6 shadow-lg border border-orange-100">
                            <div class="w-12 h-12 bg-orange-500 rounded-full flex items-center justify-center mb-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                            </div>
                            <h4 class="font-semibold text-gray-900 mb-2">Rigorous Testing</h4>
                            <p class="text-gray-600 text-sm">Every fabric tested against buyer requirements with precision
                                instruments.</p>
                        </div>

                        <div class="bg-white rounded-2xl p-3 md:p-6 shadow-lg border border-orange-100">
                            <div class="w-12 h-12 bg-orange-500 rounded-full flex items-center justify-center mb-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <h4 class="font-semibold text-gray-900 mb-2">Timely Delivery</h4>
                            <p class="text-gray-600 text-sm">Clear Time & Action plans ensure your supply chain stays
                                smooth.</p>
                        </div>

                        <div class="bg-white rounded-2xl p-3 md:p-6 shadow-lg border border-orange-100">
                            <div class="w-12 h-12 bg-orange-500 rounded-full flex items-center justify-center mb-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                            </div>
                            <h4 class="font-semibold text-gray-900 mb-2">Long-term Trust</h4>
                            <p class="text-gray-600 text-sm">Consistency from yarn to final fabric builds lasting
                                relationships.</p>
                        </div>

                        <div class="bg-white rounded-2xl p-3 md:p-6 shadow-lg border border-orange-100">
                            <div class="w-12 h-12 bg-orange-500 rounded-full flex items-center justify-center mb-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </div>
                            <h4 class="font-semibold text-gray-900 mb-2">Continuous Improvement</h4>
                            <p class="text-gray-600 text-sm">Ongoing process optimization for better quality and
                                efficiency.</p>
                        </div>
                    </div>

                    <div class="bg-orange-100 border border-orange-200 rounded-2xl p-4 md:p-6">
                        <p class="text-orange-800 font-semibold text-lg text-center">
                            "Quality is not an option, it's a promise we keep in every meter of fabric."
                        </p>
                    </div>
                </div>

                <!-- Right: Quality Image -->
                <div class="relative">
                    <div class="rounded-3xl overflow-hidden shadow-2xl">
                        <img src="{{ asset('images/3.png') }}" alt="Quality Control Process"
                            class="w-full h-48 sm:h-64 md:h-[600px] object-cover">
                    </div>
                    <!-- Quality Badge -->
                    <div
                        class="absolute -bottom-2 sm:-bottom-6 -right-2 sm:-right-6 bg-white rounded-2xl shadow-2xl p-3 sm:p-6 border border-orange-200">
                        <div class="text-center">
                            <div class="text-2xl font-bold text-orange-600">99.8%</div>
                            <div class="text-gray-600 text-sm font-medium">Quality Assurance Rate</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-10 w-full">
                <div class="text-gray-800 text-justify text-base md:text-lg">
                    At our company textile facility, every fabric goes through strict quality inspections.
                    We believe in perfection - from yarn to finished product - ensuring consistency, durability, and
                    customer trust.
                    Our commitment is not just to quality, but to your satisfaction. Every fabric tested & trusted according
                    buyer requirement. We believe quality is not an option, it’s a promise. From yarn to final fabric we
                    maintain consistency. We know quality that builds long-terms trust with our buyers.
                    Right fabric with right time delivery our professional planning keeps your orders one track. Our
                    commitment is not just word it’s a responsibility. We value your time, so with a clear Time & Action
                    plan we keep your supply chain smooth.
                </div>
    </section>

    <!-- Environmental Commitment Section -->
    <section class="py-12 md:py-20 bg-white">
        <div class="w-11/12 md:w-4/5 mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 md:gap-16 items-center">
                <!-- Left: Environmental Image -->
                <div class="relative">
                    <div class="rounded-3xl overflow-hidden shadow-2xl">
                        <img src="{{ asset('images/4.jpg') }}" alt="Environmental Sustainability"
                            class="w-full h-48 sm:h-64 md:h-[500px] object-cover">
                    </div>
                    <!-- Eco Badge -->
                    <div
                        class="absolute -top-2 sm:-top-4 -left-2 sm:-left-4 bg-green-500 text-white rounded-2xl shadow-xl p-2 sm:p-4">
                        <div class="text-center">
                            <div class="text-2xl font-bold">100%</div>
                            <div class="text-sm opacity-90">Eco-friendly Materials</div>
                        </div>
                    </div>
                </div>

                <!-- Right: Environmental Content -->
                <div class="space-y-6 md:space-y-8">
                    <div class="space-y-2 md:space-y-4">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                            </div>
                            <h2 class="text-2xl md:text-4xl lg:text-5xl font-bold text-gray-900">Environmental Policy</h2>
                        </div>
                        <p class="text-base sm:text-lg md:text-xl text-gray-700 leading-relaxed">
                            We go beyond compliance, striving to lead the industry in <span
                                class="font-semibold text-green-600">eco-friendly and sustainable practices</span> that
                            respect our planet.
                        </p>
                    </div>

                    <!-- Environmental Practices -->
                    <div class="space-y-2 md:space-y-4">
                        <div class="flex items-start gap-4 p-4 rounded-2xl bg-green-50 border border-green-100">
                            <div
                                class="flex-shrink-0 w-8 h-8 bg-green-500 rounded-full flex items-center justify-center mt-1">
                                <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900 mb-1">Eco-friendly Materials</h4>
                                <p class="text-gray-700">Only sustainable raw materials and dyes used across all production
                                    lines.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4 p-4 rounded-2xl bg-green-50 border border-green-100">
                            <div
                                class="flex-shrink-0 w-8 h-8 bg-green-500 rounded-full flex items-center justify-center mt-1">
                                <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900 mb-1">Resource Management</h4>
                                <p class="text-gray-700">Strict controls over water, energy, and chemical usage to minimize
                                    waste.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4 p-4 rounded-2xl bg-green-50 border border-green-100">
                            <div
                                class="flex-shrink-0 w-8 h-8 bg-green-500 rounded-full flex items-center justify-center mt-1">
                                <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900 mb-1">Recycled Materials</h4>
                                <p class="text-gray-700">Incorporating recycled materials in production with full client
                                    transparency.</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-green-100 border border-green-200 rounded-2xl p-4 md:p-6">
                        <p class="text-green-800 font-semibold text-lg text-center">
                            "We believe career and business growth must respect and protect our environment."
                        </p>
                    </div>
                </div>
            </div>
            <div class="mt-10 w-full">
                <div class="text-gray-800 text-base text-justify md:text-lg">
                    We are committed to conducting our operations in a manner that not only meets and exceeds the
                    environmental legislations & regulations; we also strive to be the leaders in the industrial sector of
                    the country by setting the benchmark for eco-friendly initiatives and sustainable business models. From
                    the toxic ink to the wasteful material and water, the fabric industry often encounters sustainability
                    challenges. As a member of the fabric production industry, we understand the importance of protecting
                    the environment. To make our little contribution to the Earth, our factory uses only eco-friendly raw
                    materials and dyes to make our fabrics, and we control the amount of the production water, energy and
                    chemicals with the aim of reducing the waste of resources. Recycled materials would also be used for
                    production with the client's knowledge and confirmation. We believe that career and business development
                    should not take its toll on the environment.
                </div>
            </div>
        </div>
    </section>

    <!-- Certifications & Sustainability Section (Image Right, Text Left) -->
    <section class="py-12 md:py-20 bg-gradient-to-br from-green-50 via-white to-orange-50">
        <div class="w-11/12 md:w-4/5 mx-auto flex flex-col lg:flex-row-reverse gap-6 md:gap-12 items-center">
            <!-- Right: Certification Image -->
            <div class="lg:w-1/2 flex justify-center">
                <img src="{{ asset('images/5.jpg') }}" alt="Certifications"
                    class="rounded-3xl shadow-2xl w-full h-48 sm:h-64 md:h-auto object-cover">
            </div>
            <!-- Left: Content -->
            <div class="lg:w-1/2 space-y-4 md:space-y-6">
                <h2
                    class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-bold text-orange-700 mb-2 flex items-center gap-2">
                    <span class="inline-block text-2xl">🌱</span> Our Commitment to Certified Quality & Sustainability
                </h2>
                <p class="text-gray-700 text-base sm:text-lg">
                    Every product follows the highest international sustainability and safety standards. We are proudly
                    certified by:
                </p>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-3 md:gap-5 pt-2">
                    <div class="bg-white rounded-2xl shadow p-5 border-l-4 border-green-400">
                        <h3 class="font-semibold text-xl text-green-800 mb-1">Global Recycle Standard (GRS)</h3>
                        <p class="text-gray-700 text-sm">Responsible recycling and sustainable production.</p>
                    </div>
                    <div class="bg-white rounded-2xl shadow p-5 border-l-4 border-yellow-400">
                        <h3 class="font-semibold text-xl text-yellow-800 mb-1">Better Cotton Initiative (BCI)</h3>
                        <p class="text-gray-700 text-sm">Promoting better standards in cotton farming and the global supply
                            chain.</p>
                    </div>
                    <div class="bg-white rounded-2xl shadow p-5 border-l-4 border-orange-400">
                        <h3 class="font-semibold text-xl text-orange-800 mb-1">OEKO-TEX®</h3>
                        <p class="text-gray-700 text-sm">Fabrics tested for harmful substances and safe for human use.</p>
                    </div>
                    <div class="bg-white rounded-2xl shadow p-5 border-l-4 border-blue-400">
                        <h3 class="font-semibold text-xl text-blue-800 mb-1">Global Organic Textile Standard (GOTS)</h3>
                        <p class="text-gray-700 text-sm">Organic fibers and environmentally-friendly manufacturing
                            certified.</p>
                    </div>
                </div>
                <p class="text-gray-700 mt-4 md:mt-6">
                    These certifications reflect our unwavering commitment to quality, safety, and sustainability - making
                    every meter of fabric a responsible choice.
                </p>
            </div>
        </div>
        <div class="mt-10 w-full w-11/12 md:w-4/5 mx-auto ">
            <div class="text-gray-800 text-base md:text-lg">
                At our fabric mill, we believe that true excellence comes with responsibility - responsibility toward our
                customers, our workers, and our planet.
                That’s why every fabric we produce follows the highest international sustainability and safety
                standards.
                We are proudly certified by:
                Global Recycle Standard (GRS) - Ensuring responsible recycling and sustainable production.
                Better Cotton Initiative (BCI) - Promoting better standards in cotton farming and global supply
                chain.
                OEKO-TEX® - Guaranteeing our fabrics are tested for harmful substances and safe for human use.
                Global Organic Textile Standard (GOTS) - Certifying organic fibers and environmentally friendly
                manufacturing.
                These certifications reflect our unwavering commitment to quality, safety, and sustainability, making every
                meter of fabric.
            </div>
        </div>
    </section>

    <!-- Company at a Glance (Quick Stats) -->
    <section class="py-8 md:py-12 bg-orange-50">
        <div class="w-11/12 md:w-4/5 mx-auto grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-8 text-center">
            <div>
                <div class="text-2xl font-bold text-orange-600 mb-1">25+</div>
                <div class="text-gray-700 text-sm">Years in Business</div>
            </div>
            <div>
                <div class="text-2xl font-bold text-orange-600 mb-1">25M</div>
                <div class="text-gray-700 text-sm">Meters Annual Production</div>
            </div>
            <div>
                <div class="text-2xl font-bold text-orange-600 mb-1">120+</div>
                <div class="text-gray-700 text-sm">Global Partners</div>
            </div>
            <div>
                <div class="text-2xl font-bold text-orange-600 mb-1">15+</div>
                <div class="text-gray-700 text-sm">Certifications</div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-12 md:py-20 bg-gradient-to-r from-orange-400 to-orange-700 text-center">
        <h3 class="text-xl sm:text-2xl md:text-3xl font-bold text-white mb-4 md:mb-6">Partner with Us</h3>
        <p class="text-white text-base sm:text-lg mb-6 md:mb-8">Let's create sustainable and innovative textiles together.
        </p>
        <a href="{{ url('/#contact') }}"
            class="inline-block bg-white text-orange-600 px-6 sm:px-10 py-3 sm:py-4 font-semibold rounded-full shadow-lg hover:bg-gray-100 hover:scale-105 transform transition duration-300">
            Contact Us
        </a>
    </section>
@endsection
