
<section class="relative w-full overflow-hidden flex items-center justify-center">
    <!-- Background Image with Parallax Effect -->
    <div class="relative w-full flex items-center justify-center" style="background: #fff;">
        <img 
            src="{{ asset('images/bann-min.jpg') }}" 
            alt="Banner" 
            class="w-full max-w-full h-auto object-contain object-center block transition-transform duration-1000" 
            id="banner-bg"
            style="aspect-ratio: 4267/2175;"
        >
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
    function handleParallax() {
        if (window.innerWidth >= 768) {
            let offset = window.scrollY;
            banner.style.transform = `translateY(${offset * 0.3}px)`;
        } else {
            banner.style.transform = '';
        }
    }
    window.addEventListener('scroll', handleParallax);
    window.addEventListener('resize', handleParallax);
</script>
