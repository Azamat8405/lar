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

        $fon_bg = '';
        if($url == 'contacts')
        {
            $template = 'text_contacts';
        }

        if($url == 'football')
        {
            $fon_bg = 'background:#8eea89;';
        }
        elseif($url == 'tennis')
        {
            $fon_bg = 'background:#deaa72;';
        }
        elseif($url == 'fighter')
        {
            $fon_bg = 'background:#7a97c7;';
        }

        return view('base/inner/text/'.$template, [
            'messages' => '',
            'fon_bg' => $fon_bg,
            'url' => $url,
            'page_title' => isset($text->title) ? $text->title : env('APP_NAME', 'mysql'),
            'text' => $text,
            'coaches' => $coaches
            ]);
    }
}
