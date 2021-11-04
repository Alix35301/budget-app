<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class ProductSearchDropdown extends Component
{
public $search = '';

public function render()
{
    $searchResults = [];

    if (strlen($this->search)>= 2){
        $searchResults = Product::where('name', 'LIKE', '%'. $this->search .'%')->get();
    }
    // $hasProduct = 0;
    // if (count($searchResults) > 0 ){
    //     $hasProduct = 1;
    //     dump($hasProduct);
    // }
    return view('livewire.product-search-dropdown',['searchResults'=>collect($searchResults)->take(5)]);
}
}
