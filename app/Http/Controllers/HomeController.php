<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\skill;
use App\Work;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */

     /**
      * Display a listing of the resource.
      *
      * @return \Illuminate\Http\Response
      */

    public function index()
    {
        $skill = Skill::all();
        $work = Work::all();
        return view('home', compact('skill', 'work'));
    }
}
