<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductRequest;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = \Cache::remember('products_page_' . request('page', 1), 3600, function () {
            return Product::with('category')->latest()->paginate(20);
        });
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'price' => ['nullable', 'string', 'regex:/^\d+(\.\d{1,2})?$/'],
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            // Other fields optional
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();

            $webroot = isset($_SERVER['DOCUMENT_ROOT']) && $_SERVER['DOCUMENT_ROOT'] ? rtrim($_SERVER['DOCUMENT_ROOT'], '/') : public_path();
            $destinationDir = $webroot . '/uploads/products';

            if (!file_exists($destinationDir)) {
                mkdir($destinationDir, 0755, true);
            }

            $file->move($destinationDir, $filename);
            $data['image'] = 'uploads/products/' . $filename;
        }

        Product::create($data);

        return redirect()->route('products.index')->with('success', 'Product added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('admin.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('admin.products.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'price' => ['nullable', 'string', 'regex:/^\d+(\.\d{1,2})?$/'],
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            // Other fields optional
        ]);

        $data = $request->all();

        // Handle image upload and store in the webserver document root 'uploads/products'
        if ($request->hasFile('image')) {
            // Delete old image if exists (check multiple possible locations)
            if ($product->image) {
                $oldRelative = ltrim($product->image, '/');
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
            $destinationDir = $webroot . '/uploads/products';
            if (!file_exists($destinationDir)) {
                mkdir($destinationDir, 0755, true);
            }
            $file->move($destinationDir, $filename);
            $data['image'] = 'uploads/products/' . $filename;
        }

        $product->update($data);

        return redirect()->route('products.index')->with('success', 'Product updated successfully!');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        // Delete image if exists (check public, storage, and webserver document root)
        if ($product->image) {
            $oldRelative = ltrim($product->image, '/');
            $publicPath = public_path($oldRelative);
            if (file_exists($publicPath)) {
                @unlink($publicPath);
            }

            $storagePath = storage_path('app/public/' . $oldRelative);
            if (file_exists($storagePath)) {
                @unlink($storagePath);
            }

            if (isset($_SERVER['DOCUMENT_ROOT']) && $_SERVER['DOCUMENT_ROOT']) {
                $docRootPath = rtrim($_SERVER['DOCUMENT_ROOT'], '/') . '/' . $oldRelative;
                if (file_exists($docRootPath)) {
                    @unlink($docRootPath);
                }
            }
        }

        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully!');
    }

    public function request(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:50',
            'subject' => 'nullable|string|max:255',
            'message' => 'nullable|string',
        ]);

        ProductRequest::create([
            'product_id' => $product->id,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        return back()->with('success', 'Your request has been sent successfully!');
    }
}
