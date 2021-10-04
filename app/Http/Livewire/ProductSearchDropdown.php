<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Track;

class ProductSearchDropdown extends Component
{
    public $search = '';

    public function render()
    {
        $searchResults = [];

        if (strlen($this->search)>= 2){
            $searchResults = Track::where('product', 'LIKE', '%'. $this->search .'%')->get();
        }
        // dump($searchResults);

        return view('livewire.product-search-dropdown',['searchResults'=>collect($searchResults)->take(5)]);
    }
}
