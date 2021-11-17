<?php

namespace App\Http\Livewire;

use Livewire\Component;
use \App\Models\Track;


class ProductWordCloud extends Component
{
    public function render()
    {
        $test = Track::all();
        $products = array();

        foreach ($test as $t){
            array_push($products, $t->category->name);
        }
        // dd(join(" ",$products));
        $cloudData = join(" ",$products);
                // dd(json_encode($cloudData));


            // dd(Track::with("category")->get());
        
        return view('livewire.product-word-cloud',compact('cloudData'));
    }
}
