<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        // Ambil 4 post terbaru berdasarkan created_at
        $posts = Post::with('RelationTags')->latest()->take(4)->get();

        // Ambil 3 user yang paling banyak membuat post dalam minggu ini
        $authors = User::withCount(['RelationPosts' => function ($query) {
            $query->whereBetween('created_at', [now()->startOfWeek(), now()->endOfWeek()]);
        }])
            ->having('relation_posts_count', '>', 0) // Hanya ambil user yang memiliki post dalam seminggu ini
            ->orderByDesc('relation_posts_count')
            ->take(3)
            ->get();

        return view('pages.home', [
            'dataPost' => $posts,
            'dataAuthor' => $authors,
        ]);
    }

}
