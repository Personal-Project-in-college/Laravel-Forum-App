<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
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

        $query = $request->input('title');

        if ($query) {
            // Jika ada input pencarian, cari berdasarkan title
            $random = Post::search($query)->get(); // Algolia
        } else {
            // Jika tidak ada input, tampilkan 5 post random
            $random = Post::inRandomOrder()->limit(10)->get();
        }

        return view('pages.home', [
            'dataPost' => $posts,
            'dataAuthor' => $authors,
            'dataRandomPost' => $random
        ]);
    }

    public function search(Request $request)
    {
        $query = $request->input('title');

        if ($query) {
            // Jika ada input pencarian, cari berdasarkan title
            $posts = Post::search($query)->get(); // Algolia
        } else {
            // Jika tidak ada input, tampilkan 5 post random
            $posts = Post::inRandomOrder()->limit(5)->get();
        }

        return view('pages.search-results', compact('posts', 'query'));
    }

}
