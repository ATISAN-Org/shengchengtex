@extends('admin.layout')


@section('title', 'Admin Login')

@section('content')
<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <form method="POST" action="{{ route('admin.login.submit') }}" class="bg-white p-10 rounded-xl shadow-lg w-full max-w-md space-y-6">
        @csrf
        <h2 class="text-2xl font-bold text-orange-500 text-center">Admin Login</h2>

        <input type="email" name="email" placeholder="Email" required
            class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-orange-400">

        <input type="password" name="password" placeholder="Password" required
            class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-orange-400">

        <button type="submit" class="w-full bg-orange-500 text-black py-2 rounded hover:bg-orange-600 transition">
            Login
        </button>

        @error('email')
            <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
        @enderror
    </form>
</div>
@endsection
