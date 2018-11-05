<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Text;

class TextController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($url_text)
    {
        $text = Text::where('url', $url_text)->first();

        return view('base/inner/text/simple_text', [
            'messages' => '',
            'page_title' => env('APP_NAME', 'mysql'),
            'text' => $text
            ]);
    }
}
