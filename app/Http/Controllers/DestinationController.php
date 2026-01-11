<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DestinationController extends Controller
{
    /**
     * LIST DESTINATIONS (INDEX)
     * =========================
     * - 8 data per halaman
     * - Bisa menampilkan 50+ data via pagination
     */
    public function index()
    {
        $destinations = Destination::latest()
            ->paginate(8); // 🔥 BUKAN limit(4)

        return view('destinations.index', compact('destinations'));
    }

    /**
     * FORM TAMBAH DESTINASI
     */
    public function create()
    {
        return view('destinations.create');
    }

    /**
     * SIMPAN DESTINASI BARU
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'location'    => 'required|string|max:255',
            'description' => 'required|string',
            'image'       => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $imagePath = $request->file('image')
            ->store('destinations', 'public');

        Destination::create([
            'name'        => $request->name,
            'location'    => $request->location,
            'description' => $request->description,
            'image'       => $imagePath,
        ]);

        return redirect()
            ->route('destinations.index')
            ->with('success', 'Destinasi berhasil ditambahkan');
    }

    /**
     * DETAIL DESTINASI + KOMENTAR
     */
    public function show(Destination $destination)
    {
        // 🔥 Optimasi: eager loading comments
        $destination->load(['comments' => function ($q) {
            $q->latest();
        }]);

        return view('destinations.show', compact('destination'));
    }

    /**
     * FORM EDIT DESTINASI
     */
    public function edit(Destination $destination)
    {
        return view('destinations.edit', compact('destination'));
    }

    /**
     * UPDATE DESTINASI
     */
    public function update(Request $request, Destination $destination)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'location'    => 'required|string|max:255',
            'description' => 'required|string',
            'image'       => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->only('name', 'location', 'description');

        if ($request->hasFile('image')) {
            // hapus gambar lama
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
     * HAPUS DESTINASI
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
