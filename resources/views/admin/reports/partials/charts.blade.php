<!-- Summary -->
<div class="grid grid-cols-2 gap-6 mb-6">
    <div class="bg-white p-6 shadow rounded">
        <h3 class="text-lg font-semibold">Total Expenses</h3>
        <p class="text-2xl font-bold text-red-600">${{ number_format($totalExpenses, 2) }}</p>
    </div>
    <div class="bg-white p-6 shadow rounded">
        <h3 class="text-lg font-semibold">Total Employee Salaries</h3>
        <p class="text-2xl font-bold text-green-600">${{ number_format($employeeCosts, 2) }}</p>
    </div>
</div>

<!-- Charts -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
    <!-- Pie Chart -->
    <div class="bg-white shadow rounded p-6">
        <h3 class="text-lg font-semibold mb-4">Expenses vs Salaries</h3>
        <canvas id="pieChart"></canvas>
    </div>

    <!-- Bar Chart -->
    <div class="bg-white shadow rounded p-6">
        <h3 class="text-lg font-semibold mb-4">Expenses by Date</h3>
        <canvas id="barChart"></canvas>
    </div>
</div>

<!-- Expense Table -->
<div class="bg-white shadow rounded p-6">
    <h3 class="text-lg font-semibold mb-4">Expenses</h3>
    <table class="w-full border-collapse border">
        <thead>
            <tr class="bg-gray-200">
                <th class="border px-4 py-2">Title</th>
                <th class="border px-4 py-2">Amount</th>
                <th class="border px-4 py-2">Date</th>
                <th class="border px-4 py-2">Type</th>
            </tr>
        </thead>
        <tbody>
            @foreach($expenses as $expense)
            <tr>
                <td class="border px-4 py-2">{{ $expense->title }}</td>
                <td class="border px-4 py-2">${{ number_format($expense->amount, 2) }}</td>
                <td class="border px-4 py-2">{{ $expense->expense_date }}</td>
                <td class="border px-4 py-2">{{ ucfirst($expense->type) }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script>
    const pieCtx = document.getElementById('pieChart');
    new Chart(pieCtx, {
        type: 'pie',
        data: {
            labels: ['Expenses', 'Salaries'],
            datasets: [{
                data: [{{ $totalExpenses }}, {{ $employeeCosts }}],
                backgroundColor: ['#f87171', '#34d399']
            }]
        }
    });

    const barCtx = document.getElementById('barChart');
    new Chart(barCtx, {
        type: 'bar',
        data: {
            labels: @json($expenses->pluck('expense_date')),
            datasets: [{
                label: 'Expense Amount',
                data: @json($expenses->pluck('amount')),
                backgroundColor: '#60a5fa'
            }]
        },
        options: { scales: { y: { beginAtZero: true } } }
    });
</script>
