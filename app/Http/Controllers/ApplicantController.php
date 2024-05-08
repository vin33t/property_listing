<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use App\Models\Category;
use Masmerise\Toaster\Toaster;

class ApplicantController extends Controller
{

    public function index(){
        $applications = Applicant::all();
        return view('backend.applicants.index')->with('applications', $applications);
    }

    public function form(Applicant $application = null){
        return view('backend.applicants.form')->with('application', $application);
    }
    public function destroy(Applicant $application){
        $application->delete();
        session()->flash('message', 'Applicant deleted successfully.');
        return redirect()->route('applicants.index');
    }

    public function profile(Applicant $applicant){
        return view('backend.applicants.profile')->with('applicant', $applicant);
    }
}
