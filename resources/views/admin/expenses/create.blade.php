@extends('admin.layout')

@section('title', 'Add Expense')
@section('page-title', 'Add Expense')

@section('content')
<div class="container mx-auto px-6 py-8">
    <h2 class="text-3xl font-bold text-gray-800 mb-6">Add Expense</h2>

    {{-- Validation Errors --}}
    @if ($errors->any())
        <div class="bg-red-100 text-red-700 px-4 py-3 rounded-lg mb-6">
            <ul class="list-disc ml-6">
                @foreach ($errors->all() as $error) 
                    <li>{{ $error }}</li> 
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Add Expense Form --}}
    <form action="{{ route('expenses.store') }}" method="POST"
          class="bg-white rounded-xl shadow-lg p-8 space-y-6">
        @csrf

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            {{-- Title --}}
            <div>
                <label class="block mb-2 font-semibold">Title</label>
                <input type="text" name="title" value="{{ old('title') }}"
                       class="w-full border px-4 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" required>
            </div>

            {{-- Amount --}}
            <div>
                <label class="block mb-2 font-semibold">Amount</label>
                <input type="number" step="0.01" name="amount" value="{{ old('amount') }}"
                       class="w-full border px-4 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" required>
            </div>

            {{-- Type --}}
            <div>
                <label class="block mb-2 font-semibold">Type</label>
                <select name="type" class="w-full border px-4 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" required>
                    <option value="">Select Type</option>
                    <option value="office" {{ old('type')=='office'?'selected':'' }}>Office</option>
                    <option value="travel" {{ old('type')=='travel'?'selected':'' }}>Travel</option>
                    <option value="salary" {{ old('type')=='salary'?'selected':'' }}>Salary</option>
                    <option value="other" {{ old('type')=='other'?'selected':'' }}>Other</option>
                </select>
            </div>

            {{-- Date --}}
            <div>
                <label class="block mb-2 font-semibold">Date</label>
                <input type="date" name="expense_date" value="{{ old('date') ?? now()->toDateString() }}"
                       class="w-full border px-4 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" required>
            </div>
        </div>

        {{-- Description --}}
        <div>
            <label class="block mb-2 font-semibold">Description</label>
            <textarea name="description" rows="4"
                      class="w-full border px-4 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">{{ old('description') }}</textarea>
        </div>

        {{-- Submit Button --}}
        <div>
            <button type="submit"
                class="bg-blue-600 text-white px-6 py-3 rounded-lg shadow hover:bg-blue-700 transition duration-300">
                Save Expense
            </button>
        </div>
    </form>
</div>
@endsection
