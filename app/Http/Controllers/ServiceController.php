<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
//     public function index(Request $request)
// {

//     $query = Service::query();

//     if ($request->has('search')) {
//         $query->where('name', 'like', '%' . $request->search . '%');
//     }

//     if ($request->has('category')) {
//         $query->where('category', $request->category);
//     }

//     $services = Service::all();
//     return view('services.index', compact('services'));
// }

// public function show($id)
// {
//     $service = Service::findOrFail($id);
//     return view('services.show', compact('service'));
// }


    // Display a list of services
    public function index()
    {
        $services = Service::all(); // You can customize this to paginate
        return view('services.index', compact('services'));
    }

    // Show the form to create a new service
    public function create()
    {
        return view('services.create');
    }

    // Store a new service
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'price' => 'required|numeric',
            // Add other fields and validation rules as needed
        ]);

        Service::create($validated);

        return redirect()->route('services.index')->with('success', 'Service created successfully!');
    }

    // Show a single service's details
    public function show($id)
    {
        $service = Service::findOrFail($id);
        return view('services.show', compact('service'));
    }

    // Show the form to edit an existing service
    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view('services.edit', compact('service'));
    }

    // Update an existing service
    public function update(Request $request, $id)
    {
        $service = Service::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'price' => 'required|numeric',
            // Add other fields and validation rules as needed
        ]);

        $service->update($validated);

        return redirect()->route('services.index')->with('success', 'Service updated successfully!');
    }

    // Delete a service
    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        $service->delete();

        return redirect()->route('services.index')->with('success', 'Service deleted successfully!');
    }
}


