<section class="h-screen flex items-center bg-gradient-to-br from-orange-50 to-orange-100 relative overflow-hidden">
    <div class="w-11/12 md:w-4/5 mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 items-center px-6 md:px-12">

        <!-- Text Content -->
        <div class="text-center md:text-left">
            <h2 class="text-5xl md:text-6xl font-extrabold mb-6 text-orange-600 tracking-tight">
                About Us
            </h2>
            <p class="text-gray-700 text-lg md:text-xl leading-relaxed mb-8">
                Chengcheng Textile Co., Ltd is a leading fabric manufacturer located in Shengze Town, Wujiang City -
                China’s “Hometown of Silk.” With advanced facilities and strong global partnerships,
                we deliver premium textiles worldwide with a focus on quality, innovation, and sustainability.
            </p>

            <!-- Quick Highlights -->
            <div class="grid grid-cols-3 gap-6 mb-8">
                <div>
                    <h3 class="text-2xl md:text-3xl font-bold text-orange-600">20,000 m²</h3>
                    <p class="text-gray-600 text-sm md:text-base">Modern facility</p>
                </div>
                <div>
                    <h3 class="text-2xl md:text-3xl font-bold text-orange-600">30M+</h3>
                    <p class="text-gray-600 text-sm md:text-base">Yards annually</p>
                </div>
                <div>
                    <h3 class="text-2xl md:text-3xl font-bold text-orange-600">Global</h3>
                    <p class="text-gray-600 text-sm md:text-base">Trusted partners</p>
                </div>
            </div>

            <!-- CTA Button -->
            <a href="{{ route('about-more') }}"
                class="inline-block bg-orange-600 text-white px-10 py-4 text-lg font-semibold rounded-full shadow-lg hover:bg-orange-700 hover:scale-105 transform transition duration-300">
                Learn More
            </a>


        </div>

        <!-- Image Side -->
        <div class="flex justify-center md:justify-end">
            <img src="/images/1.png" alt="Textile Factory"
                class="rounded-3xl shadow-2xl w-full object-cover">
        </div>
    </div>

    <!-- Decorative Glow -->
    <div class="absolute top-0 left-0 w-60 h-60 bg-orange-200 rounded-full opacity-40 blur-3xl"></div>
    <div class="absolute bottom-0 right-0 w-72 h-72 bg-orange-300 rounded-full opacity-30 blur-3xl"></div>
</section>