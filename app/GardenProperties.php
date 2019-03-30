<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GardenProperties extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'garden_id', 'outdoor_humidity','outdoor_temperature','is_day', 'last_rain'
    ];
}
