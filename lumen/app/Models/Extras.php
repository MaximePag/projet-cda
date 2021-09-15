<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Extras extends Model
{
    protected $table = 'g5e1D_extras';
}

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'name'
    ];