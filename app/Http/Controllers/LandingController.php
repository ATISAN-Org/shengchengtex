<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Client;
use Illuminate\Support\Facades\Mail;

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

        $products = $query->paginate(20)->withQueryString(); // maintain filters in pagination

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
            'phone' => 'nullable|string|max:50',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        $contact = Contact::create($validated); // save to DB

        // Send email to sagar@yrc-tex.cn
        Mail::raw(
            "New Purchase Request / Query:\n\n" .
            "Name: {$contact->name}\n" .
            "Email: {$contact->email}\n" .
            "Phone: {$contact->phone}\n" .
            "Subject: {$contact->subject}\n" .
            "Message: {$contact->message}",
            function ($message) use ($contact) {
                $message->to('sagar@yrc-tex.cn')
                        ->subject('New Purchase Request / Query from Website');
            }
        )->queue();

        return back()->with('success', 'Your message has been submitted successfully.');
    }
    public function productDetails(Product $product)
    {
        $categories = Category::all(); // optional: show categories in sidebar/filter
        return view('components.product-details', compact('product', 'categories'));
    }


    public function clientsMore()
    {
        // Get international clients
        $internationalClients = Client::where('type', 'international')->get();

        // Get Bangladeshi clients
        $bangladeshiClients = Client::where('type', 'bangladeshi')->get();

        // Get clients with testimonials
        $clientsWithTestimonials = Client::whereNotNull('testimonial')->get();

        // Return view with data
        return view('components.clients-more', compact(
            'internationalClients',
            'bangladeshiClients',
            'clientsWithTestimonials'
        ));
    }



}
