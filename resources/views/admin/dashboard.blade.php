@extends('admin.layout')

@section('title', 'Admin Dashboard')
@section('page-title', 'Dashboard')

@section('content')
<h2 class="text-3xl font-bold mb-6">Welcome, Admin!</h2>

<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
    <div class="bg-blue-600 text-white p-5 rounded shadow hover:shadow-lg transition">
        <h3 class="font-bold text-lg">Products</h3>
        <p class="text-3xl mt-2">{{ $productsCount ?? 0 }}</p>
        <a href="{{ route('products.index') }}" class="mt-2 inline-block text-sm underline">View Products</a>
    </div>
    <div class="bg-green-600 text-white p-5 rounded shadow hover:shadow-lg transition">
        <h3 class="font-bold text-lg">Categories</h3>
        <p class="text-3xl mt-2">{{ $categoriesCount ?? 0 }}</p>
        <a href="{{ route('categories.index') }}" class="mt-2 inline-block text-sm underline">View Categories</a>
    </div>
    <div class="bg-yellow-500 text-white p-5 rounded shadow hover:shadow-lg transition">
        <h3 class="font-bold text-lg">Orders</h3>
        <p class="text-3xl mt-2">{{ $ordersCount ?? 0 }}</p>
        <a href="#" class="mt-2 inline-block text-sm underline">View Orders</a>
    </div>
    <div class="bg-red-600 text-white p-5 rounded shadow hover:shadow-lg transition">
        <h3 class="font-bold text-lg">Users</h3>
        <p class="text-3xl mt-2">{{ $usersCount ?? 0 }}</p>
        <a href="#" class="mt-2 inline-block text-sm underline">View Users</a>
    </div>
</div>
@endsection
