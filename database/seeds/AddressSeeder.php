<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('addresses')->insert(
            [
            'street_name' =>'Zagrebačka ulica',
            'apartment_number'=> '52a',
            'country' => 'Hrvatska',
            ]
            );
    
    }
}
