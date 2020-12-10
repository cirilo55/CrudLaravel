<?php

namespace App\Http\Controllers;

use App\Cashier;
use Illuminate\Http\Request;
use App\Traits\ApiCrudTrait;

class CashierController extends Controller
{
    use ApiCrudTrait;

    public function model(){
        return Cashier::class;
    }
    public function validationRules ( $resource_id = 0 )
    {
        return ['movement_date'=>'required', 'value_of_sale'=>'required', 'value_of_product'=>'required', 'deduction'=>'required'];
    }

    public function validationRulesId ( $resource_id = 0 )
    {
        return ['id'=>'required','movement_date'=>'required', 'value_of_sale'=>'required', 'value_of_product'=>'required', 'deduction'=>'required'];

    }
}
