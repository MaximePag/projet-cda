<?php

namespace App\Http\Controllers;

use App\Models\TypeOfHeating;
use Illuminate\Http\Request;

class TypeOfHeatingController extends Controller
{

    public function index()
    {
        $typeOfHeating = typeOfHeating::all();
        return response()->json($typeOfHeating);
    }

    public function create(Request $request)
    {
        $typeOfHeating = new typeOfHeating();

        $typeOfHeating->name = $request->name;

        $typeOfHeating->save();

        return response()->json('Votre type de chauffage a bien été enregistré.');
    }

    public function store(Request $request)
    {
        
    }

    public function show($id)
    {
        $typeOfHeating = typeOfHeating::find($id);
        return response()->json($typeOfHeating);
    }

    public function edit(TypeOfHeating $typeOfHeating)
    {
        
    }

    public function update(Request $request, $id)
    {
        $typeOfHeating = typeOfHeating::find($id);

        $typeOfHeating->name = $request->name;

        $typeOfHeating->save();

        return response()->json($typeOfHeating);
    }

    public function delete($id)
    {
        $typeOfHeating = typeOfHeating::find($id);
        $typeOfHeating->delete();

        return response()->json('Votre chauffage a bien été supprimé.');
    }
}
