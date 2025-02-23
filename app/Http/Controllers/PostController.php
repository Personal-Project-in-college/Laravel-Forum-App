<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index(Request $request)
    {
        $tags = Tag::all();
        $limit = $request->input('limit', 10);

        $query = Post::with('RelationTags')
            ->when($request->tag, function ($q) use ($request) {
                return $q->whereHas('RelationTags', function ($subQuery) use ($request) {
                    $subQuery->where('tags.slug', $request->tag);
                });
            })
            ->latest();

        $totalPosts = $query->count();
        $posts = $query->take($limit)->get();

        // Ambil 6 tag yang paling banyak dipakai di post
        $recommendedTags = Tag::withCount('RelationPosts')
            ->orderByDesc('relation_posts_count')
            ->limit(6)
            ->get();

        return view('pages.post', [
            'dataTag' => $tags,
            'dataPost' => $posts,
            'selectedTag' => $request->tag,
            'limit' => $limit,
            'totalPosts' => $totalPosts,
            'recommendedTags' => $recommendedTags, // Kirim data ke view
        ]);
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
    public function store(StorePostRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($slug, Post $post)
    {
        $post = Post::where('slug', $slug)
            ->with([
                'RelationTags', // Ambil data tag yang terkait dengan post
                'RelationComments' => function ($query) {
                    $query->whereNull('parent_id') // Ambil komentar utama (bukan balasan)
                        ->with(['RelationUsers', 'RelationReplies.RelationUsers'])->latest(); // Ambil user yang komentar & user dari reply-nya
                },
            ])
            ->firstOrFail();

        // Hitung semua komentar yang terkait dengan post, termasuk yang punya parent_id
        $totalComments = Comment::where('post_id', $post->id)->count();

        // Ambil 3 post lain dari author yang sama, kecuali post yang sedang ditampilkan
        $relatedPosts = Post::where('user_id', $post->user_id)
            ->where('id', '!=', $post->id)
            ->latest()
            ->take(5)
            ->get();

        return view('pages.detail', [
            'dataPost' => $post,
            'relatedPosts' => $relatedPosts,
            'totalComments' => $totalComments, // Kirim ke view
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
