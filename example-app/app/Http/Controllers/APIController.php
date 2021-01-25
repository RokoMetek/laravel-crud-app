<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class APIController extends Controller
{
    //
    public function getEmployees() {
        $query = Employee::all();
        return datatables($query)->make(true);
    }

    public function getAllEmployees() {
        $employees = Employee::all();
        return response()->json($employees);
    }
}
