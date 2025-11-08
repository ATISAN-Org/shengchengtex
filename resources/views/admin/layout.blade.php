<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Shengcheng Textile</title>
    <!-- Favicon / browser tab icon -->
    <link rel="icon" href="{{ asset('images/logo1.jpeg') }}" type="image/jpeg">
    <link rel="apple-touch-icon" href="{{ asset('images/logo1.jpeg') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .stat-card {
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        .stat-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: rgba(255,255,255,0.3);
        }
        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        .sidebar-link {
            transition: all 0.2s ease;
            position: relative;
        }
        .sidebar-link:hover {
            background-color: rgba(255,255,255,0.1);
            padding-left: 1.75rem;
        }
        .sidebar-link.active {
            background-color: rgba(59, 130, 246, 0.2);
            border-left: 4px solid #3b82f6;
        }
        .chart-container {
            background: white;
            border-radius: 0.5rem;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }
    </style>
</head>

<body class="font-sans bg-gray-50 flex" x-data="{ sidebarOpen: false, activeLink: 'dashboard' }">

    {{-- Sidebar --}}
    <aside
        class="fixed inset-y-0 left-0 w-64 bg-gradient-to-b from-gray-800 to-gray-900 text-white transform -translate-x-full md:translate-x-0 transition-transform duration-300 z-30"
        :class="{'translate-x-0': sidebarOpen, '-translate-x-full': !sidebarOpen}">
        <div class="p-5 flex items-center space-x-3 border-b border-gray-700">
            <div class="w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center">
                <i class="fas fa-tshirt text-white"></i>
            </div>
            <div>
                <div class="text-xl font-bold">Shengcheng</div>
                <div class="text-xs text-gray-400">Textile Admin</div>
            </div>
        </div>
       <nav class="mt-5 space-y-1 px-3">
    <a href="{{ route('admin.dashboard') }}" 
       class="sidebar-link flex items-center py-3 px-4 rounded transition-all duration-200 {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
        <i class="fas fa-tachometer-alt w-5 mr-3 text-center"></i>
        <span>Dashboard</span>
    </a>
    <a href="{{ route('products.index') }}" 
       class="sidebar-link flex items-center py-3 px-4 rounded transition-all duration-200 {{ request()->routeIs('products.*') ? 'active' : '' }}">
        <i class="fas fa-boxes w-5 mr-3 text-center"></i>
        <span>Products</span>
    </a>
    <a href="{{ route('categories.index') }}" 
       class="sidebar-link flex items-center py-3 px-4 rounded transition-all duration-200 {{ request()->routeIs('categories.*') ? 'active' : '' }}">
        <i class="fas fa-tags w-5 mr-3 text-center"></i>
        <span>Categories</span>
    </a>
    <a href="{{ route('clients.index') }}" 
       class="sidebar-link flex items-center py-3 px-4 rounded transition-all duration-200 {{ request()->routeIs('clients.*') ? 'active' : '' }}">
        <i class="fas fa-users w-5 mr-3 text-center"></i>
        <span>Clients</span>
    </a>
    <a href="{{ route('employees.index') }}" 
       class="sidebar-link flex items-center py-3 px-4 rounded transition-all duration-200 {{ request()->routeIs('employees.*') ? 'active' : '' }}">
        <i class="fas fa-user-tie w-5 mr-3 text-center"></i>
        <span>Employees</span>
    </a>
    <a href="{{ route('expenses.index') }}" 
       class="sidebar-link flex items-center py-3 px-4 rounded transition-all duration-200 {{ request()->routeIs('expenses.*') ? 'active' : '' }}">
        <i class="fas fa-money-bill-wave w-5 mr-3 text-center"></i>
        <span>Expenses</span>
    </a>
    <a href="{{ route('reports.index') }}" 
       class="sidebar-link flex items-center py-3 px-4 rounded transition-all duration-200 {{ request()->routeIs('reports.*') ? 'active' : '' }}">
        <i class="fas fa-chart-bar w-5 mr-3 text-center"></i>
        <span>Reports</span>
    </a>
    <a href="{{ route('requests.index') }}" 
       class="sidebar-link flex items-center py-3 px-4 rounded transition-all duration-200 {{ request()->routeIs('requests.*') ? 'active' : '' }}">
        <i class="fas fa-clipboard-list w-5 mr-3 text-center"></i>
        <span>Product Requests</span>
    </a>
    <a href="{{ route('contacts.index') }}" 
       class="sidebar-link flex items-center py-3 px-4 rounded transition-all duration-200 {{ request()->routeIs('contacts.*') ? 'active' : '' }}">
        <i class="fas fa-envelope w-5 mr-3 text-center"></i>
        <span>Contact Queries</span>
    </a>
</nav>
        
        <div class="absolute bottom-0 w-full p-4 border-t border-gray-700">
            <div class="flex items-center space-x-3">
                <div class="w-10 h-10 bg-gray-600 rounded-full flex items-center justify-center">
                    <i class="fas fa-user text-white"></i>
                </div>
                <div class="flex-1">
                    <div class="text-sm font-medium">Admin User</div>
                    <div class="text-xs text-gray-400">Administrator</div>
                </div>
                <span class="text-gray-500 cursor-not-allowed">
                    <i class="fas fa-sign-out-alt"></i>
                </span>
            </div>
        </div>
    </aside>

    {{-- Overlay for mobile --}}
    <div class="fixed inset-0 z-20 bg-black bg-opacity-50 md:hidden" x-show="sidebarOpen" @click="sidebarOpen = false">
    </div>

    {{-- Main Content --}}
    <div class="flex-1 flex flex-col md:ml-64 min-h-screen">
        {{-- Header --}}
        <header class="bg-white shadow-sm p-4 flex justify-between items-center sticky top-0 z-10">
            <div class="flex items-center">
                <button @click="sidebarOpen = !sidebarOpen" class="md:hidden text-gray-600 focus:outline-none mr-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                              d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
                <h1 class="text-xl font-bold text-gray-800">@yield('page-title', 'Dashboard')</h1>
            </div>
            <div class="flex items-center space-x-4">
                <div class="relative">
                    <button class="text-gray-500 hover:text-gray-700 focus:outline-none">
                        <i class="fas fa-bell text-xl"></i>
                        <span class="absolute -top-1 -right-1 bg-red-500 text-white text-xs rounded-full h-5 w-5 flex items-center justify-center">3</span>
                    </button>
                </div>
                <div class="relative">
                    <button class="text-gray-500 hover:text-gray-700 focus:outline-none">
                        <i class="fas fa-cog text-xl"></i>
                    </button>
                </div>
            </div>
        </header>

        {{-- Page Content --}}
        <main class="flex-1 p-6 overflow-auto">
            @yield('content')
        </main>
    </div>

</body>
</html>