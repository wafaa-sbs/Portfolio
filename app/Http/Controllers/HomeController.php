<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\skill;

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
        return view('home',['skill'=>$skill]);
    }
}
