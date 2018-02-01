<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Profile;
use App\Skill;
use App\Event;
use App\Article;
use App\rWorkshop;
use App\User;

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
        $articleCount = Article::count();
        $skills = Skill::all();
        return view('home', compact('skillCount','eventCount','articleCount','workshopCount', 'skills', 'mentors'));
    }
    public function mLanding(){
        $skills = Skill::all();
        return view('mLanding', compact('skills'));
    }
}
