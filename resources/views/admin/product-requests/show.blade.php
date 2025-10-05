@extends('admin.layout')

@section('title', 'Product Request Details - Admin')
@section('page-title', 'Product Request Details')

@section('content')
<div class="bg-white p-6 rounded-xl shadow-md max-w-6xl mx-auto space-y-6">
    <h2 class="text-2xl font-bold text-orange-500 mb-4">Request Details</h2>

    <!-- Request Info -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-gray-800">
        <p><span class="font-semibold">Full Name:</span> {{ $request->name }}</p>
        <p><span class="font-semibold">Email:</span> {{ $request->email }}</p>
        <p><span class="font-semibold">Phone:</span> {{ $request->phone }}</p>
        <p><span class="font-semibold">Subject:</span> {{ $request->subject ?? '-' }}</p>
        <p><span class="font-semibold">Submitted At:</span> {{ $request->created_at->format('d M Y, h:i A') }}</p>
    </div>

    <!-- Message -->
    <div class="mt-4">
        <h3 class="text-xl font-semibold text-orange-500 mb-2">Message</h3>
        <p class="text-gray-700 whitespace-pre-line">{{ $request->message }}</p>
    </div>

    <!-- Product Info -->
    @if($request->product)
    <div class="mt-6">
        <h3 class="text-xl font-semibold text-orange-500 mb-4">Product Details</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-gray-800">
            <p><span class="font-semibold">Name:</span> {{ $request->product->fabric_name ?? $request->product->name }}</p>
            <p><span class="font-semibold">Category:</span> {{ $request->product->category->name ?? 'N/A' }}</p>
            <p><span class="font-semibold">Composition:</span> {{ $request->product->composition ?? '-' }}</p>
            <p><span class="font-semibold">Color:</span> {{ $request->product->color ?? '-' }}</p>
            <p><span class="font-semibold">Width:</span> {{ $request->product->width ?? '-' }}</p>
            <p><span class="font-semibold">Type:</span> {{ $request->product->type ?? '-' }}</p>
            <p><span class="font-semibold">Price:</span> ${{ number_format($request->product->price, 2) }}/YDS</p>
            <p><span class="font-semibold">Samples:</span> {{ $request->product->samples ?? '-' }}</p>
            <p><span class="font-semibold">Origin:</span> {{ $request->product->origin ?? '-' }}</p>
            <p><span class="font-semibold">MOQ:</span> {{ $request->product->moq ?? '-' }}</p>
        </div>
    </div>
    @endif

    <!-- Back Button -->
    <div class="mt-6 flex justify-end">
        <a href="{{ route('requests.index') }}"
           class="bg-orange-500 text-black px-4 py-2 rounded hover:bg-orange-600 transition">
           Back to Requests
        </a>
    </div>
</div>
@endsection
