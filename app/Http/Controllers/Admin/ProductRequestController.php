<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductRequest;

class ProductRequestController extends Controller
{
    public function index()
    {
        $requests = ProductRequest::with('product')->latest()->paginate(20);
        return view('admin.product-requests.index', compact('requests'));
    }

    public function show(ProductRequest $request)
    {
        $request->load('product'); // eager load product relation
        return view('admin.product-requests.show', compact('request'));
    }
}
