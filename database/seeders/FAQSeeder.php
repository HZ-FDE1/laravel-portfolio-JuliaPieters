<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FAQSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('faqs')->insert([
            'question' => 'Hoe print ik een document van mijn laptop op de HZ?',
            'answer'   => 'Eerst moet je geld op je studenten pas zetten.\nDat kan bij de pinautomaat naast de balie Als er geld op staat kun je printen door het bestand naar de printer te sturen.\nGa naar de printer, houd je studentenpas er tegen, en printen maar!'
                . '',
            'link'     => null
        ]);
        DB::table('faqs')->insert([
            'question' => 'Hoe scan je een document en verstuur je het naar je laptop?',
            'answer'   => 'Ga naar de printer, houd je studentenpas er tegen en leg het document in de printer kies je laptop en druk op scannen.'
            ,
            'link'     => null
        ]);
        DB::table('faqs')->insert([
            'question' => 'Hoe kan je iets kopen op de hz webshop?',
            'answer'   => 'ga naar de hz webshop site, log in met je hz gegevens en kopen maar! link naar de webshop'
            ,
            'link'     => null
        ]);

        DB::table('faqs')->insert([
            'question' => 'Waar kan ik de laatste updates vinden over ziekte en covid gerelateerde situaties?',
            'answer'   => 'Gebruik deze link voor alle informatie rondom covid en ziekte'
            ,
            'link'     => 'https://hz.nl/actualiteiten/coronavirus'
        ]);
        DB::table('faqs')->insert([
            'question' => 'Hoe kan je een ruimte reserveren of iets anders?',
            'answer'   => 'gebruik deze link om voor van alles een reservering te maken'
            ,
            'link'     => 'https://hzuniversity.topdesk.net/tas/public/ssp/52a63378-addd-4b21-b808-571200fd8d0c'
        ]);
        DB::table('faqs')->insert([
            'question' => 'Wat zijn de instructies om te parkeren op het hz parkeerterrein?',
            'answer'   => 'studenten en medewerkers kunnen met hun hz pas gratis parkeren. anderen kunnen gratis parkeren bij poelendaelesingel 8'
            ,
            'link'     => null
        ]);
        //
    }
}
