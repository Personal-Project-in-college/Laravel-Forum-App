<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateLikeRequest;
use App\Models\Like;
use App\Models\Post;

class LikeController extends Controller
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
    public function store(Post $post)
    {
        $user = auth()->user();

        // Cek apakah user sudah like post ini
        $existingLike = $post->RelationLikes()->where('user_id', $user->id)->first();

        if ($existingLike) {
            // Jika sudah like, hapus like
            $existingLike->delete();
            $liked = false;
        } else {
            // Jika belum like, tambahkan like
            $post->RelationLikes()->create(['user_id' => $user->id]);
            $liked = true;
        }

        // Hitung total like setelah perubahan
        $totalLikes = $post->RelationLikes()->count();

        return back()->with([
            'liked' => $liked,
            'totalLikes' => $totalLikes,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Like $like)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Like $like)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLikeRequest $request, Like $like)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Like $like)
    {
        //
    }
}
