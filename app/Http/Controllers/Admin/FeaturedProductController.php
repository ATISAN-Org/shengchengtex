<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FeaturedProduct;
use App\Models\Category;
use Illuminate\Http\Request;

class FeaturedProductController extends Controller
{
    public function index()
    {
        $products = FeaturedProduct::with('category')->get();
        return view('admin.featured_products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.featured_products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'price' => 'required|numeric',
            'image' => 'nullable|file|image|max:2048',
            'composition' => 'nullable|string',
            'color' => 'nullable|string',
            'width' => 'nullable|string',
            'reference_no' => 'nullable|string',
            'fabric_name' => 'nullable|string',
            'type' => 'nullable|string',
            'samples' => 'nullable|string',
            'origin' => 'nullable|string',
            'moq' => 'nullable|string',
            'export' => 'nullable|string',
            'weight' => 'nullable|string',
            'package' => 'nullable|string',
            'capacity' => 'nullable|string',
            'format' => 'nullable|string',
            'payment_terms' => 'nullable|string',
            'delivery_time' => 'nullable|string',
            'port_in_bd' => 'nullable|string',
            'basic_info' => 'nullable|string',
        ]);
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('uploads/products', 'public');
        }
        FeaturedProduct::create($data);
        return redirect()->route('featured_products.index')->with('success', 'Featured product added successfully.');
    }

    public function edit(FeaturedProduct $featured_product)
    {
        $categories = Category::all();
        return view('admin.featured_products.edit', compact('featured_product', 'categories'));
    }

    public function update(Request $request, FeaturedProduct $featured_product)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'price' => 'required|numeric',
            'image' => 'nullable|file|image|max:2048',
            'composition' => 'nullable|string',
            'color' => 'nullable|string',
            'width' => 'nullable|string',
            'reference_no' => 'nullable|string',
            'fabric_name' => 'nullable|string',
            'type' => 'nullable|string',
            'samples' => 'nullable|string',
            'origin' => 'nullable|string',
            'moq' => 'nullable|string',
            'export' => 'nullable|string',
            'weight' => 'nullable|string',
            'package' => 'nullable|string',
            'capacity' => 'nullable|string',
            'format' => 'nullable|string',
            'payment_terms' => 'nullable|string',
            'delivery_time' => 'nullable|string',
            'port_in_bd' => 'nullable|string',
            'basic_info' => 'nullable|string',
        ]);
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('uploads/products', 'public');
        }
        $featured_product->update($data);
        return redirect()->route('featured_products.index')->with('success', 'Featured product updated successfully.');
    }

    public function destroy(FeaturedProduct $featured_product)
    {
        $featured_product->delete();
        return redirect()->route('featured_products.index')->with('success', 'Featured product deleted successfully.');
    }
}
