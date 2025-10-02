@extends('admin.layout')

@section('title', 'Expenses')
@section('page-title', 'Expenses')

@section('content')
    <div class="container mx-auto px-6 py-8">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-3xl font-bold text-gray-800">Expenses</h2>
            <a href="{{ route('expenses.create') }}"
                class="bg-blue-600 text-white px-6 py-2 rounded-lg shadow hover:bg-blue-700 transition duration-300">
                + Add Expense
            </a>
        </div>

        {{-- Success Message --}}
        @if(session('success'))
            <div class="bg-green-100 text-green-700 px-4 py-3 rounded-lg mb-6">
                {{ session('success') }}
            </div>
        @endif

        {{-- Expenses Table --}}
        <div class="bg-white rounded-xl shadow-lg overflow-x-auto">
            <table class="w-full text-left border-collapse min-w-max">
                <thead>
                    <tr class="bg-gray-200 text-gray-700">
                        <th class="px-6 py-3">#</th>
                        <th class="px-6 py-3">Title</th>
                        <th class="px-6 py-3">Amount</th>
                        <th class="px-6 py-3">Type</th>
                        <th class="px-6 py-3">Date</th>
                        <th class="px-6 py-3 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($expenses as $expense)
                        <tr class="border-t hover:bg-gray-50 transition duration-150">
                            <td class="px-6 py-4">{{ $expense->id }}</td>
                            <td class="px-6 py-4">{{ $expense->title }}</td>
                            <td class="px-6 py-4">${{ number_format($expense->amount, 2) }}</td>
                            <td class="px-6 py-4 capitalize">{{ $expense->type }}</td>
                            <td class="px-6 py-4">
                                {{ $expense->expense_date ? \Carbon\Carbon::parse($expense->expense_date)->format('d M, Y') : '-' }}
                            </td>
                            <td class="px-6 py-4 text-center space-x-2">
                                <a href="{{ route('expenses.edit', $expense->id) }}"
                                    class="bg-yellow-500 text-white px-4 py-2 rounded-lg hover:bg-yellow-600 transition duration-300">
                                    Edit
                                </a>

                                <form action="{{ route('expenses.destroy', $expense->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        onclick="return confirm('Are you sure you want to delete this expense?')"
                                        class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700 transition duration-300">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="px-6 py-4 text-center text-gray-500">No expenses found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection