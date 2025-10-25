<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>@yield('title', 'Shengcheng Textile')</title>
<!-- Favicon / browser tab icon -->
<link rel="icon" href="{{ asset('images/logo1.jpeg') }}" type="image/jpeg">
<link rel="apple-touch-icon" href="{{ asset('images/logo1.jpeg') }}">
<!-- Tailwind CSS via CDN -->
<script src="https://cdn.tailwindcss.com"></script>
<!-- Alpine.js for interactivity -->
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

</head>
<body class="font-sans text-gray-800">

{{-- Navbar --}}
@include('components.navbar')

{{-- Page Content --}}
<main>
    @yield('content')
</main>

{{-- Footer --}}
@include('components.footer')

</body>
</html>
