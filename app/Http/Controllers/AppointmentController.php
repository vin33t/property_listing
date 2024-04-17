<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Category;

class AppointmentController extends Controller
{
    public function index(){
        $appointments = Appointment::all();
        return view('backend.appointment.index')->with('appointments', $appointments);
    }


    public function form(Appointment $appointment = null){
        return view('backend.appointment.form')->with('appointment', $appointment);
    }
    public function destroy(Appointment $appointment){
        $appointment->delete();
        session()->flash('message', 'Appointment deleted successfully.');
        return redirect()->route('appointment.index');
    }


}
