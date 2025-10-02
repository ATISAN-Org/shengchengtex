@extends('admin.layout')

@section('title', 'Product Requests - Admin')
@section('page-title', 'Product Requests')

@section('content')
<div class="bg-white p-6 rounded-lg shadow-md">
    <h2 class="text-xl font-semibold mb-4">All Product Requests</h2>

    <table class="w-full text-left border border-gray-200">
        <thead>
            <tr class="bg-gray-100">
                <th class="p-2 border-b">Name</th>
                <th class="p-2 border-b">Email</th>
                <th class="p-2 border-b">Phone</th>
                <th class="p-2 border-b">Subject</th>
                <th class="p-2 border-b">Message</th>
                <th class="p-2 border-b">Product</th>
                <th class="p-2 border-b">Date</th>
                <th class="p-2 border-b">Action</th> {{-- New column for View --}}
            </tr>
        </thead>
        <tbody>
            @foreach($requests as $request)
                <tr>
                    <td class="p-2 border-b">{{ $request->name }}</td>
                    <td class="p-2 border-b">{{ $request->email }}</td>
                    <td class="p-2 border-b">{{ $request->phone }}</td>
                    <td class="p-2 border-b">{{ $request->subject }}</td>
                    <td class="p-2 border-b">{{ Str::limit($request->message, 30) }}</td>
                    <td class="p-2 border-b">{{ $request->product->name ?? 'N/A' }}</td>
                    <td class="p-2 border-b">{{ $request->created_at->format('d M Y') }}</td>
                    <td class="p-2 border-b">
                        <a href="{{ route('requests.show', $request->id) }}"
                           class="text-orange-500 hover:underline">View</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-4">
        {{ $requests->links() }}
    </div>
</div>
@endsection
