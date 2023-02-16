<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FAQController extends Controller
{
    //
    public function show(){
        $faqs = Faq::all();
        return view('FAQ')-> with('faqs',$faqs);
    }
    public function create(){
        return View ('FAQ.create');
    }

        public function store(){

        $FAQ = new Faq();

        $FAQ->title =request('title');
        $FAQ->excerpt =request('excerpt');
        $FAQ->body =request('body');

        $FAQ->save();
        return redirect('/faq');
    }
    //
}
}
