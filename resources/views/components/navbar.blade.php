<header class="bg-white shadow-md sticky top-0 z-50 transition-all duration-500">
    <div id="header-container" class="container mx-auto flex justify-between items-center py-4 px-5 transition-all duration-500">
        <!-- Logo -->
        <a href="{{ route('landing') }}" class="flex items-center space-x-3 transform hover:scale-105 transition-all duration-500">
            <img id="logo-img" src="{{ asset('images/logo.jpeg') }}" alt="Shengcheng Textile Logo" class="h-12 w-auto">
        </a>

        <!-- Desktop Menu -->
        <nav class="hidden md:flex space-x-8 text-lg font-medium">
            <a href="{{ route('landing') }}" class="relative text-gray-800 group px-3 py-2 rounded-md hover:bg-orange-500 hover:text-white transition-all duration-300">
                Home
            </a>
            <a href="{{ url('/#products') }}" class="relative text-gray-800 group px-3 py-2 rounded-md hover:bg-orange-500 hover:text-white transition-all duration-300">
                Products
            </a>
            <a href="{{ url('/#about') }}" class="relative text-gray-800 group px-3 py-2 rounded-md hover:bg-orange-500 hover:text-white transition-all duration-300">
                About Us
            </a>
            <a href="{{ url('/#contact') }}" class="relative text-gray-800 group px-3 py-2 rounded-md hover:bg-orange-500 hover:text-white transition-all duration-300">
                Contact
            </a>
            <a href="{{ url('/#clients') }}" class="relative text-gray-800 group px-3 py-2 rounded-md hover:bg-orange-500 hover:text-white transition-all duration-300">
                Clients
            </a>
        </nav>

        <!-- Mobile Menu Button -->
        <div class="md:hidden">
            <button id="mobile-menu-btn" class="focus:outline-none text-gray-800">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 8h16M4 16h16" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden bg-white shadow-lg overflow-hidden">
        <div class="flex flex-col items-center py-4 space-y-3">
            <a href="{{ route('landing') }}" class="mobile-item w-full text-center py-3 text-gray-800 hover:bg-orange-500 hover:text-white rounded transition-colors duration-300">Home</a>
            <a href="{{ url('/#products') }}" class="mobile-item w-full text-center py-3 text-gray-800 hover:bg-orange-500 hover:text-white rounded transition-colors duration-300">Products</a>
            <a href="{{ route('about') }}" class="mobile-item w-full text-center py-3 text-gray-800 hover:bg-orange-500 hover:text-white rounded transition-colors duration-300">About Us</a>
            <a href="{{ url('/#contact') }}" class="inline-block bg-orange-500 text-white px-10 py-4 font-semibold rounded-full shadow-lg hover:bg-orange-600 hover:scale-105 transform transition duration-300">
                Get in Touch
            </a>
        </div>
    </div>

    <script>
        const btn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');
        const mobileItems = document.querySelectorAll('.mobile-item');
        const logoImg = document.getElementById('logo-img');
        const headerContainer = document.getElementById('header-container');

        // Mobile menu toggle with staggered animation
        btn.addEventListener('click', () => {
            if (menu.classList.contains('hidden')) {
                menu.classList.remove('hidden');
                mobileItems.forEach((item, index) => {
                    item.style.opacity = '0';
                    item.style.transform = 'translateY(-20px)';
                    setTimeout(() => {
                        item.style.transition = 'all 0.4s ease';
                        item.style.opacity = '1';
                        item.style.transform = 'translateY(0)';
                    }, index * 100);
                });
            } else {
                mobileItems.forEach((item, index) => {
                    setTimeout(() => {
                        item.style.opacity = '0';
                        item.style.transform = 'translateY(-20px)';
                    }, index * 50);
                });
                setTimeout(() => menu.classList.add('hidden'), 300);
            }
        });

        // Scroll effect: shrink logo and header padding
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                logoImg.classList.add('h-8');
                logoImg.classList.remove('h-12');
                headerContainer.classList.add('py-2');
                headerContainer.classList.remove('py-4');
            } else {
                logoImg.classList.add('h-12');
                logoImg.classList.remove('h-8');
                headerContainer.classList.add('py-4');
                headerContainer.classList.remove('py-2');
            }
        });
    </script>
</header>
