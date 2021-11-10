<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\IncomeType;
use \App\Models\Income;

use Auth;


class IncomeTypeController extends Controller
{
    public function index(){

        $incomes = Income::all();
        // dd($incomes);

        $types = IncomeType::all();
        // dd($types);
        return view("add_income",compact("types","incomes"));
    }


    public function store(Request $request){
        $data= $request->all();

        // $types = IncomeType::all();
        // dd($data);
        // return view("add_income",compact("types"));

        $item = new \App\Models\Income([
            'income_type' => $data["income-type"],
            'amount' => $data["amount"],
            'remarks' => $data["remarks"],
            // 'user_id' => Auth::user()->id,
            'user_id' => 1
        ]);
        // dd($item);

        $item->save();
        return redirect()->back()->with('message', 'IT WORKS!');
    }

    
}
