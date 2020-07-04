<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RolesTableSeeder::class,
            CategoriesTableSeeder::class,
            ProductsTableSeeder::class,
            UsersTableSeeder::class,
            PermissionsTableSeeder::class,
            PermissinsRolesTableSeeder::class,
        ]);
    }
}
