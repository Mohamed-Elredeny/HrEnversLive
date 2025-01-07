<?php
namespace App\Http\Controllers\Employee;
use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function searchAjax(Request $request)
    {
        $query = $request->get('q', ''); // Default to empty string if no query

        $employees = Employee::where('empName', 'like', '%' . $query . '%')
            ->orWhere('empCode', 'like', '%' . $query . '%')
            ->select('id', 'empName', 'empCode') // Select necessary fields
            ->limit(10) // Limit the results
            ->get();

        $results = $employees->map(function ($employee) {
            return [
                'id' => $employee->id,
                'text' => $employee->empCode . ' - ' . $employee->empName
            ];
        });

        return response()->json([
            'items' => $results,
            'pagination' => [
                'more' => false // Set to true if you want to enable infinite scroll
            ]
        ]);
    }

}
