<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::all();

        return view('base/inner/news/list', [
            'messages' => '',
            'page_title' => 'Новости спорта',
            'news_list' => $news
            ]);
    }

    public function full($url_news)
    {
        $full_news = News::where('url', $url_news)->first();

        return view('base/inner/news/full', [
            'messages' => '',
            'page_title' => $full_news->title, 
            'full_news' => $full_news
            ]);
    }
}
