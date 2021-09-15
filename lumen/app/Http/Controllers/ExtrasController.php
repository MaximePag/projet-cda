<?php

namespace App\Http\Controllers;

use App\Models\Extras;
use Illuminate\Http\Request;

class ExtrasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $extras = Extras::all();
        return response()->json($extras);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $extra = new Extras();

        $extra->name             = $request->name;

        $extra->save();

        return response()->json("Client bien enregistré!");
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
     * @param  \App\Extras  $extras
     * @return \Illuminate\Http\Response
     */
    public function show(Extras $extras)
    {
        $extra = extra::find($id);
        return response()->json($extra);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Extras  $extras
     * @return \Illuminate\Http\Response
     */
    public function edit(Extras $extras)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Extras  $extras
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Extras $extras)
    {
        $extra = extra::find($id);

        $extra->name          = $request->name;

        $extra->save();

        return response()->json($extra);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Extras  $extras
     * @return \Illuminate\Http\Response
     */
    public function destroy(Extras $extras)
    {
        //
    }
}
