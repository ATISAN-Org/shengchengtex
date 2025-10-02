<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Expense;
use App\Models\Employee;

class ReportController extends Controller
{
    public function index(Request $request)
    {
        // Filters
        $startDate = $request->input('start_date', now()->startOfMonth()->toDateString());
        $endDate   = $request->input('end_date', now()->toDateString());
        $employeeId = $request->input('employee_id');
        $expenseType = $request->input('type');

        // Base query
        $query = Expense::whereBetween('expense_date', [$startDate, $endDate]);

        if ($employeeId) {
            $query->where('employee_id', $employeeId);
        }

        if ($expenseType) {
            $query->where('type', $expenseType);
        }

        $expenses = $query->orderBy('expense_date')->get();

        $totalExpenses = $expenses->sum('amount');

        // Salaries
        $employeeCosts = Employee::when($employeeId, function ($q) use ($employeeId) {
            $q->where('id', $employeeId);
        })->sum('salary');

        $employees = Employee::all();
        $types = Expense::select('type')->distinct()->pluck('type');

        return view('admin.reports.index', compact(
            'expenses', 'totalExpenses', 'employeeCosts',
            'startDate', 'endDate', 'employees', 'types',
            'employeeId', 'expenseType'
        ));
    }
}
