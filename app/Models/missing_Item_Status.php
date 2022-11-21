<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class missing_Item_Status extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'missing__item__statuses';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id', 'class', 'room_id', 'location_id', 'attendence_collect_at', 'attendence_return_at', 'marker_return_at', 'marker_collect_at'];

    
}
