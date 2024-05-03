<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Category;

class AccountsController extends Controller
{
    public function index(){
        $categories = Category::all();
        $accounts = Account::all();
        return view('backend.accounts.index', compact('categories'))->with('accounts', $accounts);
    }
    public function form(Account $account = null){
        return view('backend.accounts.form')->with('account', $account);
    }

    public function destroy(Account $account){
        $account->delete();
        return redirect()->route('accounts.index');
    }


}
