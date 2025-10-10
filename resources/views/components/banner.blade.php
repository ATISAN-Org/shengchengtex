<section class="relative w-full h-screen overflow-hidden">
    <!-- Background Image with Parallax Effect -->
    <div 
        class="absolute inset-0 bg-cover bg-center transform scale-110 transition-transform duration-1000" 
        style="background-image: url('{{ asset('images/banner3.jpg') }}');" 
        id="banner-bg">
    </div>

    <!-- Animated Gradient Overlay -->
    <div class="absolute inset-0 bg-gradient-to-r from-orange-500 via-transparent to-orange-500 opacity-30 animate-gradient"></div>

    <!-- Hero Content -->
    <div class="relative z-10 flex flex-col items-center justify-center h-full text-center px-5">
        <!-- Heading -->
        <h2 class="text-5xl md:text-6xl font-extrabold text-orange-500 mb-6 leading-tight drop-shadow-lg">
            Weaving Quality, Crafting Excellence
        </h2>

        <!-- Subheading -->
        <p class="text-lg md:text-xl mb-10 max-w-2xl mx-auto leading-relaxed text-white drop-shadow-md">
            Shengcheng Textile provides premium fabrics and textiles for every need.
        </p>

        <!-- CTA Button -->
        <a href="{{ route('products.list') }}" 
           class="inline-block bg-orange-500 text-black px-10 py-4 font-semibold rounded-lg shadow-lg hover:bg-orange-600 hover:scale-105 transform transition duration-300">
            Explore Products
        </a>
    </div>
</section>

<!-- Tailwind Custom Animation -->
<style>
    @keyframes gradientMove {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }

    .animate-gradient {
        background-size: 200% 200%;
        animation: gradientMove 15s ease infinite;
    }
</style>

<!-- Simple Parallax JS -->
<script>
    const banner = document.getElementById('banner-bg');
    window.addEventListener('scroll', () => {
        let offset = window.scrollY;
        banner.style.transform = `translateY(${offset * 0.3}px) scale(1.1)`;
    });
</script>
