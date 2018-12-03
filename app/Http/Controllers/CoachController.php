<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coaches;

class CoachController extends Controller
{
    public function index($url = '')
    {
        $coaches = Coaches::inRandomOrder()->get();

        return view('base/inner/coach/list', [
            'messages' => '',
            'url' => $url,
            'page_title' => 'Тренерский состав',
            'coach_list' => $coaches
            ]);
    }
}
