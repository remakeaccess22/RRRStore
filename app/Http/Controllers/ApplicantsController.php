<?php

namespace App\Http\Controllers;

class ApplicantsController extends Controller
{
    public function index()
    {
        $data = [
            ['Christina', 'Bersh', 'christina@site.com', '28 Dec, 12:12'],
            ['David', 'Harrison', 'david@site.com', '20 Dec, 09:27'],
            ['Anne', 'Richard', 'anne@site.com', '18 Dec, 15:20'],
        ];

        $columns = ['First Name', 'Last Name', 'Email', 'Application Date'];
        $title = 'Applicants';

        return view('personnel.applicants.index', compact('data', 'columns', 'title'));
    }
}
