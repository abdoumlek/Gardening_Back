<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['name' => 'plantes de décoration', 'description' => 'Petites plantes et fleurs de décoration'],
            ['name' => 'arbres de décoration', 'description' => 'Arbres de décoration intérieur et extérieur'],
            ['name' => 'produits de jardinage', 'description' => 'Quelques outils de jardinage comme des pots et des engrais'],
            ['name' => 'arbres fruités', 'description' => 'Arbres fruités comme des pommiers, Citronnier etc...'],
        ]);
    }
}
