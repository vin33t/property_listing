<?php

namespace App\Http\Controllers;

use App\Models\PrivacyPolicy;

use Illuminate\Http\Request;

class PrivacyPolicyController extends Controller
{
    public function index(){
        $privacyPolicy = PrivacyPolicy::find(1);
//        dd($privacyPolicy);
        return view('backend.privacyPolicy', compact('privacyPolicy'));
    }

    public function update(Request $request, $id = null){
//        dd($request->all());
        $request->validate([
            'content' => 'required',
        ]);
        if ($id){
            $privacyPolicy = PrivacyPolicy::find($id);
            $privacyPolicy->update($request->all());
        }else{
            PrivacyPolicy::create($request->all());
        }
        return redirect()->back();

    }
}
