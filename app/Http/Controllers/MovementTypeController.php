<?php

namespace App\Http\Controllers;

use App\MovementType;
use Illuminate\Http\Request;
use App\Traits\ApiCrudTrait;

class MovementTypeController extends Controller
{
    use ApiCrudTrait;

    public function model(){
        return MovementType::class;
    }
    public function validationRules ( $resource_id = 0 )
    {
        return ['description'=>'required'];
    }

    public function validationRulesId ( $resource_id = 0 )
    {
        return ['id'=>'required','description'=>'required'];

    }
}
