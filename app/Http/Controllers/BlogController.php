<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function home(Request $request)
    {
        $search = $request->get('search');
        $query  = Post::query();

        if ($search) {
            $query->where(function ($antri) use ($search) {
                $antri->where('title', 'LIKE', "%{$search}%")
                      ->orWhere('content', 'LIKE', "%{$search}%");
            });
        }

        $posts = $query->latest()->paginate(5);
        $posts->appends(['search' => $search]);

        $totalposts = Post::count();

        return view('home', compact('posts', 'totalposts', 'search'));
    }

    // single kalo diklik satu2
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('post', compact('post'));
    }

    // halaman tentang
    public function about()
    {
        $info = Post::aboutInfo();
        return view('about', compact('info'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        Post::create([
            'title' => $request->title,
            'content' => $request->input('content'),
        ]);

        return redirect('/')->with('success', 'Post berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        $post = Post::findOrFail($id);
        $post->update([
            'title' => $request->title,
            'content' => $request->input('content'),
        ]);

        return redirect('/')->with('success', 'Post berhasil diupdate!');
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect('/')->with('success', 'Post berhasil dihapus!');
    }
}