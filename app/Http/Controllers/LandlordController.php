<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Landlord;

class LandlordController extends Controller
{
    public function index()
    {
        $landlords = Landlord::all();
        return view('backend.landlord.index')->with('landlords', $landlords);
    }

    public function form(Landlord $landlord = null)
    {
        return view('backend.landlord.form')->with('landlord', $landlord);
    }

    public function destroy(Landlord $landlord)
    {
        $landlord->delete();
        session()->flash('message', 'Landlord deleted successfully.');
        return redirect()->route('landlords.index');
    }
}
