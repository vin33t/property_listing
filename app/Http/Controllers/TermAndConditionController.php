<?php

namespace App\Http\Controllers;

use App\Models\TermAndCondition;
use Illuminate\Http\Request;

class TermAndConditionController extends Controller
{
    public function index(){
        $termAndCondition = TermAndCondition::find(1);
        return view('backend.termAndCondition', compact('termAndCondition'));
    }

    public function update(Request $request, $id = null){
//        dd($request->all());
        $request->validate([
            'content' => 'required',
        ]);
        if ($id){
            $termAndCondition = TermAndCondition::find($id);
            $termAndCondition->update($request->all());
        }else{
            TermAndCondition::create($request->all());
        }
        return redirect()->back();

    }
}
