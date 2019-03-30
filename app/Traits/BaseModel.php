<?php
namespace App\Traits;

trait BaseModel
{
    public static function hydrateRequest ($model, $requestInputs)
    {
        foreach ($requestInputs as $key => $value) {
            $model->$key = $value;
        }

        return $model;
    }
}