<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(\App\Address::class, 100)->create();
        factory(\App\Enterprise::class, 20)->create();
        factory(\App\Contact::class, 100)->create();
        factory(App\EnterpriseGroup::class, 5)->create();
        factory(\App\Cashier::class, 10)->create();
        $this->call(MovementTypeSeeder::class);
        $this->call(cashier_movement_type::class);

    }
}
