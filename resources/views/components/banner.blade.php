<section class="relative w-full md:h-screen overflow-hidden">
    <!-- Background Image with Parallax Effect -->
    <div 
        class="absolute inset-0 bg-cover bg-center transform scale-110 transition-transform duration-1000" 
        style="background-image: url('{{ asset('images/bann 2.5-01.jpg') }}');" 
        id="banner-bg">
    </div>
    <div class="relative z-10 flex flex-col items-center justify-center text-center px-5 md:h-full py-6 md:py-0">
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
