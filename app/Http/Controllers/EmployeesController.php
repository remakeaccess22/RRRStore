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

        return view('personnel.employees.index', compact('data', 'columns', 'title'));
    }
}
