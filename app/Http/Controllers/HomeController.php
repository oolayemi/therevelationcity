<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Gallery;
use App\Models\Sermon;
use Illuminate\Http\Request;

class HomeController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $sermons = Sermon::take(6)->get();
        $events = Event::take(3)->get();
        $galleries = Gallery::take(8)->get();

        return view('welcome', ['sermons' => $sermons, 'events' => $events, 'galleries' => $galleries]);
    }

}
