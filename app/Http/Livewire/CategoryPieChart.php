<?php

namespace App\Http\Livewire;

use Livewire\Component;
use \App\Models\Category;
use DB;


class CategoryPieChart extends Component
{
    public function render()
    {



        $pieArray = DB::table('tracks')
            ->join('categories', 'tracks.category_id', '=', 'categories.id')
            ->select(DB::raw('categories.name, count(*) as y '))
            ->groupBy('categories.name')
            ->get();
            // dd($pieArray);
        // $pieArray = json_encode($pieArray,JSON_NUMERIC_CHECK);
        // dd($pieArray);

        

        // select  Categories.name, count(Track.category_id) as count from budget_app.tracks as Track inner join 
        //     budget_app.categories as Categories on Track.category_id= Categories.id group by Track.category_id

        return view('livewire.category-pie-chart', compact('pieArray'));
    }
}
