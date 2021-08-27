<?php

namespace App\Http\Controllers;

use App\Models\Documents;
use Illuminate\Http\Request;

class DocumentsController extends Controller
{

    public function index()
    {
        $documents = Documents::all();
        return response()->json($documents);
    }

    public function create(Request $request)
    {        
        $documents = new Documents();

        $documents->title = $request->title;
        $documents->path = $request->path;
        $documents->uploadDate = $request->uploadDate;

        $documents->save();

        return response()->json("Votre/Vos documents ont bien été enregistrer.");
    }

    public function store(Request $request)
    {
        
    }

    public function show($id)
    {
        $documents = Documents::find($id);
        return response()->json($documents);
    }

    public function edit(Documents $documents)
    {
        
    }

    public function update(Request $request, $id)
    {
        $documents = Documents::find($id);

        $documents->title = $request->title;
        $documents->path = $request->path;
        $documents->uploadDate = $request->uploadDate;

        $documents->save();

        return response()->json($documents);
    }

    public function delete($id)
    {
        $documents = Documents::find($id);
        $documents->delete();

        return response()->json('Votre/Vos documents ont bien été supprimer.');
    }
}
