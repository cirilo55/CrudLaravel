<?php

namespace App\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

trait ApiCrudTrait
{
    abstract function model();
    abstract function validationRules($resource_id= 0);
    abstract function validationRulesId($resource_id= 0);


    public function index()
    {
        $model = $this->model()::all();
        $model = $this->model()::paginate(15);
        return response([$model, 'msg'=>'Carregado com sucesso'], 200);

    }

    public function store(Request $request)
    {
        Validator::make($request->all(), $this->validationRules())->validate();

        $new = $this->model()::create($request->all());
        return response([$new, 'msg'=>"Registro criado com sucesso."], 201);
    }


    public function update(Request $request)
    {
        $model = $this->model()::find($request['id']);


        if($model){
            $model->update($request->all());
            return response([$model, 'msg'=>'Atualizado com sucesso'], 200);
        }else{
            return response(['msg'=>'id não encontrado.'],404);
        }

    }


    public function destroy(Request $request)
    {
        $model = $this->model()::find($request['id']);
        if($model) {
            $model->delete();
            return response(['msg'=>"Deletado com sucesso, id:{$model['id']} ."], 200);
        }else{
            return response(['msg'=>'id não encontrado'], 404);
        }
    }

}
