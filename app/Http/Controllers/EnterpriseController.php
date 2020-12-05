<?php

namespace App\Http\Controllers;

use App\Traits\ApiCrudTrait;
use App\Enterprise;
use Illuminate\Http\Request;


class EnterpriseController extends Controller
{
    use ApiCrudTrait;

    public function model(){
        return Enterprise::class;
    }


    public function validationRules ( $resource_id = 0 )
    {
        return ['company_name'=>'required', 'cnpj'=>'required', 'fantasy_name'=>'required', 'address_id'=>'required', 'contact_id'=>'required'];
    }

    public function validationRulesId ( $resource_id = 0 )
    {
        return ['id'=>'required','company_name'=>'required', 'cnpj'=>'required', 'fantasy_name'=>'required','address_id'=>'required', 'contact_id'=>'required'];

    }
}
