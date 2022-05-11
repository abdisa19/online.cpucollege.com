<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OnlineApplicationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $m = date('m');
        $d = date('d');
        $y = date('Y') - 19;
        $date = $m . '/' . $d . '/' . $y;

        $entryYear = date('Y') - 7;
        return [
            'firstName' => 'required',
            'secondName' => 'required',
            'lastName' => 'required',
            'sex' => 'required',
            'dateOfBirth' => 'bail|required|before_or_equal:' . $date,
            'nationality' => 'required',
            'current_education_level' => 'required',
            'current_education_department' => 'required',
            'applying_program' => 'required',
            'applying_department' => 'required',
            'applying_enrollment' => 'required', 
            //'agrement' => 'required', 
            'country' => 'required',
            'city' => 'required',
            'email' => 'required',
            'mobile' => 'required|max:10|min:10',
            'profile_ud_degree_file_path.*' => 'mimes:pdf,png,jpge,jpg',
            'profile_ud_transcript_file_path.*' => 'mimes:pdf,png,jpge,jpg',
            'profile_hs_transcript_file_path.*' => 'mimes:pdf,png,jpge,jpg',
            'profile_id_card_file_path.*' => 'mimes:pdf,png,jpge,jpg',
        ];
    }
}
