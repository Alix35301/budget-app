<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Track;

class TypeaheadController extends Controller
{

    public function index(){
        dd("hello");
    }

    public function autocompleteProductSearch(Request $request)
    {
          $query = $request->get('query');
          $filterResult = Track::where('product', 'LIKE', '%'. $query. '%')->firstOrFail()->name;
          return response()->json($filterResult);
    } }
