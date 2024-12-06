<?php

namespace App\Http\Controllers;

class SalesController extends Controller
{
    /**
     * Display a listing of sales.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Temporary sales data
        $data = [
            [
                'sale_id' => 1,
                'date' => '2024-10-27',
                'payment_type' => 'Credit',
                'total_amount' => 552.65,
            ],
            [
                'sale_id' => 2,
                'date' => '2024-11-05',
                'payment_type' => 'Cash',
                'total_amount' => 1020.40,
            ],
            [
                'sale_id' => 3,
                'date' => '2024-11-12',
                'payment_type' => 'Credit',
                'total_amount' => 880.20,
            ],
        ];

        // Define table columns
        $columns = ['Sale ID', 'Date', 'Payment Type', 'Total Amount'];

        // Define title
        $title = 'Sales';

        // Define Action Buttons
        $actions = [
            [
                'label' => 'View Details',
                'icon' => '<path d="M12 4v16m8-8H4" />', // Icon for "View Details"
                'color' => 'bg-green-700',
                'hoverColor' => 'bg-green-900',
                //Create lng kag route dria and other functions ayaw kalimta pud ang TableLayout component kay naa draa ang functions na ipasa sa views

            ],

        ];

        $createRoute = 'sales.create';

        return view('sales.index', compact('data', 'columns', 'title', 'actions', 'createRoute'));
    }
}
