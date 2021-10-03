<?php

namespace App\Http\Controllers;
use app\Http\ControllersTrackController;
use Illuminate\Http\Request;
use Auth;
class TrackController extends Controller
{
    
    public function index(){
        $header = "New Entry";
        // $slot = "ok";
        $cats = \App\Models\Category::all();
        $locs = \App\Models\Location::all();

        // dd($cats);
        return view('new',compact(['header','cats','locs']));

    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'product' => 'required',
            'qty' => 'required',
            'category_id' => 'required',
            'price' => 'required',
            'shop_id' => 'required',
            'location' => 'required'



        ]);

        // \App\Models\Track::create($request->all());
        $product = $request->old('product');

        $item = new \App\Models\Track([
            'product' => $request->get('product'),
            'category_id' => $request->get('category_id'),
            'qty' => $request->get('qty'),
            'user_id' => Auth::user()->id,
            'location' => $request->get('radio'),
            'shop_id' => $request->get('shop_id'),
            'price' => $request->get('price')

        ]);
        $validated->save();

    }

    public function autocompleteSearch(Request $request)
    {
          $query = $request->get('query');
          $filterResult = Product::where('name', 'LIKE', '%'. $query. '%')->get();
          return response()->json($filterResult);
    } 



}
