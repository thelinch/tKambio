<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class typeChangeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('change_type')->insert([
            [
                'tc_venta' => 12.22,
                'tc_compra' => 30,
            ], [
                'tc_venta' => 18.22,
                'tc_compra' => 40,
            ]

        ]);
    }
}
