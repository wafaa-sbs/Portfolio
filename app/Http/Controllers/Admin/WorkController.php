<?php

namespace App\Http\Controllers;

use App\work;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $works = Work::all();
      return view('/work.index',['work'=>$works]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('work.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // $prmter = $request->except(['_token']);
      $works = new Work();
      $works->work_name = $request['work_name'];
      $works->url_link = $request['url_link'];
      // if($prmter->hasFile('image')){
      //     $fileName = time().'_'.$prmter->file('image')->getClientOriginalName().'.'.$prmter->file('image')->getClientOriginalExtension();
      //     $path = $prmter->file('image')->storeAs('uploads',$fileName,'works');
      //     $works->image = '/storage/' .$path;
      //   }
        if($request->hasFile('image')){
            $path = $request->file('image')->store('public');
          }
      $works->image = $path;
      $works->save();
      return redirect('/work')->with('message', 'Add successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\work  $work
     * @return \Illuminate\Http\Response
     */
    public function show(work $work)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\work  $work
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $works = Work::find($id);
      return view('work.edit',['work' => $works]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\work  $work
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $works = Work::find($id);

      $works->work_name = $request['work_name'];
      $works->url_link = $request['url_link'];
      if($request->hasFile('image')){
          $path = $request->file('image')->store('works');
        }
      $works->image = $path;
      $works->save();

      return redirect('/work');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\work  $work
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $works = Work::find($id);
      $works->delete();
      return redirect('/work');
    }
}
