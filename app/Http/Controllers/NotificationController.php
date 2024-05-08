<?php

namespace App\Http\Controllers;

use App\Mail\FeedbackMail;
use App\Mail\MeetingAlertMail;
use App\Mail\PropertyAlertMail;
use App\Mail\RentReminderMail;
use App\Models\Meeting;
use Illuminate\Http\Request;


class NotificationController extends Controller
{
    public function notify($model, $type, $id, Request $request)
    {
        $data = "App\\Models\\" . ucfirst($model);
        $data = $data::find($id);
        if($model === 'appointment')
        {
            if ($type === 'meeting_alert'){
                $data = [
                    'client_name' => $data->client_name,
                    'client_email' => $data->client_email,
                    'meeting' => Meeting::findOrFail($request->meeting_id)
                ];
                \Mail::to($data['client_email'])->send(new MeetingAlertMail($data));
            }


            if ($type === 'feedback_alert'){


                $data = [
                    'client_email' => $data->client_email,
                    'meeting' => Meeting::findOrFail($request->meeting_id)
                ];

                \Mail::to($data['client_email'])->send(new FeedbackMail($data));
            }
        } elseif ($model === 'rent') {
            if ($type === 'rent_reminder'){
                \Mail::to($data->tenant_email)->send(new RentReminderMail());
            }
        } elseif($model === 'applicant') {
            if ($type === 'applicant'){
                $property = \App\Models\Property::find($request->property_id);
                $application = \App\Models\Applicant::find($request->application_id);
                \Mail::to($application->email)->send(new PropertyAlertMail($property));
            }
        }
        return back();
    }
}
