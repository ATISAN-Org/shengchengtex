<footer class="bg-gray-900 text-white py-16 relative overflow-hidden">
    <div class="container mx-auto px-5 grid grid-cols-1 md:grid-cols-4 gap-10">
        <!-- Contact Info -->
        <div>
            <h3 class="text-2xl font-extrabold mb-4 text-orange-500">Contact Us</h3>
            <p class="mb-2">123 Textile Avenue, Dhaka, Bangladesh</p>
            <p class="mb-2">
                Email: 
                <a href="mailto:info@shengchengtextile.com" class="hover:text-orange-400 transition-colors">info@shengchengtextile.com</a>
            </p>
            <p>
                Phone: 
                <a href="tel:+880123456789" class="hover:text-orange-400 transition-colors">+880 123 456 789</a>
            </p>
        </div>

        <!-- Quick Links -->
        <div>
            <h3 class="text-2xl font-extrabold mb-4 text-orange-500">Quick Links</h3>
            <ul class="space-y-2">
                <li><a href="{{ route('landing') }}" class="hover:text-orange-400 transition-colors">Home</a></li>
                <li><a href="{{ route('products.list') }}" class="hover:text-orange-400 transition-colors">Products</a></li>
                <li><a href="{{ route('about') }}" class="hover:text-orange-400 transition-colors">About Us</a></li>
                <li><a href="{{ route('contact') }}" class="hover:text-orange-400 transition-colors">Contact</a></li>
            </ul>
        </div>

        <!-- Social Links -->
        <div>
            <h3 class="text-2xl font-extrabold mb-4 text-orange-500">Follow Us</h3>
            <div class="flex space-x-6 text-lg">
                <a href="#" class="hover:text-orange-400 transition-colors">Facebook</a>
                <a href="#" class="hover:text-pink-400 transition-colors">Instagram</a>
                <a href="#" class="hover:text-blue-400 transition-colors">LinkedIn</a>
            </div>
        </div>

        <!-- Company Info -->
        <div>
            <h3 class="text-2xl font-extrabold mb-4 text-orange-500">Company Info</h3>
            <ul class="space-y-2 text-gray-300">
                <li>TH TengHong Group</li>
                <li>Sister Concern: Shengcheng Textile</li>
                <li>BCI Certified</li>
            </ul>
        </div>
    </div>

    <!-- Decorative Shapes (optional) -->
    <div class="absolute top-0 left-0 w-32 h-32 bg-orange-600 rounded-full opacity-10 -translate-x-1/2 -translate-y-1/2"></div>
    <div class="absolute bottom-0 right-0 w-40 h-40 bg-orange-500 rounded-full opacity-10 translate-x-1/2 translate-y-1/2"></div>

    <!-- Bottom Note -->
    <div class="mt-10 text-center text-gray-400 text-sm">
        &copy; 2025 Shengcheng Textile. All rights reserved.
    </div>
</footer>
