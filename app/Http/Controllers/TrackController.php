<?php

namespace App\Http\Controllers;
use app\Http\ControllersTrackController;
use Illuminate\Http\Request;

class TrackController extends Controller
{
    
    public function index(){
        $header = "New Entry";
        // $slot = "ok";
        return view('new',compact(['header']));

    }


    public function store(Request $request)
    {
        dd(request()->all());
    }



}
