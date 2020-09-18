<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\skill;
use App\Work;
use App\experiences;
use App\educations;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
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
        $education = educations::all();
        $experience = experiences::all();
        $this->data['breadcrumbs'] = [
            trans('home')     => url('/home'),
            // trans('backpack::base.dashboard') => false,
        ];
        return view('home', compact('skill', 'work', 'education', 'experience'));
    }


    // public function dashboard()
    // {
    //     $skill = Skill::all();
    //     $work = Work::all();
    //     $education = educations::all();
    //     $experience = experiences::all();
    //     // $this->data['title'] = trans('backpack::base.dashboard'); // set the page title
    //     $this->data['breadcrumbs'] = [
    //         trans('home')     => url('/home'),
    //         // trans('backpack::base.dashboard') => false,
    //     ];
    //
    //     // return view(backpack_view('dashboard'), $this->data, compact('work','skill', 'education', 'experience'));
    //
    //
    // }
}
