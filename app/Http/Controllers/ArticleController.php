<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    public function index(Request $request)
    {
        $input = $request->input('search');
        $foundArticles = '';
        if (!empty($input)) {
            $foundArticles = DB::table('articles')->where('name', 'ilike', "%{$input}%")->get();
        }
        $allArticles = DB::table('articles')->orderBy('id', 'DESC')->paginate(5);
        return view('article.index', compact('allArticles', 'foundArticles', 'input'));
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
