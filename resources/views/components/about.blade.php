<section class="flex bg-gray-50 relative pt-9 md:pt-20 pb-8 md:pb-16 lg:pt-32 lg:pb-32">
    <div class="w-11/12 md:w-4/5 mx-auto px-2 md:px-12">
        <!-- Title Section - Always at the top -->
        <div class="text-center md:text-left mb-8">
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-orange-600 tracking-tight">
                About Us
            </h2>
        </div>

        <!-- Mobile Layout: Image at bottom -->
        <div class="lg:hidden">
            <!-- All text content first -->
            <div class="text-gray-700 text-justify text-base sm:text-lg mb-8">
                <p class="mb-3">
                    Shengcheng Textile Ltd., a subsidiary of Tenghong Group, is a professional manufacturer
                    specializing in polyester-based knitted and woven fabrics. We are located in Shengze Town,
                    Wujiang District, Changzhou City, China.
                </p>

                <p class="mb-3">
                    With an annual production capacity of approximately 25 million meters of greige fabric, we have
                    been serving the textile industry for over 25 years. Since our establishment, we have been
                    committed to building a reliable and high-quality brand within the global textile market.
                </p>

                <p class="mb-3">
                    Our products are positioned in the mid to high-end segment, and we continuously develop new
                    fabric varieties that reflect the latest trends in fashion and functionality. Through
                    constant innovation and improvement, we strive to meet the evolving needs of our customers.
                </p>

                <p class="mb-3">
                    Today, Shengcheng Textile Ltd. operates as a comprehensive textile fabric enterprise,
                    integrating weaving, knitting, dyeing, finishing, and sales under one complete system. Over
                    the years, we have established a quality control system that exceeds industry standards,
                    along with a reasonable and competitive pricing mechanism.
                </p>

                <p class="mb-3">
                    We are also pleased to share that Tenhong Group operates a dedicated silk coating factory,
                    enabling us to provide advanced coating, functional finishing, and value-added fabric
                    solutions. This additional capability allows us to offer enhanced performance fabrics with
                    improved durability, functionality, and customization options—further strengthening our
                    ability to serve diverse global market requirements.
                </p>

                <p class="mb-0">
                    Through professionalism, integrity, and a long-term vision, Shengcheng Textile Ltd. has
                    established strong and mutually beneficial partnerships with customers both domestically and
                    internationally.
                </p>
            </div>

            <!-- Image at bottom on mobile -->
            <div class="w-full mb-6">
                <img src="/images/1.png" alt="Textile Factory" class="rounded-xl md:rounded-3xl shadow-2xl w-full" />
            </div>

            <!-- Centered button -->
            <div class="text-center">
                <a href="{{ route('about-more') }}"
                    class="inline-block bg-orange-600 text-white px-10 py-2.5 text-lg font-semibold rounded-full shadow-lg hover:bg-orange-700 hover:scale-105 transform transition duration-300">
                    Learn More
                </a>
            </div>
        </div>

        <!-- Desktop Layout (lg and above) -->
        <div class="hidden lg:block">
            <!-- Main Grid Container -->
            <div class="grid grid-cols-1 lg:grid-cols-2 lg:grid-rows-[1fr_auto] gap-8 lg:gap-8">
                <!-- Left Column - Text that matches image height -->
                <div class="lg:row-span-1">
                    <div class="text-gray-700 text-justify text-base sm:text-lg">
                        <!-- Paragraph 1 - Always in left column -->
                        <p class="mb-3">
                            Shengcheng Textile Ltd., a subsidiary of Tenghong Group, is a professional manufacturer
                            specializing in polyester-based knitted and woven fabrics. We are located in Shengze Town,
                            Wujiang District, Changzhou City, China.
                        </p>

                        <!-- Paragraph 2 - Always in left column -->
                        <p class="mb-3">
                            With an annual production capacity of approximately 25 million meters of greige fabric, we
                            have
                            been serving the textile industry for over 25 years. Since our establishment, we have been
                            committed to building a reliable and high-quality brand within the global textile market.
                        </p>

                        <!-- Paragraph 3 - Show in left column on xl and 2xl -->
                        <div class="hidden xl:block 2xl:block">
                            <p class="mb-3">
                                Our products are positioned in the mid to high-end segment, and we continuously develop
                                new
                                fabric varieties that reflect the latest trends in fashion and functionality. Through
                                constant innovation and improvement, we strive to meet the evolving needs of our
                                customers.
                            </p>
                        </div>

                        <!-- Paragraph 4 - Show in left column on 2xl only -->
                        <div class="hidden 2xl:block">
                            <p class="mb-0">
                                Today, Shengcheng Textile Ltd. operates as a comprehensive textile fabric enterprise,
                                integrating weaving, knitting, dyeing, finishing, and sales under one complete system.
                                Over
                                the years, we have established a quality control system that exceeds industry standards,
                                along with a reasonable and competitive pricing mechanism.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Right Column - Image (matches left text height) -->
                <div class="lg:row-span-1 flex justify-center md:justify-end">
                    <div class="w-full h-full">
                        <img src="/images/1.png" alt="Textile Factory"
                            class="rounded-xl md:rounded-3xl shadow-2xl w-full h-full" />
                    </div>
                </div>

                <!-- Bottom Content Row - Full width below the grid -->
                <div class="lg:col-span-2 lg:row-start-2">
                    <!-- Large screens content -->
                    <div class="text-gray-700 text-justify text-lg">
                        <!-- Paragraph 3 - For lg screens only -->
                        <div class="hidden lg:block xl:hidden">
                            <p class="mb-3">
                                Our products are positioned in the mid to high-end segment, and we continuously develop
                                new
                                fabric varieties that reflect the latest trends in fashion and functionality. Through
                                constant innovation and improvement, we strive to meet the evolving needs of our
                                customers.
                            </p>
                        </div>

                        <!-- Paragraph 4 - For lg and xl screens only -->
                        <div class="hidden lg:block 2xl:hidden">
                            <p class="mb-3">
                                Today, Shengcheng Textile Ltd. operates as a comprehensive textile fabric enterprise,
                                integrating weaving, knitting, dyeing, finishing, and sales under one complete system.
                                Over
                                the years, we have established a quality control system that exceeds industry standards,
                                along with a reasonable and competitive pricing mechanism.
                            </p>
                        </div>

                        <!-- Paragraph 5 - For all large screens -->
                        <p class="mb-3">
                            We are also pleased to share that Tenhong Group operates a dedicated silk coating factory,
                            enabling us to provide advanced coating, functional finishing, and value-added fabric
                            solutions. This additional capability allows us to offer enhanced performance fabrics with
                            improved durability, functionality, and customization options—further strengthening our
                            ability to serve diverse global market requirements.
                        </p>

                        <!-- Paragraph 6 - For all large screens -->
                        <p class="mb-0">
                            Through professionalism, integrity, and a long-term vision, Shengcheng Textile Ltd. has
                            established strong and mutually beneficial partnerships with customers both domestically and
                            internationally.
                        </p>
                    </div>

                    <!-- CTA Button - For all large screens -->
                    <div class="mt-8 text-left">
                        <a href="{{ route('about-more') }}"
                            class="inline-block bg-orange-600 text-white px-10 py-4 text-lg font-semibold rounded-full shadow-lg hover:bg-orange-700 hover:scale-105 transform transition duration-300">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Decorative Glow - Subtle -->
    <div class="absolute top-0 left-0 w-60 h-60 bg-orange-100 rounded-full opacity-20 blur-3xl"></div>
    <div class="absolute bottom-0 right-0 w-72 h-72 bg-orange-100 rounded-full opacity-15 blur-3xl"></div>
</section>
