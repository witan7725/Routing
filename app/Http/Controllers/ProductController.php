<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;


class ProductController extends Controller
{


    private $products = [
        [
            'id' => 1,
            'name' => 'Laptop',
            'description' => 'High-performance laptop',
            'price' => 1500,
            'image' => 'images/1labtop.webp'
        ],
        [
            'id' => 2,
            'name' => 'Smartphone',
            'description' => 'Latest smartphone with great features',
            'price' => 800,
            'image' => 'images/2smartphone.webp'
        ],
        [
            'id' => 3,
            'name' => 'Tablet',
            'description' => 'Portable tablet for everyday use',
            'price' => 500,
            'image' => 'images/3tablet.webp'
        ],
        [
            'id' => 4,
            'name' => 'Airpods',
            'description' => 'Portable tablet for everyday use',
            'price' => 800,
            'image' => 'images/4airpods.webp'
        ],
        [
            'id' => 5,
            'name' => 'Smartwatch',
            'description' => 'Smartwatch with various features',
            'price' => 300,
            'image' => 'images/5smartwatch.webp'
        ],
        [
            'id' => 6,
            'name' => 'Camera',
            'description' => 'High resolution camera',
            'price' => 1200,
            'image' => 'images/6cam.webp'
        ],
        [
            'id' => 7,
            'name' => 'Printer',
            'description' => 'All-in-one printer',
            'price' => 150,
            'image' => 'images/7printer.webp'
        ],
        [
            'id' => 8,
            'name' => 'Monitor',
            'description' => '4K Ultra HD monitor',
            'price' => 400,
            'image' => 'images/8monitor.webp'
        ],
        [
            'id' => 9,
            'name' => 'Keyboard',
            'description' => 'Mechanical keyboard',
            'price' => 100,
            'image' => 'images/9keyboard.webp'
        ],
        [
            'id' => 10,
            'name' => 'Mouse',
            'description' => 'Wireless mouse',
            'price' => 50,
            'image' => 'images/mouse.webp'
        ],

    ];






    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return inertia::render('Products/Index', ['products' => $this->products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $product = collect($this->products)->firstWhere('id', $id);

        if (!$product) {
            abort(404, 'Product not found');
        }

        return Inertia::render('Products/Show', ['product' => $product]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
