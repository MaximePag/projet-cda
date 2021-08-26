<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AppointmentsSubjects extends Model
{
    protected $table = 'appointmentssubjects';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'name',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
         
    ];
}
