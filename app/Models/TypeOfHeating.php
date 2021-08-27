<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

class TypeOfHeating extends Model
{
    use Authenticatable, Authorizable, HasFactory;

    protected $table = 'g5e1D_typeOfHeating';

    protected $fillable = [
        'id', 'name',
    ];

    protected $hidden = [
    ];
}
