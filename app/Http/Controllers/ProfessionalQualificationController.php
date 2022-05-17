<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProfessionalQualificationRequest;
use App\Http\Requests\UpdateProfessionalQualificationRequest;
use App\Models\ProfessionalQualification;

class ProfessionalQualificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProfessionalQualificationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProfessionalQualificationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProfessionalQualification  $professionalQualification
     * @return \Illuminate\Http\Response
     */
    public function show(ProfessionalQualification $professionalQualification)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProfessionalQualification  $professionalQualification
     * @return \Illuminate\Http\Response
     */
    public function edit(ProfessionalQualification $professionalQualification)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProfessionalQualificationRequest  $request
     * @param  \App\Models\ProfessionalQualification  $professionalQualification
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProfessionalQualificationRequest $request, ProfessionalQualification $professionalQualification)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProfessionalQualification  $professionalQualification
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProfessionalQualification $professionalQualification)
    {
        //
    }
}
