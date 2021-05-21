<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

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
}
