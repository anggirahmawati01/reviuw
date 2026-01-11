<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'destination_id' => 'required|exists:destinations,id',
            'name' => 'required|string|max:100',
            'comment' => 'required|string',
        ]);

        Comment::create($request->all());

        return back()->with('success', 'Komentar berhasil ditambahkan');
    }
}
