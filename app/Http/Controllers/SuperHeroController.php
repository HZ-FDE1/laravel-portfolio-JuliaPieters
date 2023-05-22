<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuperHeroController extends Controller
{
    private $base_url= 'https://superheroapi.com/api/';

    public function get_hero($id) {
        $json = file_get_contents($this->base_url . env('HERO_API_KEY') . '/' . $id);
        $hero = json_decode($json);
        return view('hero')->with('hero', $hero);
    }
}
