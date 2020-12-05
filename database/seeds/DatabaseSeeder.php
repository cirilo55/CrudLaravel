<?php

use Illuminate\Database\Seeder;

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
    }
}
