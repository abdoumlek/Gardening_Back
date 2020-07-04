<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            ['name' => 'admin', 'description' => 'system administrator has the right to call everything and delete everything'],
            ['name' => 'operator', 'description' => 'system operator is a vendor has acces to the client calls and has just acces in read rights for commands and client demands'],
            ['name' => 'customer', 'description' => 'simple client has acces to the client calls only'],
        ]);
    }
}
