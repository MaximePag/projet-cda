<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Client\Request;
use Laravel\Lumen\Auth\Authorizable;

class User extends Model implements AuthenticatableContract, AuthorizableContract
{
    use Authenticatable, Authorizable, HasFactory;

    protected $table = 'g5e1D_users';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
         
    ];

   /* public function show($id){
        $user = User::find($id);
        return response()->json($user);
    }

    public function create(Request $request){

        $user = new User();

        $user->firstname     = $request->firstname;
        $user->lastname      = $request->lastname;
        $user->phoneNumber     = $request->phoneNumber;
        $user->mail     = $request->mail;
        $user->password     = $request->password;
        $user->adress     = $request->adress;
        $user->additionalAdress     = $request->additionalAdress;
        $user->zipCode     = $request->zipCode;
        $user->city    = $request->city;
        $user->profesionnalNumber     = $request->profesionnalNumber;

        $user->save();

        return response()->json("Client bien enregistré!");

    }

    public function update(Request $request, $id){

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

    public function delete($id){
        $user = User::find($id);
        $user->delete();

        return response()->json('La fiche client à bien été supprimée');
    }*/


}
