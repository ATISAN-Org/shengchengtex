
<section class="relative w-full overflow-hidden flex items-center justify-center">
    <!-- Background Image with Parallax Effect -->
    <div class="absolute inset-0 w-full h-full">
        <img 
            src="{{ asset('images/bann 2.5-01.jpg') }}" 
            alt="Banner" 
            class="w-full h-full object-contain object-center block md:object-cover md:scale-110 transition-transform duration-1000" 
            id="banner-bg"
        >
    </div>
    <div class="relative z-10 flex flex-col items-center justify-center text-center px-5 pointer-events-none h-[40vw] min-h-[220px] md:h-screen"></div>
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
    function handleParallax() {
        if (window.innerWidth >= 768) {
            let offset = window.scrollY;
            banner.style.transform = `translateY(${offset * 0.3}px) scale(1.1)`;
        } else {
            banner.style.transform = '';
        }
    }
    window.addEventListener('scroll', handleParallax);
    window.addEventListener('resize', handleParallax);
</script>
