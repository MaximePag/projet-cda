<?php

namespace App\Http\Controllers;

use App\Models\Requirements;
use Illuminate\Http\Request;

class RequirementsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $requirement = Requirements::all();
        return response()->json($requirements);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $requirements = new Requirements();

        $requirements->maxPrice            = $request->maxPrice;
        $requirements->minPrice            = $request->minPrice;
        $requirements->livingArea          = $request->livingArea;
        $requirements->landArea            = $request->landArea;
        $requirements->livingRoomArea      = $request->livingRoomArea;
        $requirements->roomNumber          = $request->roomNumber;
        $requirements->bedRoomNumber       = $request->bedRoomNumber;
        $requirements->bathRoomNumber      = $request->bathRoomNumber;
        $requirements->toiletNumber        = $request->toiletNumber;
        $requirements->floorNumber         = $request->floorNumber;
        $requirements->garage              = $request->garage;
        $requirements->parking             = $request->parking;
        $requirements->constructionYear    = $request->constructionYear;
        $requirements->worksToBeDone       = $request->worksToBeDone;
        $requirements->note                = $request->note;

        $requirements->save();

        return response()->json("Critères bien enregistrés");
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
     * @param  \App\Models\Requirements  $requirements
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $requirements = Requirements::find($id);
        return response()->json($requirements);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Requirements  $requirements
     * @return \Illuminate\Http\Response
     */
    public function edit(Requirements $requirements)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Requirements  $requirements
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $requirements = Requirements::find($id);

        $requirements->maxPrice            = $request->maxPrice;
        $requirements->minPrice            = $request->minPrice;
        $requirements->livingArea          = $request->livingArea;
        $requirements->landArea            = $request->landArea;
        $requirements->livingRoomArea      = $request->livingRoomArea;
        $requirements->roomNumber          = $request->roomNumber;
        $requirements->bedRoomNumber       = $request->bedRoomNumber;
        $requirements->bathRoomNumber      = $request->bathRoomNumber;
        $requirements->toiletNumber        = $request->toiletNumber;
        $requirements->floorNumber         = $request->floorNumber;
        $requirements->garage              = $request->garage;
        $requirements->parking             = $request->parking;
        $requirements->constructionYear    = $request->constructionYear;
        $requirements->worksToBeDone       = $request->worksToBeDone;
        $requirements->note                = $request->note;

        $requirements->save();

        return response()->json($requirements);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Requirements  $requirements
     * @return \Illuminate\Http\Response
     */
    public function delete(Requirements $requirements)
    {
        $requirements = Requirements::find($id);
        $requirements->delete();

        return response()->json('Critères effacés');
    }
}
