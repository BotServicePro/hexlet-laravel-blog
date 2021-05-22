<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class RatingController extends Controller
{
    public function rating()
    {
        $articles = DB::table('articles')
            ->select('name', 'likes_count')
            ->orderBy('likes_count', 'DESC')
            ->paginate(5);
        return view('rating.index', compact('articles'));
    }
}