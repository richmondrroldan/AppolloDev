<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Profile;
use App\Skill;
use App\Mentor;
use App\Event;
use App\Article;
use App\rWorkshop;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $workshopCount = rWorkshop::count();
        $skillCount = Skill::count();
        $eventCount = Event::count();
        $mentorCount = Mentor::count();
        $articleCount = Article::count();
        return view('home', compact('skillCount','mentorCount','eventCount','articleCount','workshopCount'));
    }
}
