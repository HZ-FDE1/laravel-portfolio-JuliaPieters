<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){
        $articles = Article::all();
        return View('blog')->with('articles', $articles);
    }

    public function show($id){
        $articles = Article::find($id);
        return View('blog')->with('articles', $articles);
    }
    public function create(){
        return View ('create');
    }

    public function store(){

        request()->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $article = new Article();

        $article->title =request('title');
        $article->content =request('content');

        $article->save();
        return redirect('/blog');
    }
    public function edit($id){
        $article = Article::find($id);
        return view('edit', compact('article'));
    }
    public function update($id){
        $article = Article::find($id);
        $article->title =request('title');
        $article->content =request('content');
        $article->save();

        return redirect('/blog/' . $article ->id);
    }
    public function destroy($id)
    {
        $article = Article::find($id);
        $article->delete($id);
        return redirect('/blog');
    }
    //
}
