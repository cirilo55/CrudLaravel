<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Traits\ApiCrudTrait;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    use ApiCrudTrait;

    public function model(){
        return Contact::class;
    }


    public function validationRules ( $resource_id = 0 )
    {
        return ['name'=>'required', 'email'=>'required'];
    }

    public function validationRulesId ( $resource_id = 0 )
    {
        return ['id'=>'required','name'=>'required', 'email'=>'required'];

    }
}
