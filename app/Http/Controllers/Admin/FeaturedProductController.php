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
        $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'price' => ['nullable', 'string', 'regex:/^\d+(\.\d{1,2})?$/'],
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);
        $data = $request->all();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $webroot = isset($_SERVER['DOCUMENT_ROOT']) && $_SERVER['DOCUMENT_ROOT'] ? rtrim($_SERVER['DOCUMENT_ROOT'], '/') : public_path();
            $destinationDir = $webroot . '/uploads/featured_products';
            if (!file_exists($destinationDir)) {
                mkdir($destinationDir, 0755, true);
            }
            $file->move($destinationDir, $filename);
            $data['image'] = 'uploads/featured_products/' . $filename;
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
        $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'price' => ['nullable', 'string', 'regex:/^\d+(\.\d{1,2})?$/'],
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);
        $data = $request->all();
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($featured_product->image) {
                $oldRelative = ltrim($featured_product->image, '/');
                $pathsToCheck = [
                    public_path($oldRelative),
                    storage_path('app/public/' . $oldRelative),
                ];
                if (isset($_SERVER['DOCUMENT_ROOT']) && $_SERVER['DOCUMENT_ROOT']) {
                    $pathsToCheck[] = rtrim($_SERVER['DOCUMENT_ROOT'], '/') . '/' . $oldRelative;
                }
                foreach ($pathsToCheck as $p) {
                    if ($p && file_exists($p)) {
                        @unlink($p);
                    }
                }
            }
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $webroot = isset($_SERVER['DOCUMENT_ROOT']) && $_SERVER['DOCUMENT_ROOT'] ? rtrim($_SERVER['DOCUMENT_ROOT'], '/') : public_path();
            $destinationDir = $webroot . '/uploads/featured_products';
            if (!file_exists($destinationDir)) {
                mkdir($destinationDir, 0755, true);
            }
            $file->move($destinationDir, $filename);
            $data['image'] = 'uploads/featured_products/' . $filename;
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
