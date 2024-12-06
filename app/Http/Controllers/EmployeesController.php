<?php

namespace App\Http\Controllers;

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
        $data = [
            [
                'first_name' => 'John',
                'last_name' => 'Doe',
                'email' => 'john.doe@site.com',
                'position' => 'Employee',
                'hire_date' => '01 Jan, 10:00',
            ],
            [
                'first_name' => 'Jane',
                'last_name' => 'Smith',
                'email' => 'jane.smith@site.com',
                'position' => 'Employee',
                'hire_date' => '15 Feb, 14:45',
            ],
            [
                'first_name' => 'Michael',
                'last_name' => 'Johnson',
                'email' => 'michael.j@site.com',
                'position' => 'Employee',
                'hire_date' => '28 Mar, 09:30',
            ],
        ];

        $columns = ['First Name', 'Last Name', 'Email', 'Position', 'Hire Date'];

        $title = 'Employees';

        // Action Buttons
        $actions = [
            [
                'label' => 'Remove',
                'icon' => '<path d="M4 7h16M10 11v6M14 11v6M5 7v12a2 2 0 002 2h10a2 2 0 002-2V7M9 7V5a2 2 0 012-2h2a2 2 0 012 2v2" />',
                'color' => 'bg-red-600',
                'hoverColor' => 'bg-red-700',
            ],
        ];

        // $filter = ['Status', 'Category'];

        return view('personnel.employees.index', compact('data', 'columns', 'title', 'actions'));
    }
}
