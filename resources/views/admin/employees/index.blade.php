@extends('admin.layout')

@section('title', 'Employees')
@section('page-title', 'Employees')

@section('content')
<div class="container mx-auto px-6 py-8">
    <h2 class="text-3xl font-bold text-gray-800 mb-6">Employees</h2>

    {{-- Success Message --}}
    @if(session('success'))
        <div class="bg-green-100 text-green-700 px-4 py-3 rounded-lg mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="mb-6 text-right">
        <a href="{{ route('employees.create') }}"
           class="bg-blue-600 text-white px-6 py-2 rounded-lg shadow hover:bg-blue-700">
            + Add Employee
        </a>
    </div>

    <div class="bg-white rounded-xl shadow-lg overflow-hidden">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-gray-200 text-gray-700">
                    <th class="px-6 py-3">#</th>
                    <th class="px-6 py-3">Name</th>
                    <th class="px-6 py-3">Email</th>
                    <th class="px-6 py-3">Phone</th>
                    <th class="px-6 py-3">Position</th>
                    <th class="px-6 py-3">Salary</th>
                    <th class="px-6 py-3 text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($employees as $employee)
                    <tr class="border-t hover:bg-gray-50">
                        <td class="px-6 py-4">{{ $employee->id }}</td>
                        <td class="px-6 py-4">{{ $employee->name }}</td>
                        <td class="px-6 py-4">{{ $employee->email }}</td>
                        <td class="px-6 py-4">{{ $employee->phone }}</td>
                        <td class="px-6 py-4">{{ $employee->position }}</td>
                        <td class="px-6 py-4">${{ number_format($employee->salary, 2) }}</td>
                        <td class="px-6 py-4 text-center space-x-2">
                            <a href="{{ route('employees.edit', $employee->id) }}"
                               class="bg-yellow-500 text-white px-4 py-2 rounded-lg hover:bg-yellow-600">Edit</a>
                            <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                        onclick="return confirm('Are you sure?')"
                                        class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="px-6 py-4 text-center text-gray-500">No employees found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
