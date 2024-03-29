<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Skill;

use App\User;

use Illuminate\Support\Facades\Input;

class resultsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $skills = Skill::all();
        // $search = Input::get('search');
        // $skills_title = Input::get('skills_title');
        // $results = User::where('uType', '=', '2')->orWhere('interests', '=', "$skills_title")->
        //             orWhere('name', 'LIKE', "%$search%")->get();
        // return view('results', compact('results', 'skills'));

        $search = Input::get('search');
        $skills = Skill::all();     
        $interests = Input::get('interests');
        $results = User::where('uType', '=', '2')->where('name', 'LIKE', "%$search%")->where('interests', 'LIKE' , "%$interests%")
                    ->get();
        return view('results', compact('results', 'skills'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
