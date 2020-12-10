<?php

namespace App\Http\Controllers;

use App\Traits\ApiCrudTrait;
use App\EnterpriseGroup;
use Illuminate\Http\Request;

class EnterpriseGroupController extends Controller
{
    use ApiCrudTrait;

    public function model(){
        return EnterpriseGroup::class;
    }

    public function validationRules ( $resource_id = 0 )
    {
        return ['group_name'=>'required', 'enterprise_id'=>'required'];
    }

    public function validationRulesId ( $resource_id = 0 )
    {
        return ['id'=>'required','group_name'=>'required', 'enterprise_id'=>'required'];

    }
}
