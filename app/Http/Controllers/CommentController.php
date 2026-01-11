<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Destination;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, Destination $destination)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'message' => 'required|string',
        ]);

        $destination->comments()->create([
            'name' => $request->name,
            'message' => $request->message,
        ]);

        return redirect()->route('destinations.show', $destination->id)
                         ->with('success', 'Komentar berhasil ditambahkan');
    }
}
