@extends('admin.layout')

@section('title', 'Reports')

@section('content')
<div class="p-6">
    <h2 class="text-2xl font-bold mb-6">Reports</h2>

    <!-- Filter Form -->
    <form method="GET" action="{{ route('reports.index') }}" class="mb-6 grid grid-cols-1 md:grid-cols-4 gap-4">
        <div>
            <label class="block mb-1 font-medium">Start Date</label>
            <input type="date" name="start_date" value="{{ $startDate }}" class="border rounded p-2 w-full">
        </div>
        <div>
            <label class="block mb-1 font-medium">End Date</label>
            <input type="date" name="end_date" value="{{ $endDate }}" class="border rounded p-2 w-full">
        </div>
        <div>
            <label class="block mb-1 font-medium">Employee</label>
            <select name="employee_id" class="border rounded p-2 w-full">
                <option value="">All</option>
                @foreach($employees as $emp)
                    <option value="{{ $emp->id }}" {{ $employeeId == $emp->id ? 'selected' : '' }}>
                        {{ $emp->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div>
            <label class="block mb-1 font-medium">Expense Type</label>
            <select name="type" class="border rounded p-2 w-full">
                <option value="">All</option>
                @foreach($types as $t)
                    <option value="{{ $t }}" {{ $expenseType == $t ? 'selected' : '' }}>{{ ucfirst($t) }}</option>
                @endforeach
            </select>
        </div>
        <div class="flex items-end">
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                Apply Filters
            </button>
        </div>
    </form>

    <!-- Charts & Summary (same as before) -->
    @include('admin.reports.partials.charts')
</div>
@endsection
