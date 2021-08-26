<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return response()->json($users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $user = new User();

        $user->firstname            = $request->firstname;
        $user->lastname             = $request->lastname;
        $user->phoneNumber          = $request->phoneNumber;
        $user->mail                 = $request->mail;
        $user->password             = $request->password;
        $user->adress               = $request->adress;
        $user->additionalAdress     = $request->additionalAdress;
        $user->zipCode              = $request->zipCode;
        $user->city                 = $request->city;
        $user->profesionnalNumber   = $request->profesionnalNumber;

        $user->save();

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
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return response()->json($user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);

        $user->firstname          = $request->firstname;
        $user->lastname           = $request->lastname;
        $user->phoneNumber        = $request->phoneNumber;
        $user->mail               = $request->mail;
        $user->password           = $request->password;
        $user->adress             = $request->adress;
        $user->additionalAdress   = $request->additionalAdress;
        $user->zipCode            = $request->zipCode;
        $user->city               = $request->city;
        $user->profesionnalNumber = $request->profesionnalNumber;

        $user->save();

        return response()->json($user);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();

        return response()->json('Fiche client bien supprimée');
    }
}
