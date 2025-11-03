<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Support\Facades\Schema;

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
            'local_type' => 'required_if:type,bangladeshi|nullable|in:buying_house,factory',

        ]);

        $path = null;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . preg_replace('/\s+/', '_', $file->getClientOriginalName());

            $webroot = isset($_SERVER['DOCUMENT_ROOT']) && $_SERVER['DOCUMENT_ROOT'] ? rtrim($_SERVER['DOCUMENT_ROOT'], '/') : public_path();
            $destinationPath = $webroot . '/uploads/clients';

            // Create directory if not exists
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }

            // Move uploaded file to webroot/uploads/clients
            $file->move($destinationPath, $filename);

            // Save relative path to database
            $path = 'uploads/clients/' . $filename;
        }

        $data = [
            'name' => $request->name,
            'image' => $path,
            'testimonial' => $request->testimonial,
            'type' => $request->type,
        ];

        // Only include local_type if the DB column exists to avoid QueryException before running migrations
        if (Schema::hasColumn('clients', 'local_type')) {
            $data['local_type'] = $request->local_type;
        }

        Client::create($data);

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
            'local_type' => 'required_if:type,bangladeshi|nullable|in:buying_house,factory',

        ]);

        $path = $client->image;

        if ($request->hasFile('image')) {
            if ($client->image) {
                $oldRelative = ltrim($client->image, '/');
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
            $filename = time() . '_' . preg_replace('/\s+/', '_', $file->getClientOriginalName());

            $webroot = isset($_SERVER['DOCUMENT_ROOT']) && $_SERVER['DOCUMENT_ROOT'] ? rtrim($_SERVER['DOCUMENT_ROOT'], '/') : public_path();
            $destinationPath = $webroot . '/uploads/clients';

            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }

            $file->move($destinationPath, $filename);
            $path = 'uploads/clients/' . $filename;
        }

        $data = [
            'name' => $request->name,
            'image' => $path,
            'testimonial' => $request->testimonial,
            'type' => $request->type,
        ];

        if (Schema::hasColumn('clients', 'local_type')) {
            $data['local_type'] = $request->local_type;
        }

        $client->update($data);

        return redirect()->route('clients.index')->with('success', 'Client updated successfully!');
    }

    /**
     * Remove the specified client from storage.
     */
    public function destroy(Client $client)
    {
        // Delete image if exists (check public, storage, and webserver document root)
        if ($client->image) {
            $oldRelative = ltrim($client->image, '/');
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

        $client->delete();

        return redirect()->route('clients.index')->with('success', 'Client deleted successfully!');
    }


}
