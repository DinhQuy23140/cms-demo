<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::paginate(10);
        return view('manage_marca', compact('brands'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'brand_name' => 'required|string|max:255',
            'active' => 'boolean',
        ]);

        $brand = Brand::create([
            'brand_name' => $request->brand_name,
            'active' => $request->active ?? true,
        ]);

        return response()->json(['message' => 'Brand created successfully', 'brand' => $brand], 201);
    }

    // Add other methods as needed
}