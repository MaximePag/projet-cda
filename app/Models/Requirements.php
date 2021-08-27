<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Requirements extends Model
{
    protected $table = 'g5e1D_requirements';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'maxPrice', 'minPrice', 'livingArea', 'landArea', 'livingRoomArea', 'roomNumber', 'bedRoomNumber', 'bathRoomNumber', 'toiletNumber', 'floorNumber', 'garage', 'parking', 'constructionYear', 'worksToBeDone', 'note'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
         
    ];
}
