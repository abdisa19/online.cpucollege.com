<?php

namespace App\Http\Controllers;

use App\Http\Requests\OnlineApplicationRequest;
use App\Models\OnlineApplicant;
use Carbon\Carbon;
use Illuminate\Http\Request;

class OnlineApplication extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('online-application');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('online-application');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OnlineApplicationRequest $request)
    {
        $application = new OnlineApplicant;
        $application->firstName = mb_convert_case($request->firstName, 2);
        $application->secondName = mb_convert_case($request->secondName, 2);
        $application->lastName = mb_convert_case($request->lastName, 2);
        $application->sex = $request->sex;
        $application->dateOfBirth = $request->dateOfBirth;
        $application->nationality = $request->nationality;
        $application->country = $request->country;
        $application->city = $request->city;
        $application->email = $request->email;
        $application->mobile = $request->mobile;
        $application->current_education_level = $request->current_education_level;
        $application->current_education_department = $request->current_education_department;
        $application->applying_program = $request->applying_program;
        $application->applying_department = $request->applying_department;
        $application->applying_enrollment = $request->applying_enrollment;

        if ($request->hasFile('profile_ud_degree_file')) {
            $profile_ud_degree_file_path = $request->file('profile_ud_degree_file')->storeAs(
                $request->email,
                'ud_degree_file.' . $request->file('profile_ud_degree_file')->getClientOriginalExtension(),
            );
            $application->profile_ud_degree_file_path = $profile_ud_degree_file_path;
        }
        if ($request->hasFile('profile_ud_transcript_file')) {
            $profile_ud_transcript_file_path = $request->file('profile_ud_transcript_file')->storeAs(
                $request->email,
                'ud_transcript_file.' . $request->file('profile_ud_transcript_file')->getClientOriginalExtension(),
            );
            $application->profile_ud_transcript_file_path = $profile_ud_transcript_file_path;
        }
        if ($request->hasFile('profile_hs_transcript_file')) {
            $profile_hs_transcript_file_path = $request->file('profile_hs_transcript_file')->storeAs(
                $request->email,
                'hs_transcript_file.' . $request->file('profile_hs_transcript_file')->getClientOriginalExtension(),
            );
            $application->profile_hs_transcript_file_path = $profile_hs_transcript_file_path;
        }
        if ($request->hasFile('profile_id_card_file')) {
            $profile_id_card_file_path = $request->file('profile_id_card_file')->storeAs(
                $request->email,
                'profile_id_card_file.' . $request->file('profile_id_card_file')->getClientOriginalExtension(),
            );
            $application->profile_id_card_file_path = $profile_id_card_file_path;
        }

        $application->save();

        return redirect(route('online.create'))->with('message', 'Your Application has been successfully submitted!')->with('alert-type', 'success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
