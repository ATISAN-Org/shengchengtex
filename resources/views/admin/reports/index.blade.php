@extends('admin.layout')

@section('title', 'Reports')
@section('page-title', 'Reports')

@section('content')
<div class="p-3">
    <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-8 gap-6">
        <div>
            <h2 class="text-3xl font-bold text-gray-800 mb-1">Reports</h2>
            <p class="text-gray-500">Analyze your business performance with custom filters, charts, and summaries.</p>
        </div>
        <form method="GET" action="{{ route('reports.index') }}" class="flex flex-wrap gap-3">
            <div>
                <label class="block mb-1 text-sm font-medium text-gray-700">Start Date</label>
                <input type="date" name="start_date" value="{{ $startDate }}" class="border border-gray-300 rounded-lg p-2 focus:ring-2 focus:ring-blue-200 w-36 shadow-sm">
            </div>
            <div>
                <label class="block mb-1 text-sm font-medium text-gray-700">End Date</label>
                <input type="date" name="end_date" value="{{ $endDate }}" class="border border-gray-300 rounded-lg p-2 focus:ring-2 focus:ring-blue-200 w-36 shadow-sm">
            </div>
            <div>
                <label class="block mb-1 text-sm font-medium text-gray-700">Employee</label>
                <select name="employee_id" class="border border-gray-300 rounded-lg p-2 focus:ring-2 focus:ring-blue-200 w-40 shadow-sm">
                    <option value="">All</option>
                    @foreach($employees as $emp)
                        <option value="{{ $emp->id }}" {{ $employeeId == $emp->id ? 'selected' : '' }}>
                            {{ $emp->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div>
                <label class="block mb-1 text-sm font-medium text-gray-700">Expense Type</label>
                <select name="type" class="border border-gray-300 rounded-lg p-2 focus:ring-2 focus:ring-blue-200 w-40 shadow-sm">
                    <option value="">All</option>
                    @foreach($types as $t)
                        <option value="{{ $t }}" {{ $expenseType == $t ? 'selected' : '' }}>{{ ucfirst($t) }}</option>
                    @endforeach
                </select>
            </div>
            <div class="flex items-end">
                <button type="submit" class="inline-flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white font-semibold px-5 py-2 rounded-lg shadow transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16 21v-2a4 4 0 00-4-4H7a4 4 0 00-4 4v2"/>
                        <circle cx="9" cy="7" r="4"/>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M23 21v-2a4 4 0 00-3-3.87"/>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16 3.13a4 4 0 010 7.75"/>
                    </svg>
                    Apply Filters
                </button>
            </div>
        </form>
    </div>

    <!-- Card summary area (optional, for quick KPIs) -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <div class="bg-white rounded-lg shadow flex items-center p-5">
            <div class="bg-blue-100 text-blue-700 rounded-full p-3 mr-4">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m4 4v-1a4 4 0 00-3-3.87"/>
                    <circle cx="12" cy="7" r="4"/>
                </svg>
            </div>
            <div>
                <div class="text-gray-500 text-sm">Total Expenses</div>
                <div class="text-lg font-bold text-gray-800">
                    ${{ number_format($summary['total_expenses'] ?? 0, 2) }}
                </div>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow flex items-center p-5">
            <div class="bg-green-100 text-green-700 rounded-full p-3 mr-4">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M13 5v6h6"/>
                </svg>
            </div>
            <div>
                <div class="text-gray-500 text-sm">Most Expensive Type</div>
                <div class="text-lg font-bold text-gray-800">
                    {{ ucfirst($summary['most_expensive_type'] ?? 'N/A') }}
                </div>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow flex items-center p-5">
            <div class="bg-yellow-100 text-yellow-700 rounded-full p-3 mr-4">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17 9V7a5 5 0 00-10 0v2a5 5 0 00-2 4v5h14v-5a5 5 0 00-2-4z"/>
                </svg>
            </div>
            <div>
                <div class="text-gray-500 text-sm">Top Employee</div>
                <div class="text-lg font-bold text-gray-800">
                    {{ $summary['top_employee'] ?? 'N/A' }}
                </div>
            </div>
        </div>
    </div>

    <!-- Charts & Summary -->
    <div class="bg-white rounded-xl shadow-lg p-8 mb-8">
        @include('admin.reports.partials.charts')
    </div>
</div>
@endsection