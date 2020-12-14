<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
           [
           'first_name' =>'Pero',
           'last_name' => 'Perić',
           'email' => 'pero@peric.com',
           'password' => '123',
           'phone_number' => '154561',
           'address_id' => '1',
           'role_id' => '1',
           'group_id' => '1',
           'company_id' => '1'

           ]
           );
    }
}
