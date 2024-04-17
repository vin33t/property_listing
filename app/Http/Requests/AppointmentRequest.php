<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AppointmentRequest extends FormRequest
{
    public function rules()
    {
        return [
            'client_name' => ['required'],
            'location' => ['nullable'],
            'with_whom' => ['required'],
            'remark' => ['nullable'],
            'appointment_date' => ['required', 'date'],
            'appointment_time' => ['nullable', 'date'],
        ];
    }

    public function authorize()
    {
        return true;
    }
}
