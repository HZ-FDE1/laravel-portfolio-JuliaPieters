<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function show(){
        $articles = Article::all();
        return View('blog')->with('articles', $articles);
    }
    public function create(){
        return View ('blog.create');
    }

    public function store(){

        $article = new Article();

        $article->title =request('title');
        $article->excerpt =request('excerpt');
        $article->body =request('body');

        $article->save();
        return redirect('/articles');
    }
    //
}

