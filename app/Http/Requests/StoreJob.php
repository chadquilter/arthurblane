<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreJob extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return True;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
          'job_title' => 'required',
          'job_summary' => 'required',
          'job_notes' => 'required',
          'serviceID' => 'required'
        ];
    }

    public function messages()
    {
    return [
        'job_title.required' => 'A job title is required!',
        'job_summay.required'  => 'A job summary is required!',
        'job_notes.required' => 'Notes for job are required!',
        'serviceID.required' => 'A job service/type is required!',
    ];
  }

}
