<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('devices')->insert(
           [
           'type' =>'Računalo',
           'description' => 'Stolno računalo',
           'contract_id' =>'1',
           'serial_number' => '1fsa1255'

           ]
           );
    }
}
