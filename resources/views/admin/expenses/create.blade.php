@extends('admin.layout')

@section('title', 'Add Expense')
@section('page-title', 'Add Expense')

@section('content')
<div class="px-4 py-8">
    <h2 class="text-2xl font-semibold text-gray-800 mb-6">Add Expense</h2>

    {{-- Validation Errors --}}
    @if ($errors->any())
        <div class="bg-red-100 text-red-700 px-4 py-3 rounded mb-5 border-l-4 border-red-400 shadow">
            <ul class="list-disc list-inside">
                @foreach ($errors->all() as $error) 
                    <li>{{ $error }}</li> 
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Add Expense Form --}}
    <form action="{{ route('expenses.store') }}" method="POST"
          class="bg-white rounded-xl shadow p-6 space-y-5">
        @csrf

        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
            {{-- Title --}}
            <div>
                <label class="block mb-1 font-semibold text-gray-700">Title <span class="text-red-500">*</span></label>
                <input type="text" name="title" value="{{ old('title') }}"
                       class="w-full border border-gray-300 px-3 py-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-200" required>
            </div>

            {{-- Amount --}}
            <div>
                <label class="block mb-1 font-semibold text-gray-700">Amount <span class="text-red-500">*</span></label>
                <input type="number" step="0.01" name="amount" value="{{ old('amount') }}"
                       class="w-full border border-gray-300 px-3 py-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-200" required>
            </div>

            {{-- Type --}}
            <div>
                <label class="block mb-1 font-semibold text-gray-700">Type <span class="text-red-500">*</span></label>
                <select name="type" class="w-full border border-gray-300 px-3 py-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-200" required>
                    <option value="">Select Type</option>
                    <option value="office" {{ old('type')=='office'?'selected':'' }}>Office</option>
                    <option value="travel" {{ old('type')=='travel'?'selected':'' }}>Travel</option>
                    <option value="salary" {{ old('type')=='salary'?'selected':'' }}>Salary</option>
                    <option value="other" {{ old('type')=='other'?'selected':'' }}>Other</option>
                </select>
            </div>

            {{-- Date --}}
            <div>
                <label class="block mb-1 font-semibold text-gray-700">Date <span class="text-red-500">*</span></label>
                <input type="date" name="expense_date" value="{{ old('expense_date') ?? now()->toDateString() }}"
                       class="w-full border border-gray-300 px-3 py-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-200" required>
            </div>
        </div>

        {{-- Description --}}
        <div>
            <label class="block mb-1 font-semibold text-gray-700">Description</label>
            <textarea name="description" rows="4"
                      class="w-full border border-gray-300 px-3 py-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-200">{{ old('description') }}</textarea>
        </div>

        {{-- Submit Button --}}
        <div>
            <button type="submit"
                class="w-full bg-blue-600 text-white px-6 py-2 rounded-lg shadow hover:bg-blue-700 transition font-semibold text-lg">
                Save Expense
            </button>
        </div>
    </form>
</div>
@endsection