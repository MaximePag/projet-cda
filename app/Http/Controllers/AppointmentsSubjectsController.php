<?php

namespace App\Http\Controllers;

use App\Models\AppointmentsSubjects;
use Illuminate\Http\Request;

class AppointmentsSubjectsController extends Controller
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
    public function create(Request $request)
    {
        $appointmentsSubjects = new AppointmentsSubjects();

        $appointmentsSubjects->name = $request->name;

        $appointmentsSubjects->save();

        return response()->json("Objet du Rendez-vous enregistré");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AppointmentsSubjects  $appointmentsSubjects
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $appointmentsSubjects = AppointmentsSubjects::find($id);
        return response()->json($appointmentsSubjects);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\AppointmentsSubjects  $appointmentsSubjects
     * @return \Illuminate\Http\Response
     */
    public function edit(AppointmentSubjects $appointmentSubjects)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AppointmentsSubjects  $appointmentsSubjects
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $appointmentsSubjects = AppointmentsSubjects::find($id);

        $appointmentsSubjects->name = $request->name;

        $appointmentsSubjects->save();

        return response()->json($appointmentsSubjects);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AppointmentsSubjects  $appointmentsSubjects
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $appointmentsSubjects = AppointmentsSubjects::find($id);
        $appointmentsSubjects->delete();

        return response()->json('Veuillez saisir le motif du rendez-vous');
    }
}
