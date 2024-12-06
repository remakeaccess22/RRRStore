<?php

namespace App\Http\Controllers;

class ArchivedProductsController extends Controller
{
    /**
     * Display archived products.
     */
    public function index()
    {
        // Dummy data for archived products
        $data = [
            ['ID' => 1, 'Name' => 'Laptop', 'Category' => 'Electronics', 'Stock' => 0, 'Price' => 1200.50],
            ['ID' => 2, 'Name' => 'Headphones', 'Category' => 'Accessories', 'Stock' => 0, 'Price' => 150.75],
        ];

        $title = 'Archived Products';
        $columns = [
            'Product ID',
            'Product Name',
            'Category',
            'Stock Available',
            'Unit Price',
        ];

        $actions = [
            [
                'label' => 'Restore',
                'icon' => '<path d="M12 19l9 2-9-18-9 18 9-2z" />',
                'color' => 'bg-green-700',
                'hoverColor' => 'bg-green-900',
            ],
        ];

        return view('archived.products', compact('data', 'title', 'columns', 'actions'));
    }
}
