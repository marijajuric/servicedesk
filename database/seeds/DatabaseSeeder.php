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

        $this->call([

            ServiceSeeder::class,
            AddressSeeder::class,
            CompanySeeder::class,
            RoleSeeder::class,
            GroupSeeder::class,
            UserSeeder::class,
            TicketSeeder::class,
            NoteSeeder::class,
            ContractSeeder::class,
            DeviceSeeder::class

        ]);
    }
}
