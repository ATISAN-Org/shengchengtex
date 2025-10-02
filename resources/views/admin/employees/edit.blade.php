@extends('admin.layout')

@section('title', 'Edit Employee')
@section('page-title', 'Edit Employee')

@section('content')
<div class="container mx-auto px-6 py-8">
    <h2 class="text-3xl font-bold text-gray-800 mb-6">Edit Employee</h2>

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

    {{-- Edit Employee Form --}}
    <form action="{{ route('employees.update', $employee->id) }}" method="POST"
          class="bg-white rounded-xl shadow-lg p-8 space-y-6">
        @csrf
        @method('PUT')

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            {{-- Name --}}
            <div>
                <label class="block mb-2 font-semibold">Name</label>
                <input type="text" name="name" value="{{ old('name', $employee->name) }}"
                       class="w-full border px-4 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-400" required>
            </div>

            {{-- Email --}}
            <div>
                <label class="block mb-2 font-semibold">Email</label>
                <input type="email" name="email" value="{{ old('email', $employee->email) }}"
                       class="w-full border px-4 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-400" required>
            </div>

            {{-- Phone --}}
            <div>
                <label class="block mb-2 font-semibold">Phone</label>
                <input type="text" name="phone" value="{{ old('phone', $employee->phone) }}"
                       class="w-full border px-4 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-400">
            </div>

            {{-- Position --}}
            <div>
                <label class="block mb-2 font-semibold">Position</label>
                <input type="text" name="position" value="{{ old('position', $employee->position) }}"
                       class="w-full border px-4 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-400" required>
            </div>

            {{-- Salary --}}
            <div>
                <label class="block mb-2 font-semibold">Salary</label>
                <input type="number" name="salary" value="{{ old('salary', $employee->salary) }}"
                       class="w-full border px-4 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-400">
            </div>
        </div>

        {{-- Submit Button --}}
        <div class="pt-4">
            <button type="submit"
                class="bg-green-600 text-white px-6 py-3 rounded-lg shadow hover:bg-green-700 transition duration-300">
                Update Employee
            </button>
        </div>
    </form>
</div>
@endsection
