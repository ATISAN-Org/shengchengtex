<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Client;

class LandingController extends Controller
{
    /**
     * Display the landing/home page.
     */
    public function index()
    {
        $categories = Category::all();
        $clients = Client::all();
        $products = Product::take(6)->get(); 
        return view('landing', compact('categories', 'clients', 'products'));
    }

    /**
     * Display products page.
     */
    public function products(Request $request)
    {
        $categories = Category::all();

        $query = Product::query();
        $products = Product::all();

        if ($request->filled('category')) {
            $query->where('category_id', $request->category);
        }
        if ($request->filled('color')) {
            $query->where('color', 'like', '%' . $request->color . '%');
        }
        if ($request->filled('type')) {
            $query->where('type', 'like', '%' . $request->type . '%');
        }
        if ($request->filled('fabric_name')) {
            $query->where('fabric_name', 'like', '%' . $request->fabric_name . '%');
        }
        if ($request->filled('price_min')) {
            $query->where('price', '>=', $request->price_min);
        }
        if ($request->filled('price_max')) {
            $query->where('price', '<=', $request->price_max);
        }

        $products = $query->paginate(12)->withQueryString(); // maintain filters in pagination

        return view('components.products', compact('categories', 'products'));
    }



    /**
     * Display About Us page.
     */
    public function about()
    {
        return view('components.about');
    }

    /**
     * Display Contact page.
     */
    public function contact()
    {
        return view('components.contact'); // Changed from footer to contact
    }


    public function submitContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        Contact::create($validated); // save to DB

        return back()->with('success', 'Your message has been submitted successfully.');
    }
    public function productDetails(Product $product)
    {
        $categories = Category::all(); // optional: show categories in sidebar/filter
        return view('components.product-details', compact('product', 'categories'));
    }



}
