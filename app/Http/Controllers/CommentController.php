<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $comment = Comment::create([
            'user_id' => auth()->id(), // Ambil ID user yang login
            'post_id' => $request->post_id, // ID post yang dikomentari
            'parent_id' => $request->parent_id,
            'body' => $request->body, // Isi komentar
        ]);

        return redirect()->back()->with('success', 'Komentar berhasil dikirim!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'body' => 'required|string|max:500',
        ]);

        $comment = Comment::findOrFail($id);

        // Pastikan hanya pemilik yang bisa mengedit
        if (Auth::id() !== $comment->user_id) {
            return back()->with('error', 'Tidak bisa mengedit komentar orang lain!');
        }

        $comment->body = $request->body;
        $comment->save();

        return back()->with('success', 'Komentar berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $comment = Comment::findOrFail($id);

        // Pastikan hanya pemilik komentar yang bisa hapus
        if (Auth::id() !== $comment->user_id) {
            return back()->with('error', 'Tidak bisa menghapus komentar orang lain!');
        }

        // Hapus semua balasan juga
        $comment->RelationReplies()->delete();
        $comment->delete();

        return back()->with('success', 'Komentar berhasil dihapus');
    }

}
