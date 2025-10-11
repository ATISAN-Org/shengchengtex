@extends('admin.layout')

@section('title', 'Expenses')
@section('page-title', 'Expenses')

@section('content')
<div class="p-3">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-semibold text-gray-800">Expenses</h2>
        <a href="{{ route('expenses.create') }}"
           class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-lg shadow transition">
            + Add Expense
        </a>
    </div>

    @if(session('success'))
        <div class="bg-green-100 text-green-700 px-4 py-2 rounded mb-4 shadow text-sm">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-white rounded-lg shadow overflow-x-auto">
        <table class="min-w-full text-left border-collapse">
            <thead>
                <tr class="bg-gray-100 text-gray-700">
                    <th class="px-5 py-3 font-medium">#</th>
                    <th class="px-5 py-3 font-medium">Title</th>
                    <th class="px-5 py-3 font-medium">Amount</th>
                    <th class="px-5 py-3 font-medium">Type</th>
                    <th class="px-5 py-3 font-medium">Date</th>
                    <th class="px-5 py-3 font-medium text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($expenses as $expense)
                    <tr class="border-t hover:bg-gray-50 transition">
                        <td class="px-5 py-3">{{ $expense->id }}</td>
                        <td class="px-5 py-3">{{ $expense->title }}</td>
                        <td class="px-5 py-3">${{ number_format($expense->amount, 2) }}</td>
                        <td class="px-5 py-3 capitalize">{{ $expense->type }}</td>
                        <td class="px-5 py-3">
                            {{ $expense->expense_date ? \Carbon\Carbon::parse($expense->expense_date)->format('d M, Y') : '-' }}
                        </td>
                        <td class="px-5 py-3 text-center space-x-2">
                            <a href="{{ route('expenses.edit', $expense->id) }}"
                               class="bg-yellow-500 text-white px-4 py-1 rounded hover:bg-yellow-600 text-sm transition">Edit</a>
                            <form action="{{ route('expenses.destroy', $expense->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Are you sure you want to delete this expense?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-600 text-white px-4 py-1 rounded hover:bg-red-700 text-sm transition">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="px-5 py-4 text-center text-gray-500">No expenses found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection