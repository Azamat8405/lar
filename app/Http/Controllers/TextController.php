<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Text, Categs, Coaches};

class TextController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($url)
    {

        $text = Text::where('url', $url)->first();
        $categ = Categs::where('url', $url)->first();

        $coaches = [];
        if($categ)
        {
            $coaches = Coaches::where('categ_id', $categ->id)->inRandomOrder()->get();            
        }


        $template = 'text';
        if($url == 'contacts')
        {
            $template = 'text_contacts';
        }
        return view('base/inner/text/'.$template, [
            'messages' => '',
            'url' => $url,
            'page_title' => env('APP_NAME', 'mysql'),
            'text' => $text,
            'coaches' => $coaches
            ]);
    }
}
