<?php

namespace App\Http\Controllers;

use App\skill;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class SkillController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $skill = Skill::all();
      return view('/skill.index',['skill'=>$skill]);
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
      $skill = new Skill();
      $skill->skill_name = $prmter['skill_name'];
      $skill->percentage = $prmter['percentage'];
      $skill->save();
      return redirect('/skill');
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
      $skill = Skill::find($id);
    return view('skill.edit',['skill' => $skill]);
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
      $skill = Skill::find($id);
    $skill->skill_name = $request['skill_name'];
    $skill->skill_name = $request['percentage'];
    $skill->save();
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
      $skill = Skill::find($id);
    $skill->delete();
    return redirect('/skill');
    }

    // /**
    //  * Create a new controller instance.
    //  */
    // public function __construct()
    // {
    //     $this->middleware(backpack_middleware());
    // }

}
