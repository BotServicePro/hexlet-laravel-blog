<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleRatingController extends Controller
{
    public function rating()
    {
        $articles = DB::table('articles')
            ->select('id', 'name', 'likes_count', 'created_at')
            ->orderBy('likes_count', 'DESC')
            ->paginate(5);
        return view('rating.index', compact('articles'));
    }
}
