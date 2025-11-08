<footer class="bg-gray-900 text-white py-16 relative overflow-hidden">
    <div class="container mx-auto px-5 grid grid-cols-1 md:grid-cols-4 gap-10">
        <!-- Contact Info -->
        <div>
            <h3 class="text-2xl font-extrabold mb-4 text-orange-500">Contact Us</h3>
            <p class="mb-2">123 Textile Avenue, Dhaka, Bangladesh</p>
            <p class="mb-2">
                Email: 
                <a href="mailto:sagar@yrc-tex.cn" class="hover:text-orange-400 transition-colors">sagar@yrc-tex.cn</a>
            </p>
            <p>
                Phone: 
                <a href="tel:+8801671927782" class="hover:text-orange-400 transition-colors">+880 1671927782</a>
            </p>
        </div>

        <!-- Quick Links -->
        <div>
            <h3 class="text-2xl font-extrabold mb-4 text-orange-500">Quick Links</h3>
            <ul class="space-y-2">
                <li><a href="{{ route('landing') }}" class="hover:text-orange-400 transition-colors">Home</a></li>
                <li><a href="{{ route('products.list') }}" class="hover:text-orange-400 transition-colors">Products</a></li>
                <li><a href="{{ route('about-more') }}" class="hover:text-orange-400 transition-colors">About Us</a></li>
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
                <div class="mt-3 space-y-3">
                    <img src="/images/footer1.png" alt="BCI" class="w-24 h-16 h-auto" />
                    <img src="/images/footer2.png" alt="Global Recycled Standard" class="w-24 h-16 h-auto" />
                    <img src="/images/footer3.png" alt="OEKO-TEX STANDARD 100" class="w-24 h-16 h-auto" />
                </div>
        </div>

        <!-- Company Info -->
        <div>
            <h3 class="text-2xl font-extrabold mb-4 text-orange-500">Company Info</h3>
            <div class="space-y-2 text-gray-300">
                <!-- TH TengHong Group Logo/Title -->
                <div class="mb-1 flex items-center gap-2">
                    <div class="text-3xl font-bold leading-none tracking-wider">
                        <span style="color: #66a1a3;">T</span><span style="color: #787ead;">H</span>
                    </div>
                    <div class="text-lg font-bold tracking-wide text-white ml-2">TengHong Group</div>
                </div>
                <div class="text-xs font-semibold tracking-widest text-white mb-1">TENGHONG</div>
                <div class="text-sm mt-2">
                    <span class="font-bold">SISTER CONCERNS</span>:
                    <ul class="space-y-1 text-xs text-gray-400 mt-1">
                        <li>• ShengCheng Textile</li>
                        <li>• Shifeng Textile Co., Ltd</li>
                        <li>• Suzhou Yuerongcheng Textile Co., Ltd</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Decorative Shapes (optional) -->
    <div class="absolute top-0 left-0 w-32 h-32 bg-orange-600 rounded-full opacity-10 -translate-x-1/2 -translate-y-1/2"></div>
    <div class="absolute bottom-0 right-0 w-40 h-40 bg-orange-500 rounded-full opacity-10 translate-x-1/2 translate-y-1/2"></div>

    <!-- Bottom Note -->
    <div class="mt-10 text-center text-gray-400 text-sm">
        &copy; 2025 <a class="font-bold hover:text-orange-400 transition-colors" href="https://atysan.xyz" target="_blank" rel="noopener noreferrer">ATYSAN</a>. All rights reserved.
    </div>
</footer>
