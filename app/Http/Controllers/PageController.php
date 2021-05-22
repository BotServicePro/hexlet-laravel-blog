<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function main ()
    {
        return view('page.index');
    }

    public function about ()
    {
        $skills = ['Обучение', 'Программирование', 'ООП', 'PHP'];
        // compact('articles') => [ 'articles' => $articles ]
        return view('page.about', compact('skills'));
    }
}
