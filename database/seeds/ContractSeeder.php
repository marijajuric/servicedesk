<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContractSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contracts')->insert(
           [
           'title' =>'Ugovor o održavanju',
           'description' => 'Ugovor o održavanju računala',
           'contract_duration' =>'2021-02-22',
           'user_id' => '1'

           ]
           );
    }
}
