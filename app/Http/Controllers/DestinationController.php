<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    /**
     * READ - List Destinations
     */
    public function index()
    {
        $destinations = Destination::all();
        return view('destinations.index', compact('destinations'));
    }

    /**
     * CREATE - Form
     */
    public function create()
    {
        return view('destinations.create');
    }

    /**
     * STORE - Save Data
     */
    public function store(Request $request)
    {
        // ✅ VALIDASI
        $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|string', // sementara string dulu
        ]);

        // ✅ SIMPAN DATA (AMAN)
        Destination::create([
            'name' => $request->name,
            'location' => $request->location,
            'description' => $request->description,
            'image' => $request->image,
        ]);

        return redirect()
            ->route('destinations.index')
            ->with('success', 'Destinasi berhasil ditambahkan');
    }

    /**
     * READ - Detail
     */
    public function show(Destination $destination)
    {
        return view('destinations.show', compact('destination'));
    }

    /**
     * EDIT - Form
     */
    public function edit(Destination $destination)
    {
        return view('destinations.edit', compact('destination'));
    }

    /**
     * UPDATE - Save Changes
     */
    public function update(Request $request, Destination $destination)
    {
        // ✅ VALIDASI
        $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|string',
        ]);

        // ✅ UPDATE DATA
        $destination->update([
            'name' => $request->name,
            'location' => $request->location,
            'description' => $request->description,
            'image' => $request->image,
        ]);

        return redirect()
            ->route('destinations.index')
            ->with('success', 'Destinasi berhasil diperbarui');
    }

    /**
     * DELETE
     */
    public function destroy(Destination $destination)
    {
        $destination->delete();

        return redirect()
            ->route('destinations.index')
            ->with('success', 'Destinasi berhasil dihapus');
    }
}
