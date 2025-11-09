@if(session('success'))
    <div class="bg-green-100 text-green-800 px-4 py-3 rounded mb-6 max-w-4xl mx-auto text-center">
        {{ session('success') }}
    </div>
@endif

<section class="py-8 md:py-20 bg-gray-50">
    <div class="container mx-auto px-5 max-w-5xl">
        <!-- Heading -->
        <h2 class="text-4xl md:text-5xl font-extrabold mb-10 text-center text-orange-600">
            Get in Touch
        </h2>

        <!-- Contact Form -->
        <form action="{{ route('contact.submit') }}" method="POST" class="bg-white rounded-3xl shadow-md p-4 md:p-10 space-y-6">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <input type="text" name="name" placeholder="Your Name" required
                       class="w-full px-5 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-orange-400 shadow-sm transition duration-300">

                <input type="email" name="email" placeholder="Your Email" required
                       class="w-full px-5 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-orange-400 shadow-sm transition duration-300">
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <input type="text" name="phone" placeholder="Phone Number"
                       class="w-full px-5 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-orange-400 shadow-sm transition duration-300">

                <input type="text" name="whatsapp" placeholder="WhatsApp Number"
                       class="w-full px-5 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-orange-400 shadow-sm transition duration-300">
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <input type="text" name="wechat" placeholder="WeChat ID"
                       class="w-full px-5 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-orange-400 shadow-sm transition duration-300">

                <input type="text" name="subject" placeholder="Subject"
                       class="w-full px-5 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-orange-400 shadow-sm transition duration-300">
            </div>

            <textarea name="message" rows="5" placeholder="Your Message"
                      class="w-full px-5 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-orange-400 shadow-sm transition duration-300"></textarea>

            <!-- Submit Button -->
            <div class="text-center">
                <button type="submit"
                        class="bg-orange-600 text-white px-10 py-4 rounded-full font-semibold shadow-lg hover:bg-orange-700 hover:scale-105 transform transition duration-300">
                    Send Message
                </button>
            </div>
        </form>

        <!-- Contact Details -->
        <div class="mt-20 grid grid-cols-1 md:grid-cols-2 gap-10">
            <!-- China Office -->
            <div class="bg-white shadow-lg rounded-3xl p-10 text-left hover:shadow-2xl transition duration-300">
                <h3 class="text-2xl font-bold text-orange-600 mb-6 flex items-center gap-2">
                    <i data-lucide="building-2" class="w-6 h-6"></i> China Office
                </h3>
                <div class="space-y-3 text-gray-700">
                    <p class="flex items-start gap-3">
                        <i data-lucide="map-pin" class="w-5 h-5 text-orange-400"></i>
                        SHENGZE XIN DONG CUN 3ZU,<br>WUJIANG DISTRICT,<br>SUZHOU CITY, JIANGSU PROVINCE, CHINA.
                    </p>
                    <p class="flex items-center gap-3">
                        <i data-lucide="user" class="w-5 h-5 text-orange-400"></i>
                        Ting Virginia – <span class="text-gray-500">Managing Director (Owner)</span>
                    </p>
                </div>
            </div>

            <!-- Bangladesh Office -->
            <div class="bg-white shadow-lg rounded-3xl p-10 text-left hover:shadow-2xl transition duration-300">
                <h3 class="text-2xl font-bold text-orange-600 mb-6 flex items-center gap-2">
                    <i data-lucide="building" class="w-6 h-6"></i> Bangladesh Office
                </h3>
                <div class="space-y-2 text-gray-700">
                    <p class="flex items-start gap-3">
                        <i data-lucide="map-pin" class="w-5 h-5 text-orange-400"></i>
                        House # 9 (Floor-5A), Road # 4,<br>Sector # 3, Uttara,<br>Dhaka-1230, BANGLADESH
                    </p>
                    <p class="flex items-center gap-3">
                        <i data-lucide="user" class="w-5 h-5 text-orange-400"></i>
                        Arifuzzaman Sagar – <span class="text-gray-500">Country Manager</span>
                    </p>
                    <p class="flex items-center gap-3">
                        <i data-lucide="phone" class="w-5 h-5 text-orange-400"></i>
                        +880 1671927782
                    </p>
                    <p class="flex items-center gap-3">
                        <i data-lucide="mail" class="w-5 h-5 text-orange-400"></i>
                        sagar@yrc-tex.cn
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Load Lucide icons -->
<script src="https://unpkg.com/lucide@latest/dist/umd/lucide.min.js"></script>
<script>
    lucide.createIcons();
</script>
