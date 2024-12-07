<?php

namespace App\Http\Controllers;
use App\Models\User;


class ApplicantsController extends Controller
{
    public function index()
    {
        $applicants = User::where('RoleID', 3)->get();

        $data = $applicants->map(function ($applicant) {
            return [
                'First Name' => $applicant->FirstName,
                'Last Name' => $applicant->LastName,
                'Email' => $applicant->Email,
                'Application Date' => $applicant->created_at->format('d M, H:i'),
            ];
        });

        $columns = ['First Name', 'Last Name', 'Email', 'Application Date'];
        $title = 'Applicants';

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

        return view('personnel.applicants.index', compact('data', 'columns', 'title', 'actions'));
    }

}
