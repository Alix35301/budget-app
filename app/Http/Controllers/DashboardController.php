<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Track;
use \App\Models\Income;
use Carbon\Carbon;
use Auth;
class DashboardController extends Controller
{

    public function index(){
        // $header = "New Entry";
        // // $slot = "ok";
        // $cats = \App\Models\Category::all();
        // $locs = \App\Models\Location::all();

        // // dd($cats);
        // return view('new',compact(['header','cats','locs']));
        // $user_id = Auth::user()->id;
        $user_id = 1;

        $income = Income::select('*')->where('user_id',$user_id)->sum(\DB::raw('amount'));
        $cats = \App\Models\Track::all();
        $date = Carbon::now();
        $curMonExp = Track::select('*')->where('user_id',$user_id)->whereMonth('date', $date->month)->sum(\DB::raw('tracks.price * tracks.qty'));

        $day = ((int)$date->format('d'));
        $prevMonth = ((int)$date->format('m'))-1;
        $year = ((int)$date->format('Y'));

        $balance = $income - $curMonExp;
        // dd($balance);



        // dd($prevMonth); 

        // last month  last day
        if ($day == 1){
            $year--;
        }
        $to = Carbon::parse($day.'-'.$prevMonth.'-'. $year) ;
        $from = Carbon::parse('1-'.$prevMonth.'-'. $year) ; 

       $lastMonExp =  Track::where('user_id',$user_id)->whereBetween('date', [$from, $to])->sum(\DB::raw('tracks.price * tracks.qty'));

    //    dd([$lastMonExp,$curMonExp]);

    if ($curMonExp != 0) {
        $perChange = ((($curMonExp - $lastMonExp )/  $curMonExp) * 100);

    } else{
        $perChange = 0; 
    }

    //   $perChange = (($curMonExp - $lastMonExp )/  $curMonExp);

    // dd([$curMonExp,$lastMonExp]);
    //   dd($perChange);


        // 28 days 
        // 31 days 

        // 31-02-2021 
        // if day is > prev month end day : 
        //     select 

        



        return view('dashboard', compact(["curMonExp","perChange","balance"]));


    }
}
