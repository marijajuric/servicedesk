<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notes')->insert(
           [
           'title' =>'Rješenje',
           'description' => 'Zamijenjena MBO. Test ok.',
           'ticket_id' =>'1'

           ]
           );
    }
}
