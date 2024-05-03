<?php

namespace App\Http\Controllers;

use App\Mail\FeedbackMail;
use App\Mail\MeetingAlertMail;
use App\Mail\PropertyAlertMail;
use App\Mail\RentReminderMail;
use Illuminate\Http\Request;


class NotificationController extends Controller
{
    public function notify($model, $type, $id, Request $request)
    {
        $data = "App\\Models\\" . $model;
        $data = $data::find($id);
        if($model === 'appointment')
        {
            if ($type === 'meeting_alert'){
                \Mail::to($data->client_email)->send(new MeetingAlertMail($data));
            }
            if ($type === 'feedback_alert'){
                \Mail::to($data->client_email)->send(new FeedbackMail());
            }
        } elseif ($model === 'rent') {
            if ($type === 'rent_reminder'){
                \Mail::to($data->tenant_email)->send(new RentReminderMail());
            }
        } elseif($model === 'application') {


            if ($type === 'applicant'){

                $property = \App\Models\Property::find($request->property_id);
                $application = \App\Models\Application::find($request->application_id);

                \Mail::to($application->email)->send(new PropertyAlertMail($property));
            }
        }
        return back();
    }
}
