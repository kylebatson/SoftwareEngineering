<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CatalogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('catalog') -> insert([
            [
                'name' => 'Solar Panel',
                'description' => '300 Watt Panel',
                'price' => '1000.00'
            ],[
                'name' => 'Solar Panel Inverter',
                'description' => '1800 VA',
                'price' => '3000.00'
            ]
        ]);
    }
}
