<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\{Text};

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		// $text = Text::find(1);
		// print_r($text);

	

        return view('base/index', [
        	'messages' => '',
        	'title' => env('APP_NAME', 'mysql')
        ]);
    }
}
