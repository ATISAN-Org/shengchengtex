<section class="relative w-full md:h-screen overflow-hidden">
    <!-- Background Image with Parallax Effect -->
    <div 
        class="absolute inset-0 bg-cover bg-center transform scale-110 transition-transform duration-1000" 
        style="background-image: url('{{ asset('images/banner3.jpg') }}');" 
        id="banner-bg">
    </div>

    <!-- Subtle Dark Overlay -->
    <div class="absolute inset-0 bg-black/40"></div>

    <!-- Hero Content -->
    <div class="relative z-10 flex flex-col items-center justify-center text-center px-5 md:h-full py-6 md:py-0">
        <!-- Heading -->
        <h2 class="text-xl xs:text-2xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold text-white mb-3 md:mb-6 leading-tight md:leading-tight drop-shadow-2xl">
            Weaving Quality, Crafting Excellence
        </h2>

        <!-- Subheading -->
        <p class="text-sm xs:text-base sm:text-lg md:text-xl mb-4 md:mb-10 max-w-xl md:max-w-2xl mx-auto leading-snug md:leading-relaxed text-white drop-shadow-md">
            Shengcheng Textile provides premium fabrics and textiles for every need.
        </p>

        <!-- CTA Button -->
        <a href="{{ route('products.list') }}" 
           class="inline-block bg-orange-600 text-white px-6 py-2 sm:px-8 sm:py-3 md:px-10 md:py-4 font-semibold rounded-lg shadow-lg hover:bg-orange-700 hover:scale-105 transform transition duration-300 text-base md:text-lg">
            Explore Products
        </a>
    </div>
</section>

<!-- Tailwind Custom Animation -->
<!-- <style>
    @keyframes gradientMove {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }

    .animate-gradient {
        background-size: 200% 200%;
        animation: gradientMove 15s ease infinite;
    }
</style> -->
<!-- Simple Parallax JS -->
<script>
    const banner = document.getElementById('banner-bg');
    window.addEventListener('scroll', () => {
        let offset = window.scrollY;
        banner.style.transform = `translateY(${offset * 0.3}px) scale(1.1)`;
    });
</script>
