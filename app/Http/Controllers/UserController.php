<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function profile(Request $request)
    {
        $user = Auth::user();
        $limit = $request->get('limit', 10); // Default 5, tapi bisa bertambah

        $posts = Post::with('RelationTags')
            ->where('user_id', $user->id)
            ->latest()
            ->take($limit)
            ->get();

        $totalPosts = Post::where('user_id', $user->id)->count(); // Hitung total post user

        return view('pages.profile', [
            'dataPost' => $posts,
            'dataUser' => $user,
            'currentLimit' => $limit,
            'totalPosts' => $totalPosts,
        ]);
    }

    public function profileAuthor($slug, Request $request)
    {
        // Cari user berdasarkan slug
        $user = User::where('slug', $slug)->firstOrFail();

        // Ambil jumlah limit dari request (default 5)
        $limit = $request->input('limit', 10);

        // Ambil post milik user berdasarkan user_id
        $posts = Post::with('RelationTags')
            ->where('user_id', $user->id)
            ->latest()
            ->take($limit)
            ->get();

        // Hitung total post dari author ini
        $totalPosts = Post::where('user_id', $user->id)->count();

        return view('pages.profileAuthor', [
            'dataUser' => $user,
            'dataPost' => $posts,
            'currentLimit' => $limit,
            'totalPosts' => $totalPosts,
        ]);
    }

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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
