<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categories;

class CategoriesSeeder extends Seeder
{
    public function run()
    {
        Categories::create([
            'id' => '1',
            'name' => 'Stavební materiál',
            'image' => 'resources/images/mat-clear.png',
            'url' => '/shop-materials',
            'description' => 'Pro Každý Váš vysněný projekt',
        ]);

        Categories::create([
            'id' => '2',
            'name' => 'Pracovní nářadí',
            'image' => 'resources/images/tools-clear.png',
            'url' => '/shop-tools',
            'description' => 'Aby Vám práce šla vždy od ruky',
        ]);

        Categories::create([
            'id' => '3',
            'name' => 'Zahradní potřeby',
            'image' => 'resources/images/garden-clear.png',
            'url' => '/shop-garden',
            'description' => 'Aby Vám zahrada rostla před očima',
        ]);

        Categories::create([
            'id' => '4',
            'name' => 'Decorace a nábytek',
            'image' => 'resources/images/decor-clear.png',
            'url' => '/shop-decor',
            'description' => 'Aby se Vám doma vždy líbilo',
        ]);

        $this->call(ProductsSeeder::class);
        $this->call(UserSeeder::class);
    }
}
