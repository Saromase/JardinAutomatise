<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\BaseModel;

class Garden extends Model
{
    use BaseModel;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'user_id', 'template_id'
    ];
}
