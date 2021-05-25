<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = DB::table('articles')->orderBy('id', 'DESC')->paginate(5);
        return view('article.index', compact('articles'));
    }

    public function show($id)
    {
        $article = DB::table('articles')->find($id);
        abort_unless($article, 404);
        return view('article.show', compact('article'));
    }

    public function articlePost()
    {
        // insert new article to db
        DB::table('articles')->insertGetId(
            [
                'name' => 'ololo',
                'body' => 'bodybody',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        );
    }
}
