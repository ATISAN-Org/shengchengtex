<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin - Shengcheng Textile')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body class="font-sans bg-gray-100 flex" x-data="{ sidebarOpen: false }">

    {{-- Sidebar --}}
    <aside
        class="fixed inset-y-0 left-0 w-64 bg-gray-800 text-white transform -translate-x-full md:translate-x-0 transition-transform duration-300 z-30"
        :class="{'translate-x-0': sidebarOpen, '-translate-x-full': !sidebarOpen}">
        <div class="p-5 text-2xl font-bold border-b border-gray-700">Shengcheng Admin</div>
        <nav class="mt-5 space-y-1">
            <a href="{{ route('admin.dashboard') }}" class="block py-2 px-5 hover:bg-gray-700 rounded">Dashboard</a>
            <a href="{{ route('products.index') }}" class="block py-2 px-5 hover:bg-gray-700 rounded">Products</a>
            <a href="{{ route('categories.index') }}" class="block py-2 px-5 hover:bg-gray-700 rounded">Categories</a>
            <a href="{{ route('clients.index') }}" class="block py-2 px-5 hover:bg-gray-700 rounded">Clients</a>
            <a href="{{ route('employees.index') }}" class="block py-2 px-5 hover:bg-gray-700 rounded">Employees</a>
            <a href="{{ route('expenses.index') }}" class="block py-2 px-5 hover:bg-gray-700 rounded">Expenses</a>
            <a href="{{ route('reports.index') }}" class="block py-2 px-5 hover:bg-gray-700 rounded">Reports</a>
            <a href="{{ route('requests.index') }}" class="block py-2 px-5 hover:bg-gray-700 rounded">
                Product Requests
            </a>

            <a href="{{ route('contacts.index') }}" class="block py-2 px-5 hover:bg-gray-700 rounded">Contact Queries</a>
        </nav>
    </aside>

    {{-- Overlay for mobile --}}
    <div class="fixed inset-0 z-20 bg-black bg-opacity-50 md:hidden" x-show="sidebarOpen" @click="sidebarOpen = false">
    </div>

    {{-- Main Content --}}
    <div class="flex-1 flex flex-col md:ml-64 min-h-screen">
        {{-- Header --}}
        <header class="bg-white shadow p-4 flex justify-between items-center">
            <button @click="sidebarOpen = !sidebarOpen" class="md:hidden text-gray-600 focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                          d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
            <h1 class="text-xl font-bold">@yield('page-title', 'Dashboard')</h1>
        </header>

        {{-- Page Content --}}
        <main class="flex-1 p-6 overflow-auto">
            @yield('content')
        </main>
    </div>

</body>
</html>
