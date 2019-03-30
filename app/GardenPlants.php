<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GardenPlants extends Model
{

    public $table = 'garden_plants';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'garden_id', 'type','humidity','last_sprinkling', 'min_humidity', 'last_sprinkling_fertilizer'
    ];
}
