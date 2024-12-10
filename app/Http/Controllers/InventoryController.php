<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

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
        $data = Product::all(); // Retrieve all products from the database

        $columns = [
            'Product ID',
            'Product Name',
            'Category',
            'Stock Available',
            'Unit Price',
        ];

        $title = 'Inventory';

        // Actions
        $actions = [
            [
                'label' => 'View',
                'icon' => '<path d="M12 4v16m8-8H4" />',
                'color' => 'bg-green-700',
                'hoverColor' => 'bg-green-900',
                'action' => 'inventory.view',
                'method' => 'GET',
            ],
            [
                'label' => 'Edit',
                'icon' => '<path d="M12 20h9"></path><path d="M16.5 3.5l4 4"></path><path d="M14 6l6 6"></path>',
                'color' => 'bg-yellow-500',
                'hoverColor' => 'bg-yellow-600',
                'action' => 'inventory.edit',
                'method' => 'GET',
            ],
            [
                'label' => 'Remove',
                'icon' => '<path d="M4 7h16M10 11v6M14 11v6M5 7v12a2 2 0 002 2h10a2 2 0 002-2V7M9 7V5a2 2 0 012-2h2a2 2 0 012 2v2" />',
                'color' => 'bg-red-600',
                'hoverColor' => 'bg-red-700',
                'action' => 'inventory.destroy',
                'method' => 'POST',
                'methodByCSRF' => 'DELETE', // Use proper HTTP method
            ],
        ];

        $createRoute = 'inventory.create';

        return view('inventory.index', compact('data', 'columns', 'title', 'actions', 'createRoute'));
    }

    /**
     * Show the form to create a new product.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('inventory.create');
    }

    /**
     * Store a new product in the database.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'product_name' => 'required|string|max:255',
            'product_category' => 'required|string|max:255',
            'product_subcategory' => 'required|string|max:255',
            'product_description' => 'required|string',
            'quantity' => 'required|integer|min:1',
            'supplier' => 'required|string|max:255',
            'brand' => 'required|string|max:255',
            'unit_price' => 'required|numeric|min:0',
            'base_price' => 'required|numeric|min:0',
        ]);

        Product::create([
            'ProductName' => $validated['product_name'],
            'CategoryID' => $validated['product_category'],
            'SubcategoryID' => $validated['product_subcategory'],
            'Description' => $validated['product_description'],
            'QuantityInStock' => $validated['quantity'],
            'SupplierID' => $validated['supplier'],
            'BrandID' => $validated['brand'],
            'UnitPrice' => $validated['unit_price'],
            'BasePrice' => $validated['base_price'],
        ]);

        return redirect()->route('inventory')->with('success', 'Product added successfully.');
    }

    /**
     * Show the form to edit a product.
     *
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id); // Ensure the product exists
        return view('inventory.edit', compact('product'));
    }

    /**
     * View product details.
     *
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function view($id)
    {
        $product = Product::findOrFail($id); // Ensure the product exists
        return view('inventory.view', compact('product'));
    }

    /**
     * Delete a product from the database.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('inventory.index')->with('success', 'Product deleted successfully');
    }
}
