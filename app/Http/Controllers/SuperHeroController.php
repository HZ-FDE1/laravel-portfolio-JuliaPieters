<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuperHeroController extends Controller
{
    private $base_url= 'https://superheroapi.com/api/';

    //data
    public function get_hero($id) {
        $json = file_get_contents($this->base_url . env('HERO_API_KEY') . '/' . $id);
       return $json;
    }

    //view
    public function show_hero(){
        return view('hero');
    }
}
