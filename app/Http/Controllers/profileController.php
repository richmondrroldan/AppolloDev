<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;
use Auth;
use App\Skill;

use Image;

use Illuminate\Support\Facades\Input;

class profileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function update_avatar(Request $request){
        if($request->hasFile('profilepic')){
            $profilepic = $request->file('profilepic');
            $filename = time() . '.' . $profilepic->getClientOriginalExtension();
            Image::make($profilepic)->resize(300,300)->save(public_path('/images/avatar/' . $filename));

            $user = Auth::user();
            $user->profilepic = $filename;
            $user->save(); 

        }
        return view('profile.profile', array('user' => Auth::user()) );
    }
    public function index()
    {
        return view('profile.profile');
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
        $user = User::find($id);
        return view('profile.index', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $skills = Skill::all();
        return view('profile.edit',compact('user', 'skills'));
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
        $request->merge([ 
        'interests' => implode(', ', (array) $request->get('interests'))
        ]);
        $data['interests'] = $request->input('interests', true); 

        $about = $request->input('about');
        $this->validate($request, [
            'about',
            'interests',            
            ]);
        User::find($id)->update($request->all());
        return redirect()->route('profile.index');
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
