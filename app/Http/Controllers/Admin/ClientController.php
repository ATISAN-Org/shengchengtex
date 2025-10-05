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
        ]);

        $path = null;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();

            // Save directly to public/storage/clients
            if (!file_exists(public_path('storage/clients'))) {
                mkdir(public_path('storage/clients'), 0755, true);
            }

            $file->move(public_path('storage/clients'), $filename);
            $path = 'clients/' . $filename; // store relative path in DB
        }

        Client::create([
            'name' => $request->name,
            'image' => $path,
            'testimonial' => $request->testimonial,
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
        ]);

        $path = $client->image;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();

            if (!file_exists(public_path('storage/clients'))) {
                mkdir(public_path('storage/clients'), 0755, true);
            }

            $file->move(public_path('storage/clients'), $filename);
            $path = 'clients/' . $filename;
        }

        $client->update([
            'name' => $request->name,
            'image' => $path,
            'testimonial' => $request->testimonial,
        ]);

        return redirect()->route('clients.index')->with('success', 'Client updated successfully!');
    }

}
