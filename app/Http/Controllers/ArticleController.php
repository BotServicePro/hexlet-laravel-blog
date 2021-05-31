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

    public function create()
    {
        $article = new Article();
        return view('article.create', compact('article'));
    }

    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'name' => 'required|unique:articles|min:3|max:100',
            'body' => 'required|min:500',
        ]);

        $article = new Article();
        // Заполнение статьи данными из формы
        $article->fill($data);
        // При ошибках сохранения возникнет исключение
        $article->save();

        flash('Article was added!')->success();
        return redirect()
            ->route('article.show', ['id' => $article->id]);
    }

    public function edit($id)
    {
        $article = DB::table('articles')->find($id);
        abort_unless($article, 404);
        return view('article.edit', compact('article'));
    }

    public function update(Request $request, $id)
    {
        $article = DB::table('articles')->find($id);
        //$article = new Article();
        //$article = Article::findOrFail($id);
        abort_unless($article, 404);
        $data = $this->validate($request, [
            'name' => 'required|min:3|max:100|unique:articles,name,' . $article->id,
            'body' => 'required',
            'likes_count' => 'min:0'
        ]);
        DB::table('articles')->where('id', $id)->update([
            'name' => $data['name'],
            'body' => $data['body'],
            'likes_count' => $data['likes_count'],
            'updated_at' => Carbon::now(),
        ]);
//        $category = new Article();
//        $category->fill($data);
//        dump($category);
//        //$category->save();
//        exit;
        flash('Article was updated!')->success();
        return redirect(route('article.show',  compact('id')));
    }

    public function destroy($id)
    {
        $category = Article::find($id);
        $article = DB::table('articles')->find($id);
        abort_unless($article, 404);
        //$article->delete();
        DB::table('articles')->where('id', $id)->delete();
//        dump($article);
//        exit;
        flash('Article was deleted!')->success();
        return redirect()->route('article.index');
    }
}
