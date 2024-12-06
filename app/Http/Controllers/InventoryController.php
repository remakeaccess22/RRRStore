<?php

namespace App\Http\Controllers;

// Assuming you have a Product model.

class InventoryController extends Controller
{
    /**
     * Display the inventory.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Fetch inventory data from the database
        $data = [
            [
                'ProductID' => 1,
                'ProductName' => 'Apple Juice',
                'Category' => 'Beverages',
                'StockAvailable' => 50,
                'UnitPrice' => 5.99,
            ],
            [
                'ProductID' => 2,
                'ProductName' => 'Orange Juice',
                'Category' => 'Beverages',
                'StockAvailable' => 35,
                'UnitPrice' => 4.49,
            ],
            [
                'ProductID' => 3,
                'ProductName' => 'Milk',
                'Category' => 'Dairy',
                'StockAvailable' => 20,
                'UnitPrice' => 2.99,
            ],
            [
                'ProductID' => 4,
                'ProductName' => 'Bread',
                'Category' => 'Bakery',
                'StockAvailable' => 100,
                'UnitPrice' => 1.49,
            ],
            [
                'ProductID' => 5,
                'ProductName' => 'Butter',
                'Category' => 'Dairy',
                'StockAvailable' => 40,
                'UnitPrice' => 3.99,
            ],
        ];

        $columns = [
            'Product ID',
            'Product Name',
            'Category',
            'Stock Available',
            'Unit Price',
        ];

        $title = 'Inventory';

        // Actions (if needed for the inventory)
        $actions = [
            [
                'label' => 'View',
                'icon' => '<path d="M12 4v16m8-8H4" />',
                'color' => 'bg-green-700',
                'hoverColor' => 'bg-green-900',
            ],
            [
                'label' => 'Edit',
                'icon' => '<path d="M12 20h9"></path><path d="M16.5 3.5l4 4"></path><path d="M14 6l6 6"></path>',
                'color' => 'bg-yellow-500',
                'hoverColor' => 'bg-yellow-600',
            ],
            [
                'label' => 'Remove',
                'icon' => '<path d="M4 7h16M10 11v6M14 11v6M5 7v12a2 2 0 002 2h10a2 2 0 002-2V7M9 7V5a2 2 0 012-2h2a2 2 0 012 2v2" />',
                'color' => 'bg-red-600',
                'hoverColor' => 'bg-red-700',
            ],
        ];

        $createRoute = 'inventory.create';

        return view('inventory.index', compact('data', 'columns', 'title', 'actions', 'createRoute'));
    }
}
