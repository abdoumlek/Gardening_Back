<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            ['category_id' => 31,'name' => 'CALAMONDIN', 'description' => 'Un oranger qui pousse à la maison ou sur le balcon, c’est enchanteur. Entre ses fleurs blanches et parfumées, ses agrumes qui ressemblent à des mandarines et son feuillage vert et touffu, il égaye les balcons ou les salons toute l’année. A chaque fois qu’on voit naitre un de ses petits fruits, c’est une victoire. Vous pouvez même goûter (si vous n’avez pas peur de l’acidité). Diamètre du pot : 17 cm Hauteur plante : 45 cm Version avec cache pot : 1 cache-pot en métal style industriel, couleur anthracite mat.','reference'=>'','photo'=>'https://www.interflora.fr/medias/B5CL-505-1.png?context=bWFzdGVyfGltYWdlc3wzMDE1MzZ8aW1hZ2UvcG5nfGltYWdlcy9oZjEvaDdmLzkzMjE1NjQwNDUzNDIucG5nfDY5NWVkZjhiZDg5MDg5NzM2ZjVkMDkwZmQ0YjFhODBlYzBkOTFkYzEwYWMyNGQxOWVmMWM3Y2FiZGY5ZGZjMTc&frz-v=4617','quantity'=>1,'selling_price'=>1.5,'buying_price'=>1.2,'discount'=>0.2],
        ]);
    }
}
