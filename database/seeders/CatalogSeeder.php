<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CatalogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('catalog')->insert([
            [
                'name' => 'One Panel',
                'category' => 'solar panel',
                'price' => '300.00',
                'supplier' => 'nameOne',
                'description' => 'SOMETHING ELSE',
            ], [
                'name' => 'Two Panel',
                'category' => 'solar panel',
                'price' => '450.00',
                'supplier' => 'nameTwo',
                'description' => 'SOMETHING SOMETHING TWO',
            ], [
                'name' => 'Three',
                'category' => 'inverter',
                'price' => '1000.00',
                'supplier' => 'name_Three',
                'description' => 'SOMETHING SOMETHING Three',
            ],
        ]);
        DB::table('users')->insert([
            'firstname' => "admin",
            'lastname' => "admin",
            'email' => "test@testmail.com",
            'password' => Hash::make('337662'),
            'role' => 'const.admin',
        ]);
    }
}
