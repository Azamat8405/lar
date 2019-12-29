<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\{Text, News, Categs};

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $c = \App\Categs::find(1);
        // $cat = new \App\Categs();
        // $cat->c_title = 'Second';
        // $cat->save();
        // $c->appendNode($cat);

		$news = News::orderBy('created_at')->take(2)->get();

        return view('base/index', [
        	'messages' => '',
        	'title' => env('APP_NAME', 'mysql'),
            'news' => $news
        ]);
    }
}
