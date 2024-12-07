<?php

namespace App\Http\Controllers;
use App\Models\User;

class EmployeesController extends Controller
{
    /**
     * Display a listing of employees.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Dri magpass kag data from db gi array lng nako para makita ang sample
        // Employee data
        $employees = User::whereIn('RoleID', [1, 2])->get();

        $data = $employees->map(function ($employee) {
            return [
                'First Name' => $employee->FirstName,
                'Last Name' => $employee->LastName,
                'Email' => $employee->Email,
                'Role' => $employee->RoleID == 1 ? 'Admin' : 'Employee',
                'Account Creation Date' => $employee->created_at->format('d M, Y H:i'),
            ];
        });

        $columns = ['FirstName', 'LastName', 'Email', 'Position', 'Hire Date'];

        $title = 'Employees & Admins';

        // Action Buttons
        $actions = [
            [
                'label' => 'Remove',
                'icon' => '<path d="M4 7h16M10 11v6M14 11v6M5 7v12a2 2 0 002 2h10a2 2 0 002-2V7M9 7V5a2 2 0 012-2h2a2 2v2z" />',
                'color' => 'bg-red-600',
                'hoverColor' => 'bg-red-700',
            ],
        ];

        // $filter = ['Status', 'Category'];
        return view('personnel.employees.index', compact('data', 'columns', 'title', 'actions'));
    }
}
