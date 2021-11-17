<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Account;
use \App\Models\Currency;



class AccountController extends Controller
{
    public function index(){
        $accounts = Account::all();
        $currencies = Currency::all();

        // dd($accounts);
        foreach ($accounts as $account){
            dd($account->currency);
            
        }

        return view("create_account", compact("accounts","currencies"));

    }

    public function store(Request $request)
    {
        $data = $request->all();


        // dd($data);
        $item = new \App\Models\Account([
            'account_name' => $data["accName"],
            'currency_type' => $data["currencyType"],
            // 'user_id' => Auth::user()->id,
            'user_id' => 1,
        ]);
        // dd($item);

        $item->save();
        return redirect()->back()->with('message', 'IT WORKS!');
        // todo 1. ability to chose , amount , kgs etx.. 


    }
}
