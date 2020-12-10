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
//
        try {
            $model = $this->model()::paginate(15);
            return response([$model , 'msg' => 'Carregado com sucesso'] , 200);
        }
        catch (\Exception $exception){
            return response(['msg'=> 'Algo deu errado :/ '], 404);
        }

    }

    public function store(Request $request)
    {
        try{
            Validator::make($request->all(), $this->validationRules())->validate();


        $new = $this->model()::create($request->all());

        return response([$new, 'msg'=>"Registro criado com sucesso."], 201);
        }catch (\Exception $e) {
            return response(["msg"=>"Não foi possivel criar registro favor conferir os campos ¯\_(ツ)_/¯ ", $e->getMessage()],400);
        }
    }


    public function update(Request $request)
    {
        try{
        $model = $this->model()::find($request['id']);
        Validator::make($request->all(), $this->validationRulesId())->validate();

        if($model){
            ($model)->update($request->all());
            return response([$model, 'msg'=>'Atualizado com sucesso'], 200);
        }else{
            return response(['msg'=>'id não encontrado.'],404);
        }
        }catch (\Exception $e) {
            return response(["msg"=>"Não foi possivel criar registro favor conferir os campos"],400);
        }

    }


    public function destroy(Request $request)
    {
        try {
            $model = $this->model()::find($request['id']);
            if ($model) {
                $model->delete();
                return response(['msg' => "Deletado com sucesso, id:{$model['id']} ."] , 200);
            } else {
                return response(['msg' => 'id não encontrado'] , 404);
            }
        }
        catch (\Exception $e) {
            return response(["msg"=>"Algo deu errado ¯\_(ツ)_/¯"],400);
        }
    }

}
