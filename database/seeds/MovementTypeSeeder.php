<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class MovementTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Db::table('movement_types')->insert([
            'description'=>'Venda a debito'
        ]);
        Db::table('movement_types')->insert([
            'description'=>'Venda a credito'
        ]);
        Db::table('movement_types')->insert([
            'description'=>'Venda a prazo'
        ]);
        Db::table('movement_types')->insert([
            'description'=>'Pagamento de Contas'
        ]);
        Db::table('movement_types')->insert([
            'description'=>'Pagamento a Fornecedores'
        ]);


    }
}
