<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tickets')->insert(
           [
           'title' =>'Popravak računala',
           'description' => 'Popravak stolnog HP računala',
           'status' => 'U rješavanju',
           'time_units' => '1',
           'service_id' => '1',
           'user_id' =>'1'

           ]
           );
    }
}
