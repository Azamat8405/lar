<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\{Text, News};

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$news = News::orderBy('created_at')->take(10)->get();

        return view('base/index', [
        	'messages' => '',
        	'title' => env('APP_NAME', 'mysql'),
            'news' => $news
        ]);
    }
}
