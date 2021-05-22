<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function about ()
    {
        $skills = ['Обучение', 'Программирование', 'ООП', 'PHP'];
        return view('page.about', ['tags' => $skills]);
    }

    public function main ()
    {
        return view('page.index');
    }

    public function articles()
    {
        $articlesData = Article::all();
        return view('page.articles', compact('articlesData'));
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
