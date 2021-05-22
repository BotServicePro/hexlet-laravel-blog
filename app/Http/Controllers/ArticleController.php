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
        $articlesData = DB::table('articles')->paginate(15);
        return view('article.index', compact('articlesData'));
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
