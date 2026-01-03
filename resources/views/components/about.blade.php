<section class="flex bg-gray-50 relative pt-9 md:pt-20 pb-8 md:pb-16 lg:pt-32 lg:pb-32">
    <div class="w-11/12 md:w-4/5 mx-auto px-2 md:px-12">
        <!-- Title Section - Always at the top -->
        <div class="text-center md:text-left mb-8">
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-orange-600 tracking-tight">
                About Us
            </h2>
        </div>

        <!-- Content Section: Image + Text -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-8 mb-6 lg:mb-0">
            <!-- Text Content -->
            <div class="text-center md:text-left">
                <div class="text-gray-700 text-justify text-base sm:text-lg">
                    <!-- Paragraph 1 - Show on all screens -->
                    <p class="mb-3">
                        Shengcheng Textile Ltd., a subsidiary of Tenghong Group, is a professional manufacturer
                        specializing in polyester-based knitted and woven fabrics. We are located in Shengze Town,
                        Wujiang District, Changzhou City, China.
                    </p>

                    <!-- Paragraph 2 - Show on all screens -->
                    <p class="mb-3">
                        With an annual production capacity of approximately 25 million meters of greige fabric, we have
                        been serving the textile industry for over 25 years. Since our establishment, we have been
                        committed to building a reliable and high-quality brand within the global textile market.
                    </p>

                    <!-- Paragraph 3 - Show on mobile AND 2xl screens only -->
                    <div class="lg:hidden 2xl:block">
                        <p class="mb-3">
                            Our products are positioned in the mid to high-end segment, and we continuously develop new
                            fabric varieties that reflect the latest trends in fashion and functionality. Through
                            constant innovation and improvement, we strive to meet the evolving needs of our customers.
                        </p>
                    </div>

                    <!-- Rest of paragraphs - Show on mobile only -->
                    <div class="lg:hidden">
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
                </div>

                <!-- CTA Button - Only show on mobile/tablet -->
                <div class="mt-6 lg:hidden">
                    <a href="{{ route('about-more') }}"
                        class="inline-block bg-orange-600 text-white px-10 py-2.5 text-lg font-semibold rounded-full shadow-lg hover:bg-orange-700 hover:scale-105 transform transition duration-300">
                        Learn More
                    </a>
                </div>
            </div>

            <!-- Image Side - Aligns with text content, not title -->
            <div class="flex justify-center md:justify-end">
                <div class="w-full">
                    <img src="/images/1.png" alt="Textile Factory"
                        class="rounded-xl md:rounded-3xl shadow-2xl w-full" />
                </div>
            </div>
        </div>

        <!-- Bottom section: For lg and xl screens -->
        <div class="hidden lg:block 2xl:hidden mt-2">
            <div class="text-gray-700 text-justify text-lg">
                <!-- Paragraph 3 - For lg and xl screens only -->
                <p class="mb-3">
                    Our products are positioned in the mid to high-end segment, and we continuously develop new
                    fabric varieties that reflect the latest trends in fashion and functionality. Through
                    constant innovation and improvement, we strive to meet the evolving needs of our customers.
                </p>

                <!-- Paragraph 4 - For lg and xl screens -->
                <p class="mb-3">
                    Today, Shengcheng Textile Ltd. operates as a comprehensive textile fabric enterprise,
                    integrating weaving, knitting, dyeing, finishing, and sales under one complete system. Over
                    the years, we have established a quality control system that exceeds industry standards,
                    along with a reasonable and competitive pricing mechanism.
                </p>

                <!-- Paragraph 5 - For lg and xl screens -->
                <p class="mb-3">
                    We are also pleased to share that Tenhong Group operates a dedicated silk coating factory,
                    enabling us to provide advanced coating, functional finishing, and value-added fabric
                    solutions. This additional capability allows us to offer enhanced performance fabrics with
                    improved durability, functionality, and customization options—further strengthening our
                    ability to serve diverse global market requirements.
                </p>

                <!-- Paragraph 6 - For lg and xl screens -->
                <p class="mb-0">
                    Through professionalism, integrity, and a long-term vision, Shengcheng Textile Ltd. has
                    established strong and mutually beneficial partnerships with customers both domestically and
                    internationally.
                </p>
            </div>

            <!-- CTA Button - For lg and xl screens -->
            <div class="mt-8">
                <a href="{{ route('about-more') }}"
                    class="inline-block bg-orange-600 text-white px-10 py-4 text-lg font-semibold rounded-full shadow-lg hover:bg-orange-700 hover:scale-105 transform transition duration-300">
                    Learn More
                </a>
            </div>
        </div>

        <!-- Bottom section: For 2xl screens only -->
        <div class="hidden 2xl:block mt-2">
            <div class="text-gray-700 text-justify text-lg">
                <!-- Paragraph 4 - For 2xl screens only -->
                <p class="mb-3">
                    Today, Shengcheng Textile Ltd. operates as a comprehensive textile fabric enterprise,
                    integrating weaving, knitting, dyeing, finishing, and sales under one complete system. Over
                    the years, we have established a quality control system that exceeds industry standards,
                    along with a reasonable and competitive pricing mechanism.
                </p>

                <!-- Paragraph 5 - For 2xl screens only -->
                <p class="mb-3">
                    We are also pleased to share that Tenhong Group operates a dedicated silk coating factory,
                    enabling us to provide advanced coating, functional finishing, and value-added fabric
                    solutions. This additional capability allows us to offer enhanced performance fabrics with
                    improved durability, functionality, and customization options—further strengthening our
                    ability to serve diverse global market requirements.
                </p>

                <!-- Paragraph 6 - For 2xl screens only -->
                <p class="mb-0">
                    Through professionalism, integrity, and a long-term vision, Shengcheng Textile Ltd. has
                    established strong and mutually beneficial partnerships with customers both domestically and
                    internationally.
                </p>
            </div>

            <!-- CTA Button - For 2xl screens only -->
            <div class="mt-8">
                <a href="{{ route('about-more') }}"
                    class="inline-block bg-orange-600 text-white px-10 py-4 text-lg font-semibold rounded-full shadow-lg hover:bg-orange-700 hover:scale-105 transform transition duration-300">
                    Learn More
                </a>
            </div>
        </div>
    </div>

    <!-- Decorative Glow - Subtle -->
    <div class="absolute top-0 left-0 w-60 h-60 bg-orange-100 rounded-full opacity-20 blur-3xl"></div>
    <div class="absolute bottom-0 right-0 w-72 h-72 bg-orange-100 rounded-full opacity-15 blur-3xl"></div>
</section>
