<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert(
            [
            'name' =>'Popravak računala',
            'description'=> 'Popravak stolnog računala',
            'price' => '100',
            ]
            );
    }
}
