@extends('admin.layout')

@section('title', 'Add Employee')
@section('page-title', 'Add Employee')

@section('content')
<div class="container mx-auto px-6 py-8">
    <h2 class="text-3xl font-bold text-gray-800 mb-6">Add Employee</h2>

    {{-- Display Validation Errors --}}
    @if ($errors->any())
        <div class="bg-red-100 text-red-700 px-4 py-3 rounded-lg mb-6">
            <ul class="list-disc ml-6">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Employee Form --}}
    <form action="{{ route('employees.store') }}" method="POST"
          class="bg-white rounded-xl shadow-lg p-8 space-y-6">
        @csrf

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            {{-- Name --}}
            <div>
                <label class="block mb-2 font-semibold">Name</label>
                <input type="text" name="name" value="{{ old('name') }}"
                       class="w-full border px-4 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" required>
            </div>

            {{-- Email --}}
            <div>
                <label class="block mb-2 font-semibold">Email</label>
                <input type="email" name="email" value="{{ old('email') }}"
                       class="w-full border px-4 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" required>
            </div>

            {{-- Phone --}}
            <div>
                <label class="block mb-2 font-semibold">Phone</label>
                <input type="text" name="phone" value="{{ old('phone') }}"
                       class="w-full border px-4 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            {{-- Position --}}
            <div>
                <label class="block mb-2 font-semibold">Position</label>
                <input type="text" name="position" value="{{ old('position') }}"
                       class="w-full border px-4 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" required>
            </div>

            {{-- Salary --}}
            <div>
                <label class="block mb-2 font-semibold">Salary</label>
                <input type="number" name="salary" value="{{ old('salary') }}"
                       class="w-full border px-4 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>
        </div>

        {{-- Submit Button --}}
        <div class="pt-4">
            <button type="submit"
                class="bg-blue-600 text-white px-6 py-3 rounded-lg shadow hover:bg-blue-700 transition duration-300">
                Save Employee
            </button>
        </div>
    </form>
</div>
@endsection
