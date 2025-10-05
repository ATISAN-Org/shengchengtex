<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::latest()->get();
        return view('admin.clients.index', compact('clients'));
    }

    public function create()
    {
        return view('admin.clients.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'testimonial' => 'nullable|string',
            'type' => 'required|in:international,bangladeshi',

        ]);

        $path = null;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . preg_replace('/\s+/', '_', $file->getClientOriginalName());
            $destinationPath = public_path('uploads/clients');

            // Create directory if not exists
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }

            // Move uploaded file to public/uploads/clients
            $file->move($destinationPath, $filename);

            // Save relative path to database
            $path = 'uploads/clients/' . $filename;
        }

        Client::create([
            'name' => $request->name,
            'image' => $path,
            'testimonial' => $request->testimonial,
            'type' => $request->type,
        ]);

        return redirect()->route('clients.index')->with('success', 'Client added successfully!');
    }


    public function edit(Client $client)
    {
        return view('admin.clients.edit', compact('client'));
    }

    public function update(Request $request, Client $client)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'testimonial' => 'nullable|string',
            'type' => 'required|in:international,bangladeshi',

        ]);

        $path = $client->image;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . preg_replace('/\s+/', '_', $file->getClientOriginalName());
            $destinationPath = public_path('uploads/clients');

            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }

            $file->move($destinationPath, $filename);
            $path = 'uploads/clients/' . $filename;
        }

        $client->update([
            'name' => $request->name,
            'image' => $path,
            'testimonial' => $request->testimonial,
        ]);

        return redirect()->route('clients.index')->with('success', 'Client updated successfully!');
    }


}
