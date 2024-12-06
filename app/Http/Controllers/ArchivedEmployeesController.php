<?php

namespace App\Http\Controllers;

class ArchivedEmployeesController extends Controller
{
    /**
     * Display archived employees.
     */
    public function index()
    {
        // Dummy data for archived employees
        $data = [
            [

                'FirstName' => 'John',
                'LastName' => 'Doe',
                'Email' => 'john.doe@example.com',
                'Position' => 'Employee',
                'HireDate' => '2023-10-12',
            ],
            [

                'FirstName' => 'Jane',
                'LastName' => 'Smith',
                'Email' => 'jane.smith@example.com',
                'Position' => 'Manager',
                'HireDate' => '2021-08-15',
            ],
            [

                'FirstName' => 'Alice',
                'LastName' => 'Johnson',
                'Email' => 'alice.johnson@example.com',
                'Position' => 'Developer',
                'HireDate' => '2020-05-23',
            ],
            [
                'FirstName' => 'Bob',
                'LastName' => 'Williams',
                'Email' => 'bob.williams@example.com',
                'Position' => 'Designer',
                'HireDate' => '2022-11-01',
            ],
        ];

        $title = 'Archived Employees';
        $columns = ['First Name', 'Last Name', 'Email', 'Position', 'Hire Date'];

        $actions = [
            [
                'label' => 'Restore',
                'icon' => '<path d="M12 19l9 2-9-18-9 18 9-2z" />',
                'color' => 'bg-green-700',
                'hoverColor' => 'bg-green-900',
            ],
        ];

        return view('archived.employees', compact('data', 'title', 'columns', 'actions'));
    }
}
