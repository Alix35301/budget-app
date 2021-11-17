<?php

namespace App\Http\Livewire;

use Livewire\Component;
use \App\Models\Track;
use DB;

class DailyChart extends Component
{
    public function render()
    {
        $dailyData = DB::table('tracks')
        ->select(DB::raw('sum(price*qty) as total, date'))
        ->where('date', '>', now()->subDays(30)->endOfDay())
        ->groupBy('date')->get();

        // dd($dailyData);

        

        $dates = $dailyData->pluck("date");
        $data = $dailyData->pluck("total");

        // $dates = \Carbon\Carbon::parse($dailyData->date)->format('d/m/Y');

            $dates = collect($dates)->map(function ($item, $key) {
                return date('d-M', strtotime($item));
            })->all();
        
        // dd($dates);
        return view('livewire.daily-chart', compact("dates","data"));
    }
}
