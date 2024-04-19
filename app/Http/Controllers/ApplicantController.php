<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Category;

class ApplicantController extends Controller
{

    public function index(){
        $applications = Application::all();
        return view('backend.applicants.index')->with('applications', $applications);
    }

    public function form(Application $application = null){
        return view('backend.applicants.form')->with('application', $application);
    }
    public function destroy(Application $application){
        $application->delete();
        session()->flash('message', 'Application deleted successfully.');
        return redirect()->route('applicants.index');
    }
}
