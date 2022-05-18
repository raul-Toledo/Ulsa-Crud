<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class libros_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Comics')->insert([
            'nomComic'=>'Batman',
            'precio'=>201.59,
        ]);

        DB::table('Comics')->insert([
            'nomComic'=>'X-Men',
            'precio'=>201.59
        ]);
    }
}
