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
        $data = $request->all();
        // dd($data);
        // $validated = $request->validate([
        //     'product' => 'required',
        //     'qty' => 'required',
        //     'category_id' => 'required',
        //     'price' => 'required',
        //     'shop_id' => 'required',
        //     'location' => 'required'
        // ]);

        // \App\Models\Track::create($request->all());
        // $product = $request->old('product');
        // dd($validated);
        $shop_id = \App\Models\Shop::where("name","=",$data['shop_id'])->pluck("id")->first();
        $product_id = \App\Models\Product::where("name","=",$data['product'])->pluck("id")->first();
// dd($shop_id);
        $item = new \App\Models\Track([
            'date' => $data["date"],
            'product' => $product_id,
            'category_id' => $data['category_id'],
            'qty' => $data['qty'],
            // 'user_id' => Auth::user()->id,
            'user_id' => 1,
            'location' => $data['location'],
            'shop_id' => $shop_id,
            'price' => $data['price']

        ]);
        // dd($item);

        $item->save();
        return redirect()->back()->with('message', 'IT WORKS!');
        // todo 1. ability to chose , amount , kgs etx.. 


    }

    public function autocompleteSearch(Request $request)
    {
          $query = $request->get('query');
          $filterResult = Product::where('name', 'LIKE', '%'. $query. '%')->get();
          return response()->json($filterResult);
    } 



}
