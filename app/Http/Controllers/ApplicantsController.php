<?php

namespace App\Http\Controllers;

class ApplicantsController extends Controller
{
    public function index()
    {
        // Dri magpass kag data from db gi array lng nako para makita ang sample

        $data = [
            ['Christina', 'Bersh', 'christina@site.com', '28 Dec, 12:12'],
            ['David', 'Harrison', 'david@site.com', '20 Dec, 09:27'],
            ['Anne', 'Richard', 'anne@site.com', '18 Dec, 15:20'],
        ];

        $columns = ['First Name', 'Last Name', 'Email', 'Application Date'];
        $title = 'Applicants';

        //This is for Applicant Action Buttons
        $actions = [
            [
                'label' => 'Approve',
                'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />',
                'color' => 'bg-green-700',
                'hoverColor' => 'bg-green-900',
            ],
            [
                'label' => 'Remove',
                'icon' => '<path d="M4 7h16M10 11v6M14 11v6M5 7v12a2 2 0 002 2h10a2 2 0 002-2V7M9 7V5a2 2 0 012-2h2a2 2 0 012 2v2" />',
                'color' => 'bg-red-600',
                'hoverColor' => 'bg-red-700',
            ],
        ];

        // $filter = ['Status', 'Category'];

        return view('personnel.applicants.index', compact('data', 'columns', 'title', 'actions'));
    }
}
