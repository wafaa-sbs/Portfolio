<?php

namespace App\Http\Controllers;

use App\experiences;
use Illuminate\Http\Request;

class ExperiencesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $experience = experiences::all();
      return view('/experience.index',['experience'=>$experience]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('experience.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $prm = $request->except(['_token']);

      $experience = new experiences();
      $experience->duration = $prm['duration'];
      $experience->career = $prm['career'];
      $experience->company = $prm['company'];
      $experience->place = $prm['place'];
      $experience->save();
      return redirect('/experience');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\experiences  $experiences
     * @return \Illuminate\Http\Response
     */
    public function show(experiences $experiences)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\experiences  $experiences
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $experience = Experiences::find($id);
      return view('/experience.edit', ['experience' => $experience]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\experiences  $experiences
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $experience = Experiences::find($id);

      $experience->duration = $request['duration'];
      $experience->career = $request['career'];
      $experience->company = $request['company'];
      $experience->place = $request['place'];
      $experience->save();
      return redirect('/experience');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\experiences  $experiences
     * @return \Illuminate\Http\Response
     */
    public function destroy(experiences $experiences)
    {
      $experience = Experiences::find($id);
      $experience->delete();
      return redirect('/experience');
    }
}
