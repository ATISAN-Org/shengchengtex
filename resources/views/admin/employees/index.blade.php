@extends('admin.layout')

@section('title', 'Employees')
@section('page-title', 'Employees')

@section('content')
<div class="container mx-auto px-6 py-6">
    <div class="flex items-center justify-between mb-5">
        <h2 class="text-2xl font-semibold text-gray-800">Employees</h2>
        <a href="{{ route('employees.create') }}"
           class="bg-blue-600 text-white px-5 py-2 rounded-lg shadow hover:bg-blue-700 transition text-base">
            + Add Employee
        </a>
    </div>

    {{-- Success Message --}}
    @if(session('success'))
        <div class="bg-green-100 text-green-700 px-4 py-2 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-white rounded-lg shadow overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-gray-100 text-gray-700">
                    <th class="px-5 py-3 font-medium">#</th>
                    <th class="px-5 py-3 font-medium">Name</th>
                    <th class="px-5 py-3 font-medium">Email</th>
                    <th class="px-5 py-3 font-medium">Phone</th>
                    <th class="px-5 py-3 font-medium">Position</th>
                    <th class="px-5 py-3 font-medium">Salary</th>
                    <th class="px-5 py-3 font-medium text-center">Actions</th>
                </tr>
            </thead>
            <tbody class="text-base">
                @forelse($employees as $employee)
                    <tr class="border-t hover:bg-gray-50">
                        <td class="px-5 py-3">{{ $employee->id }}</td>
                        <td class="px-5 py-3">{{ $employee->name }}</td>
                        <td class="px-5 py-3">{{ $employee->email }}</td>
                        <td class="px-5 py-3">{{ $employee->phone }}</td>
                        <td class="px-5 py-3">{{ $employee->position }}</td>
                        <td class="px-5 py-3">${{ number_format($employee->salary, 2) }}</td>
                        <td class="px-5 py-3 text-center space-x-2">
                            <a href="{{ route('employees.edit', $employee->id) }}"
                               class="bg-yellow-500 text-white px-4 py-1 rounded hover:bg-yellow-600 text-sm">Edit</a>
                            <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                        onclick="return confirm('Are you sure?')"
                                        class="bg-red-600 text-white px-4 py-1 rounded hover:bg-red-700 text-sm">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="px-5 py-4 text-center text-gray-500">No employees found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection