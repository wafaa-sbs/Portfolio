<?php

namespace App\Http\Controllers;

use App\skill;
use Illuminate\Http\Request;


class SkillController extends Controller
{
  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skills = Skill::all();
        return view('/skill.index',['skill'=>$skills]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('skill.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $prmter = $request->except(['_token']);
        $skills = new Skill();
        $skills->skill_name = $prmter['skill_name'];
        $skills->save();
        return redirect('/skill')->with('message', 'Add successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function show(skill $skill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $skills = Skill::find($id);
      return view('skill.edit',['skill' => $skills]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $skills = Skill::find($id);
      $skills->skill_name = $request['skill_name'];
      $skills->save();
      return redirect('/skill');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $skills = Skill::find($id);
      $skills->delete();
      return redirect('/skill');
    }
}
