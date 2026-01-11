<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DestinationController extends Controller
{
    /**
     * READ - List Destinations
     * 🔒 FIX: selalu 8 data (4 ke samping × 2 ke bawah)
     */
    public function index()
    {
        $destinations = Destination::latest()->paginate(8);
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
        $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $imagePath = $request->file('image')->store('destinations', 'public');

        Destination::create([
            'name' => $request->name,
            'location' => $request->location,
            'description' => $request->description,
            'image' => $imagePath,
        ]);

        return redirect()
            ->route('destinations.index')
            ->with('success', 'Destinasi berhasil ditambahkan');
    }

    /**
     * READ - Detail + Komentar
     */
    public function show(Destination $destination)
    {
        $destination->load('comments');
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
        $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->only('name', 'location', 'description');

        if ($request->hasFile('image')) {

            if ($destination->image) {
                Storage::disk('public')->delete($destination->image);
            }

            $data['image'] = $request->file('image')
                                      ->store('destinations', 'public');
        }

        $destination->update($data);

        return redirect()
            ->route('destinations.index')
            ->with('success', 'Destinasi berhasil diperbarui');
    }

    /**
     * DELETE
     */
    public function destroy(Destination $destination)
    {
        if ($destination->image) {
            Storage::disk('public')->delete($destination->image);
        }

        $destination->delete();

        return redirect()
            ->route('destinations.index')
            ->with('success', 'Destinasi berhasil dihapus');
    }
}
