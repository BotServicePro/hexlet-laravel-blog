<?php

namespace App\Http\Controllers;

use App\Models\Article;
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

    public function create()
    {
        $article = new Article();
        return view('article.create', compact('article'));
    }

    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'name' => 'required|unique:articles|min:5',
            'body' => 'required|min:500',
        ]);

        $article = new Article();
        // Заполнение статьи данными из формы
        $article->fill($data);
        // При ошибках сохранения возникнет исключение
        $article->save();

        flash('Article was added!')->success();
        // Редирект на указанный маршрут
        return redirect()
            ->route('article.show', ['id' => $article->id]);
    }
}
