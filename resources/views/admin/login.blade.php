<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gray-100 flex items-center justify-center p-4">
    <div class="w-full max-w-sm bg-white rounded-2xl shadow p-6">
        <h1 class="text-xl font-bold text-center mb-6">Admin Login</h1>

        @if (session('login_error'))
            <div class="mb-4 rounded bg-red-50 text-red-700 px-4 py-2 text-sm">
                {{ session('login_error') }}
            </div>
        @endif

        <form method="POST" action="{{ route('admin.login.submit') }}" class="space-y-4">
            @csrf
            <div>
                <label class="block text-sm text-gray-700 mb-1">Email</label>
                <input type="text" name="email" value="{{ old('email') }}" required
                       class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-orange-400" placeholder="Enter email" />
            </div>
            <div>
                <label class="block text-sm text-gray-700 mb-1">Password</label>
                <input type="password" name="password" required
                       class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-orange-400" placeholder="Enter password" />
            </div>
            <button type="submit" class="w-full bg-orange-600 hover:bg-orange-700 text-white font-semibold rounded-lg py-2">Login</button>
        </form>
    </div>
</body>
</html>
 
