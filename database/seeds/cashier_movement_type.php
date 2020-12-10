<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class cashier_movement_type extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Db::table('cashier_movement_type')->insert([
            'cashier_id'=>'1',
            'movement_type_id'=>'1'
        ]);

        Db::table('cashier_movement_type')->insert([
            'cashier_id'=>'1',
            'movement_type_id'=>'2'
        ]);
        Db::table('cashier_movement_type')->insert([
            'cashier_id'=>'1',
            'movement_type_id'=>'3'
        ]);
        Db::table('cashier_movement_type')->insert([
            'cashier_id'=>'3',
            'movement_type_id'=>'1'
        ]);
        Db::table('cashier_movement_type')->insert([
            'cashier_id'=>'2',
            'movement_type_id'=>'3'
        ]);
        Db::table('cashier_movement_type')->insert([
            'cashier_id'=>'2',
            'movement_type_id'=>'4'
        ]);
        Db::table('cashier_movement_type')->insert([
            'cashier_id'=>'3',
            'movement_type_id'=>'4'
        ]);

    }
}
