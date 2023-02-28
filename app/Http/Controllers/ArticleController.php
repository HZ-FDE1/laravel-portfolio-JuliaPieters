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

   Article::create([
       'title' => request('title'),
      'content' => request('content')
   ]);
        return redirect(route('articles.index'));
    }
    public function edit($id){
        $article = Article::find($id);
        return view('edit', compact('article'));
    }
    public function update($id){
        Article::find([
            'title' => request('title'),
            'content' => request('content')
        ]);

        return redirect(route('articles.show'));
    }
    public function destroy($id)
    {
        $article = Article::find($id);
        $article->delete($id);
        return redirect('/blog');
    }
    //
}
