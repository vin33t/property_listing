<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Category;
use App\Models\Meeting;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index(){
        $appointments = Appointment::all();
        return view('backend.appointment.index')->with('appointments', $appointments);
    }


    public function form(Appointment $appointment = null, $type = 'create',Meeting $meeting = null){
        return view('backend.appointment.form')->with('appointment', $appointment)->with('type', $type)->with('meeting', $meeting);
    }
    public function destroy(Appointment $appointment){
        $appointment->delete();
        session()->flash('message', 'Appointment deleted successfully.');
        return redirect()->route('appointment.index');
    }

    public function feedback(Request $request, Meeting $meeting){

        $feedback = $request->feedback;
        $meeting->update(['feedback' => $feedback]);

        // add success in session and redirect back
        session()->flash('message', 'Feedback added successfully.');
        return back();
    }


}
