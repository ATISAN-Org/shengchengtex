<!-- dashboard.blade.php -->
@extends('admin.layout')

@section('title', 'Admin Dashboard - Shengcheng Textile')
@section('page-title', 'Dashboard')

@section('content')
<div class="mb-8">
    <h2 class="text-3xl font-bold text-gray-800">Welcome back, Admin!</h2>
    <p class="text-gray-600 mt-2">Here's what's happening with your textile business today.</p>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    <div class="stat-card bg-gradient-to-r from-blue-500 to-blue-600 text-white p-5 rounded-xl shadow">
        <div class="flex justify-between items-start">
            <div>
                <h3 class="font-semibold text-lg">Total Products</h3>
                <p class="text-3xl font-bold mt-2">{{ $productsCount ?? 0 }}</p>
            </div>
            <div class="bg-blue-400 p-3 rounded-lg">
                <i class="fas fa-boxes text-white text-xl"></i>
            </div>
        </div>
        <a href="{{ route('products.index') }}" class="mt-4 inline-flex items-center text-sm font-medium text-blue-100 hover:text-white transition">
            View Products <i class="fas fa-arrow-right ml-2"></i>
        </a>
    </div>
    
    <div class="stat-card bg-gradient-to-r from-green-500 to-green-600 text-white p-5 rounded-xl shadow">
        <div class="flex justify-between items-start">
            <div>
                <h3 class="font-semibold text-lg">Categories</h3>
                <p class="text-3xl font-bold mt-2">{{ $categoriesCount ?? 0 }}</p>
            </div>
            <div class="bg-green-400 p-3 rounded-lg">
                <i class="fas fa-tags text-white text-xl"></i>
            </div>
        </div>
        <a href="{{ route('categories.index') }}" class="mt-4 inline-flex items-center text-sm font-medium text-green-100 hover:text-white transition">
            View Categories <i class="fas fa-arrow-right ml-2"></i>
        </a>
    </div>
    
    <div class="stat-card bg-gradient-to-r from-amber-500 to-amber-600 text-white p-5 rounded-xl shadow">
        <div class="flex justify-between items-start">
            <div>
                <h3 class="font-semibold text-lg">Orders</h3>
                <p class="text-3xl font-bold mt-2">{{ $ordersCount ?? 0 }}</p>
            </div>
            <div class="bg-amber-400 p-3 rounded-lg">
                <i class="fas fa-shopping-cart text-white text-xl"></i>
            </div>
        </div>
        <a href="#" class="mt-4 inline-flex items-center text-sm font-medium text-amber-100 hover:text-white transition">
            View Orders <i class="fas fa-arrow-right ml-2"></i>
        </a>
    </div>
    
    <div class="stat-card bg-gradient-to-r from-red-500 to-red-600 text-white p-5 rounded-xl shadow">
        <div class="flex justify-between items-start">
            <div>
                <h3 class="font-semibold text-lg">Users</h3>
                <p class="text-3xl font-bold mt-2">{{ $usersCount ?? 0 }}</p>
            </div>
            <div class="bg-red-400 p-3 rounded-lg">
                <i class="fas fa-users text-white text-xl"></i>
            </div>
        </div>
        <a href="#" class="mt-4 inline-flex items-center text-sm font-medium text-red-100 hover:text-white transition">
            View Users <i class="fas fa-arrow-right ml-2"></i>
        </a>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
    <div class="chart-container p-6">
        <h3 class="text-lg font-semibold text-gray-800 mb-4">Sales Overview</h3>
        <div class="h-64">
            <canvas id="salesChart"></canvas>
        </div>
    </div>
    
    <div class="chart-container p-6">
        <h3 class="text-lg font-semibold text-gray-800 mb-4">Product Categories</h3>
        <div class="h-64">
            <canvas id="categoryChart"></canvas>
        </div>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
    <div class="bg-white p-6 rounded-xl shadow lg:col-span-2">
        <h3 class="text-lg font-semibold text-gray-800 mb-4">Recent Orders</h3>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead>
                    <tr>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Order ID</th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Customer</th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Amount</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <tr>
                        <td class="px-4 py-3 text-sm">#ORD-7842</td>
                        <td class="px-4 py-3 text-sm">Fashion House Ltd.</td>
                        <td class="px-4 py-3 text-sm"><span class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-xs">Completed</span></td>
                        <td class="px-4 py-3 text-sm">$2,450</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-3 text-sm">#ORD-7841</td>
                        <td class="px-4 py-3 text-sm">Textile Imports Inc.</td>
                        <td class="px-4 py-3 text-sm"><span class="px-2 py-1 bg-blue-100 text-blue-800 rounded-full text-xs">Processing</span></td>
                        <td class="px-4 py-3 text-sm">$3,120</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-3 text-sm">#ORD-7840</td>
                        <td class="px-4 py-3 text-sm">Global Fabrics Co.</td>
                        <td class="px-4 py-3 text-sm"><span class="px-2 py-1 bg-yellow-100 text-yellow-800 rounded-full text-xs">Pending</span></td>
                        <td class="px-4 py-3 text-sm">$1,870</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <a href="#" class="mt-4 inline-flex items-center text-sm font-medium text-blue-600 hover:text-blue-800 transition">
            View All Orders <i class="fas fa-arrow-right ml-2"></i>
        </a>
    </div>
    
    <div class="bg-white p-6 rounded-xl shadow">
        <h3 class="text-lg font-semibold text-gray-800 mb-4">Quick Actions</h3>
        <div class="space-y-4">
            <a href="{{ route('products.create') }}" class="flex items-center p-3 bg-blue-50 text-blue-700 rounded-lg hover:bg-blue-100 transition">
                <i class="fas fa-plus-circle mr-3"></i>
                <span>Add New Product</span>
            </a>
            <a href="{{ route('categories.create') }}" class="flex items-center p-3 bg-green-50 text-green-700 rounded-lg hover:bg-green-100 transition">
                <i class="fas fa-folder-plus mr-3"></i>
                <span>Create Category</span>
            </a>
            <a href="{{ route('reports.index') }}" class="flex items-center p-3 bg-purple-50 text-purple-700 rounded-lg hover:bg-purple-100 transition">
                <i class="fas fa-chart-line mr-3"></i>
                <span>Generate Report</span>
            </a>
            <a href="{{ route('requests.index') }}" class="flex items-center p-3 bg-amber-50 text-amber-700 rounded-lg hover:bg-amber-100 transition">
                <i class="fas fa-clipboard-list mr-3"></i>
                <span>View Requests</span>
            </a>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Sales Chart
    const salesCtx = document.getElementById('salesChart').getContext('2d');
    const salesChart = new Chart(salesCtx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
            datasets: [{
                label: 'Sales ($)',
                data: [12000, 19000, 15000, 25000, 22000, 30000],
                borderColor: '#3b82f6',
                backgroundColor: 'rgba(59, 130, 246, 0.1)',
                borderWidth: 2,
                fill: true,
                tension: 0.4
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    // Category Chart
    const categoryCtx = document.getElementById('categoryChart').getContext('2d');
    const categoryChart = new Chart(categoryCtx, {
        type: 'doughnut',
        data: {
            labels: ['Cotton', 'Silk', 'Wool', 'Polyester', 'Linen'],
            datasets: [{
                data: [30, 20, 15, 25, 10],
                backgroundColor: [
                    '#3b82f6',
                    '#10b981',
                    '#f59e0b',
                    '#ef4444',
                    '#8b5cf6'
                ],
                borderWidth: 0
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'bottom'
                }
            }
        }
    });
});
</script>
@endsection