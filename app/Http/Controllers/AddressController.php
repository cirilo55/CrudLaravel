<?php

namespace App\Http\Controllers;
use App\Address as Address;

use Dotenv\Validator;
use Illuminate\Http\Request;

class AddressController extends Controller
{

    public function index()
    {
        return Address::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'street' => 'required',
            'city' => 'required',
            'state' => 'required'
        ]);
        $new = Address::create($request->all());


        return response([$new, 'msg'=>'Endereço criado com sucesso.'], 201);

    }

    public function update(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'street' => 'required',
            'city' => 'required',
            'state' => 'required'
        ]);

        $address = Address::find($request['id']);

        if($address){
           $result = tap($address)->update($request->all());

           return response([$result, 'msg'=>'Atualizado com sucesso'], 200);
        }else{
            return response(['msg'=>'id não encontrado.'],404);
        }

    }

    public function destroy(Request $request)
    {
        $address = Address::find($request['id']);
        if($address) {
            $address->delete();
            return response(['msg'=>"Deletado com sucesso, id:{$address['id']} ."], 200);
        }else{
            return response(['msg'=>'id não encontrado'], 404);
        }
    }
}
